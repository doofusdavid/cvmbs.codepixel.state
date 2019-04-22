<?php

class GroupResponse
{

  /**
   * 
   * @var string $GroupFriendlyName
   * @access public
   */
  public $GroupFriendlyName = null;

  /**
   * 
   * @var string $GroupName
   * @access public
   */
  public $GroupName = null;

  /**
   * 
   * @var int $Id
   * @access public
   */
  public $Id = null;

  /**
   * 
   * @var boolean $IsPrimaryGroup
   * @access public
   */
  public $IsPrimaryGroup = null;

  /**
   * 
   * @param int $Id
   * @param boolean $IsPrimaryGroup
   * @access public
   */
  public function __construct($Id, $IsPrimaryGroup)
  {
    $this->Id = $Id;
    $this->IsPrimaryGroup = $IsPrimaryGroup;
  }

}
