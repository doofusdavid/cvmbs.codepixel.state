<?php

class GetMembersByEmployeeCategoryAndGroupKey
{

  /**
   * 
   * @var string $employeeCategory
   * @access public
   */
  public $employeeCategory = null;

  /**
   * 
   * @var string $groupKey
   * @access public
   */
  public $groupKey = null;

  /**
   * 
   * @param string $employeeCategory
   * @param string $groupKey
   * @access public
   */
  public function __construct($employeeCategory, $groupKey)
  {
    $this->employeeCategory = $employeeCategory;
    $this->groupKey = $groupKey;
  }

}
