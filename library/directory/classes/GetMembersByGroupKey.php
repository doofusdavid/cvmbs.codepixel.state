<?php

class GetMembersByGroupKey
{

  /**
   * 
   * @var string $key
   * @access public
   */
  public $key = null;

  /**
   * 
   * @param string $key
   * @access public
   */
  public function __construct($key)
  {
    $this->key = $key;
  }

}
