<?php

class GetMembersByEmployeeCategoriesResponse
{

  /**
   * 
   * @var MemberResponse[] $GetMembersByEmployeeCategoriesResult
   * @access public
   */
  public $GetMembersByEmployeeCategoriesResult = null;

  /**
   * 
   * @param MemberResponse[] $GetMembersByEmployeeCategoriesResult
   * @access public
   */
  public function __construct($GetMembersByEmployeeCategoriesResult)
  {
    $this->GetMembersByEmployeeCategoriesResult = $GetMembersByEmployeeCategoriesResult;
  }

}
