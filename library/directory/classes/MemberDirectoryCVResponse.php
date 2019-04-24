<?php

class MemberDirectoryCVResponse
{

  /**
   * 
   * @var base64Binary $DocumentData
   * @access public
   */
  public $DocumentData = null;

  /**
   * 
   * @var int $MemberId
   * @access public
   */
  public $MemberId = null;

  /**
   * 
   * @param int $MemberId
   * @access public
   */
  public function __construct($MemberId)
  {
    $this->MemberId = $MemberId;
  }

}
