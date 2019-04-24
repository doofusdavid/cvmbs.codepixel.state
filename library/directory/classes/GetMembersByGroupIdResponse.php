<?php

class GetMembersByGroupIdResponse
{

  /**
   * 
   * @var MemberResponse[] $GetMembersByGroupIdResult
   * @access public
   */
  public $GetMembersByGroupIdResult = null;

  /**
   * 
   * @param MemberResponse[] $GetMembersByGroupIdResult
   * @access public
   */
  public function __construct($GetMembersByGroupIdResult)
  {
    $this->GetMembersByGroupIdResult = $GetMembersByGroupIdResult;
  }

}
