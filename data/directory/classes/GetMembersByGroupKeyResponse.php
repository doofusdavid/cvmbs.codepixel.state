<?php

class GetMembersByGroupKeyResponse
{

  /**
   * 
   * @var MemberResponse[] $GetMembersByGroupKeyResult
   * @access public
   */
  public $GetMembersByGroupKeyResult = null;

  /**
   * 
   * @param MemberResponse[] $GetMembersByGroupKeyResult
   * @access public
   */
  public function __construct($GetMembersByGroupKeyResult)
  {
    $this->GetMembersByGroupKeyResult = $GetMembersByGroupKeyResult;
  }

}
