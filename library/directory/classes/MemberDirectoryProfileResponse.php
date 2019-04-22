<?php

class MemberDirectoryProfileResponse
{

  /**
   * 
   * @var int $Id
   * @access public
   */
  public $Id = null;

  /**
   * 
   * @var string $ProfileMetaData
   * @access public
   */
  public $ProfileMetaData = null;

  /**
   * 
   * @var string $ProfileText
   * @access public
   */
  public $ProfileText = null;

  /**
   * 
   * @param int $Id
   * @access public
   */
  public function __construct($Id)
  {
    $this->Id = $Id;
  }

}
