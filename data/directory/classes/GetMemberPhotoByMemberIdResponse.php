<?php

class GetMemberPhotoByMemberIdResponse
{

  /**
   * 
   * @var MemberPhotoResponse $GetMemberPhotoByMemberIdResult
   * @access public
   */
  public $GetMemberPhotoByMemberIdResult = null;

  /**
   * 
   * @param MemberPhotoResponse $GetMemberPhotoByMemberIdResult
   * @access public
   */
  public function __construct($GetMemberPhotoByMemberIdResult)
  {
    $this->GetMemberPhotoByMemberIdResult = $GetMemberPhotoByMemberIdResult;
  }

}
