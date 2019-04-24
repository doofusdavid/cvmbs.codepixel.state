<?php

class GetMembersBySearchNameAndGroupKeyResponse
{

  /**
   * 
   * @var MemberResponse[] $GetMembersBySearchNameAndGroupKeyResult
   * @access public
   */
  public $GetMembersBySearchNameAndGroupKeyResult = null;

  /**
   * 
   * @param MemberResponse[] $GetMembersBySearchNameAndGroupKeyResult
   * @access public
   */
  public function __construct($GetMembersBySearchNameAndGroupKeyResult)
  {
    $this->GetMembersBySearchNameAndGroupKeyResult = $GetMembersBySearchNameAndGroupKeyResult;
  }

}
