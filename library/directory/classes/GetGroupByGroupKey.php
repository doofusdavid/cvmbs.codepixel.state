<?php

class GetGroupByGroupKey
{

  /**
   * 
   * @var string $groupKey
   * @access public
   */
  public $groupKey = null;

  /**
   * 
   * @param string $groupKey
   * @access public
   */
  public function __construct($groupKey)
  {
    $this->groupKey = $groupKey;
  }

}
