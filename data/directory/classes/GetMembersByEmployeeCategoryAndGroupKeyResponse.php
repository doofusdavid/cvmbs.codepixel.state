<?php

class GetMembersByEmployeeCategoryAndGroupKeyResponse
{

  /**
   * 
   * @var MemberResponse[] $GetMembersByEmployeeCategoryAndGroupKeyResult
   * @access public
   */
  public $GetMembersByEmployeeCategoryAndGroupKeyResult = null;

  /**
   * 
   * @param MemberResponse[] $GetMembersByEmployeeCategoryAndGroupKeyResult
   * @access public
   */
  public function __construct($GetMembersByEmployeeCategoryAndGroupKeyResult)
  {
    $this->GetMembersByEmployeeCategoryAndGroupKeyResult = $GetMembersByEmployeeCategoryAndGroupKeyResult;
  }

}
