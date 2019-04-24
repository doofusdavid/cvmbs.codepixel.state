<?php

class MemberPhotoResponse
{

  /**
   * 
   * @var int $CropH
   * @access public
   */
  public $CropH = null;

  /**
   * 
   * @var int $CropW
   * @access public
   */
  public $CropW = null;

  /**
   * 
   * @var int $CropX
   * @access public
   */
  public $CropX = null;

  /**
   * 
   * @var int $CropY
   * @access public
   */
  public $CropY = null;

  /**
   * 
   * @var int $Id
   * @access public
   */
  public $Id = null;

  /**
   * 
   * @var base64Binary $MemberPhotoData
   * @access public
   */
  public $MemberPhotoData = null;

  /**
   * 
   * @param int $CropH
   * @param int $CropW
   * @param int $CropX
   * @param int $CropY
   * @param int $Id
   * @access public
   */
  public function __construct($CropH, $CropW, $CropX, $CropY, $Id)
  {
    $this->CropH = $CropH;
    $this->CropW = $CropW;
    $this->CropX = $CropX;
    $this->CropY = $CropY;
    $this->Id = $Id;
  }

}
