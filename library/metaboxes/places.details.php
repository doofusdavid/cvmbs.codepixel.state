<?php
/**
 * Register meta box(es).
 */
function cvmbsPress_register_place_details_meta_box() {
	add_meta_box(
      'cvmbsPress-place-details',
      __( 'Place Details', 'cvmbsPress' ),
      'cvmbsPress_display_place_details_metabox',
      'place',
      'side'
   );
}
add_action( 'add_meta_boxes', 'cvmbsPress_register_place_details_meta_box' );


/**
* Meta box display callback.
*
* @param WP_Post $post Current post object.
*/
function cvmbsPress_display_place_details_metabox( $post ) {
   // global $post;

	// Nonce field to validate form request came from current site
   wp_nonce_field( 'verify_place_details', 'cvmbs_place_details' );

	// Get the field data if it's been entered
   $prse_status = get_post_meta( $post->ID, '_cvmbs_place_prse', true );
?>
   <ul>
      <li>
         <label class="selectit" for="cvmbs_place_prse"><input type="checkbox" id="cvmbs_place_prse" name="cvmbs_place_prse" value="1" <?php checked( $prse_status, 1 ); ?>>
            PRSE - Program of Research and Scholarly Excellence
         </label>
      </li>
   </ul>
<?php
}


/**
* Save meta box content.
*
* @param int $post_id Post ID
*/
function cvmbsPress_save_meta_box( $post_id ) {

   // Return if the user doesn't have edit permissions.
	if ( !current_user_can( 'edit_post', $post_id ) ) {
      return $post_id;
   }

   // Check if is an autosave
	if ( wp_is_post_autosave( $post_id ) ) {
      return $post_id;
   }

   // Verify this has proper authorization
	if ( !isset( $_POST['cvmbs_place_details'] ) || !wp_verify_nonce( $_POST['cvmbs_place_details'], 'verify_place_details' ) ) {
      return $post_id;
   }

   // Check if there was a multisite switch before
   if ( is_multisite() && ms_is_switched() ) {
      return $post_id;
   }

   $prse = $_POST['cvmbs_place_prse'];
   if ( isset( $prse ) ) {
      update_post_meta( $post_id, '_cvmbs_place_prse', $prse );
   } else {
      update_post_meta( $post_id, '_cvmbs_place_prse', '' );
   }

}
add_action( 'save_post', 'cvmbsPress_save_meta_box' );
