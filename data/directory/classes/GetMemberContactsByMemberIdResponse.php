<?php

class GetMemberContactsByMemberIdResponse
{

  /**
   * 
   * @var MemberContactResponse[] $GetMemberContactsByMemberIdResult
   * @access public
   */
  public $GetMemberContactsByMemberIdResult = null;

  /**
   * 
   * @param MemberContactResponse[] $GetMemberContactsByMemberIdResult
   * @access public
   */
  public function __construct($GetMemberContactsByMemberIdResult)
  {
    $this->GetMemberContactsByMemberIdResult = $GetMemberContactsByMemberIdResult;
  }

}
