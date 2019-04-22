<?php

class GetGroupsByMemberId
{

  /**
   * 
   * @var int $memberId
   * @access public
   */
  public $memberId = null;

  /**
   * 
   * @param int $memberId
   * @access public
   */
  public function __construct($memberId)
  {
    $this->memberId = $memberId;
  }

}
