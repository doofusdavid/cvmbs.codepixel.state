<?php

class MemberContactResponse
{

  /**
   * 
   * @var string $ContactTypeDescription
   * @access public
   */
  public $ContactTypeDescription = null;

  /**
   * 
   * @var int $Id
   * @access public
   */
  public $Id = null;

  /**
   * 
   * @var boolean $IsPrimary
   * @access public
   */
  public $IsPrimary = null;

  /**
   * 
   * @var string $PhoneNumber
   * @access public
   */
  public $PhoneNumber = null;

  /**
   * 
   * @param int $Id
   * @param boolean $IsPrimary
   * @access public
   */
  public function __construct($Id, $IsPrimary)
  {
    $this->Id = $Id;
    $this->IsPrimary = $IsPrimary;
  }

}
