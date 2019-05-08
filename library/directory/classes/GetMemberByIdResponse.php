<?php

class GetMemberByIdResponse
{

  /**
   *
   * @var MemberResponse $GetMemberByIdResult
   * @access public
   */
  public $GetMemberByIdResult = null;

  /**
   *
   * @param MemberResponse $GetMemberByIdResult
   * @access public
   */
  public function __construct($GetMemberByIdResult)
  {
    $this->GetMemberByIdResult = $GetMemberByIdResult;
  }

}
