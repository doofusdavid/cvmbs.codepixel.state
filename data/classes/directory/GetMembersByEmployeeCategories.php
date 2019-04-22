<?php

class GetMembersByEmployeeCategories
{

  /**
   * 
   * @var string[] $employeeCategories
   * @access public
   */
  public $employeeCategories = null;

  /**
   * 
   * @param string[] $employeeCategories
   * @access public
   */
  public function __construct($employeeCategories)
  {
    $this->employeeCategories = $employeeCategories;
  }

}
