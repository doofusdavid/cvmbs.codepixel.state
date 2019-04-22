<?php

class GetGroupsByMemberIdResponse
{

  /**
   * 
   * @var GroupResponse[] $GetGroupsByMemberIdResult
   * @access public
   */
  public $GetGroupsByMemberIdResult = null;

  /**
   * 
   * @param GroupResponse[] $GetGroupsByMemberIdResult
   * @access public
   */
  public function __construct($GetGroupsByMemberIdResult)
  {
    $this->GetGroupsByMemberIdResult = $GetGroupsByMemberIdResult;
  }

}
