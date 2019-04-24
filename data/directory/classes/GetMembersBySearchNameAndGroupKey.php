<?php

class GetMembersBySearchNameAndGroupKey
{

  /**
   * 
   * @var string $searchName
   * @access public
   */
  public $searchName = null;

  /**
   * 
   * @var string $groupKey
   * @access public
   */
  public $groupKey = null;

  /**
   * 
   * @param string $searchName
   * @param string $groupKey
   * @access public
   */
  public function __construct($searchName, $groupKey)
  {
    $this->searchName = $searchName;
    $this->groupKey = $groupKey;
  }

}
