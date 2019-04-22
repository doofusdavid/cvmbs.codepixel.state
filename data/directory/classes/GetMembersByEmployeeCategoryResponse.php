<?php

class GetMembersByEmployeeCategoryResponse
{

  /**
   * 
   * @var MemberResponse[] $GetMembersByEmployeeCategoryResult
   * @access public
   */
  public $GetMembersByEmployeeCategoryResult = null;

  /**
   * 
   * @param MemberResponse[] $GetMembersByEmployeeCategoryResult
   * @access public
   */
  public function __construct($GetMembersByEmployeeCategoryResult)
  {
    $this->GetMembersByEmployeeCategoryResult = $GetMembersByEmployeeCategoryResult;
  }

}
