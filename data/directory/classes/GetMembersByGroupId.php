<?php

class GetMembersByGroupId
{

  /**
   * 
   * @var int $id
   * @access public
   */
  public $id = null;

  /**
   * 
   * @param int $id
   * @access public
   */
  public function __construct($id)
  {
    $this->id = $id;
  }

}
