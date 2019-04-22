<?php

class GetCVByMemberIdResponse
{

  /**
   * 
   * @var MemberDirectoryCVResponse $GetCVByMemberIdResult
   * @access public
   */
  public $GetCVByMemberIdResult = null;

  /**
   * 
   * @param MemberDirectoryCVResponse $GetCVByMemberIdResult
   * @access public
   */
  public function __construct($GetCVByMemberIdResult)
  {
    $this->GetCVByMemberIdResult = $GetCVByMemberIdResult;
  }

}
