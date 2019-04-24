<?php

class GetMembersBySearchName
{

  /**
   * 
   * @var string $searchName
   * @access public
   */
  public $searchName = null;

  /**
   * 
   * @param string $searchName
   * @access public
   */
  public function __construct($searchName)
  {
    $this->searchName = $searchName;
  }

}
