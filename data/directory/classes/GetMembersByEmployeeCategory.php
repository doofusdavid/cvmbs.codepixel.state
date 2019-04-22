<?php

class GetMembersByEmployeeCategory
{

  /**
   * 
   * @var string $employeeCategory
   * @access public
   */
  public $employeeCategory = null;

  /**
   * 
   * @param string $employeeCategory
   * @access public
   */
  public function __construct($employeeCategory)
  {
    $this->employeeCategory = $employeeCategory;
  }

}
