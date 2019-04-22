<?php

class GetDirectoryInfoByMemberIdResponse
{

  /**
   * 
   * @var DirectoryInfoResponse[] $GetDirectoryInfoByMemberIdResult
   * @access public
   */
  public $GetDirectoryInfoByMemberIdResult = null;

  /**
   * 
   * @param DirectoryInfoResponse[] $GetDirectoryInfoByMemberIdResult
   * @access public
   */
  public function __construct($GetDirectoryInfoByMemberIdResult)
  {
    $this->GetDirectoryInfoByMemberIdResult = $GetDirectoryInfoByMemberIdResult;
  }

}
