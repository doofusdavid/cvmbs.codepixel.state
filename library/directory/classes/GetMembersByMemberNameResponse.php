<?php

class GetMembersByMemberNameResponse
{

  /**
   * 
   * @var MemberResponse[] $GetMembersByMemberNameResult
   * @access public
   */
  public $GetMembersByMemberNameResult = null;

  /**
   * 
   * @param MemberResponse[] $GetMembersByMemberNameResult
   * @access public
   */
  public function __construct($GetMembersByMemberNameResult)
  {
    $this->GetMembersByMemberNameResult = $GetMembersByMemberNameResult;
  }

}
