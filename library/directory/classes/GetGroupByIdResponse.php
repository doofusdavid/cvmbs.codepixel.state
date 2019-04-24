<?php

class GetGroupByIdResponse
{

  /**
   * 
   * @var GroupResponse $GetGroupByIdResult
   * @access public
   */
  public $GetGroupByIdResult = null;

  /**
   * 
   * @param GroupResponse $GetGroupByIdResult
   * @access public
   */
  public function __construct($GetGroupByIdResult)
  {
    $this->GetGroupByIdResult = $GetGroupByIdResult;
  }

}
