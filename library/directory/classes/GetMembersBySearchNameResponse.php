<?php

class GetMembersBySearchNameResponse
{

  /**
   * 
   * @var MemberResponse[] $GetMembersBySearchNameResult
   * @access public
   */
  public $GetMembersBySearchNameResult = null;

  /**
   * 
   * @param MemberResponse[] $GetMembersBySearchNameResult
   * @access public
   */
  public function __construct($GetMembersBySearchNameResult)
  {
    $this->GetMembersBySearchNameResult = $GetMembersBySearchNameResult;
  }

}
