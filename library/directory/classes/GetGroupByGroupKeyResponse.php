<?php

class GetGroupByGroupKeyResponse
{

  /**
   * 
   * @var GroupResponse $GetGroupByGroupKeyResult
   * @access public
   */
  public $GetGroupByGroupKeyResult = null;

  /**
   * 
   * @param GroupResponse $GetGroupByGroupKeyResult
   * @access public
   */
  public function __construct($GetGroupByGroupKeyResult)
  {
    $this->GetGroupByGroupKeyResult = $GetGroupByGroupKeyResult;
  }

}
