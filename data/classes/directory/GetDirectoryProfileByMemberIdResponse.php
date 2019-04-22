<?php

class GetDirectoryProfileByMemberIdResponse
{

  /**
   * 
   * @var MemberDirectoryProfileResponse $GetDirectoryProfileByMemberIdResult
   * @access public
   */
  public $GetDirectoryProfileByMemberIdResult = null;

  /**
   * 
   * @param MemberDirectoryProfileResponse $GetDirectoryProfileByMemberIdResult
   * @access public
   */
  public function __construct($GetDirectoryProfileByMemberIdResult)
  {
    $this->GetDirectoryProfileByMemberIdResult = $GetDirectoryProfileByMemberIdResult;
  }

}
