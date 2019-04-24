<?php

class MemberResponse
{

  /**
   * 
   * @var boolean $AddressPrivacy
   * @access public
   */
  public $AddressPrivacy = null;

  /**
   * 
   * @var string $BusinessAddress1
   * @access public
   */
  public $BusinessAddress1 = null;

  /**
   * 
   * @var string $BusinessAddress2
   * @access public
   */
  public $BusinessAddress2 = null;

  /**
   * 
   * @var string $BusinessCity
   * @access public
   */
  public $BusinessCity = null;

  /**
   * 
   * @var string $BusinessPostalCode
   * @access public
   */
  public $BusinessPostalCode = null;

  /**
   * 
   * @var string $BusinessState
   * @access public
   */
  public $BusinessState = null;

  /**
   * 
   * @var int $CSUId
   * @access public
   */
  public $CSUId = null;

  /**
   * 
   * @var string $DepartmentGroup
   * @access public
   */
  public $DepartmentGroup = null;

  /**
   * 
   * @var boolean $DirectoryPrivacy
   * @access public
   */
  public $DirectoryPrivacy = null;

  /**
   * 
   * @var string $EName
   * @access public
   */
  public $EName = null;

  /**
   * 
   * @var string $EmailAddress
   * @access public
   */
  public $EmailAddress = null;

  /**
   * 
   * @var boolean $EmailPrivacy
   * @access public
   */
  public $EmailPrivacy = null;

  /**
   * 
   * @var string $EmployeeCategory
   * @access public
   */
  public $EmployeeCategory = null;

  /**
   * 
   * @var string $EmployeeTitle
   * @access public
   */
  public $EmployeeTitle = null;

  /**
   * 
   * @var string $EmployeeType
   * @access public
   */
  public $EmployeeType = null;

  /**
   * 
   * @var string $FirstName
   * @access public
   */
  public $FirstName = null;

  /**
   * 
   * @var int $GraduationYear
   * @access public
   */
  public $GraduationYear = null;

  /**
   * 
   * @var boolean $HasMemberCV
   * @access public
   */
  public $HasMemberCV = null;

  /**
   * 
   * @var int $Id
   * @access public
   */
  public $Id = null;

  /**
   * 
   * @var string $InternalTitle
   * @access public
   */
  public $InternalTitle = null;

  /**
   * 
   * @var string $LastName
   * @access public
   */
  public $LastName = null;

  /**
   * 
   * @var MemberContactResponse[] $MemberContacts
   * @access public
   */
  public $MemberContacts = null;

  /**
   * 
   * @var MemberDirectoryProfileResponse $MemberDirectoryProfile
   * @access public
   */
  public $MemberDirectoryProfile = null;

  /**
   * 
   * @var string $MiddleName
   * @access public
   */
  public $MiddleName = null;

  /**
   * 
   * @var boolean $NamePrivacy
   * @access public
   */
  public $NamePrivacy = null;

  /**
   * 
   * @var string $OfficeBldgName
   * @access public
   */
  public $OfficeBldgName = null;

  /**
   * 
   * @var string $OfficeRoomName
   * @access public
   */
  public $OfficeRoomName = null;

  /**
   * 
   * @var string $OtherName
   * @access public
   */
  public $OtherName = null;

  /**
   * 
   * @var boolean $PhonePrivacy
   * @access public
   */
  public $PhonePrivacy = null;

  /**
   * 
   * @var string $StudentLevel
   * @access public
   */
  public $StudentLevel = null;

  /**
   * 
   * @var string $Website
   * @access public
   */
  public $Website = null;

  /**
   * 
   * @param boolean $AddressPrivacy
   * @param int $CSUId
   * @param boolean $DirectoryPrivacy
   * @param boolean $EmailPrivacy
   * @param boolean $HasMemberCV
   * @param int $Id
   * @param boolean $NamePrivacy
   * @param boolean $PhonePrivacy
   * @access public
   */
  public function __construct($AddressPrivacy, $CSUId, $DirectoryPrivacy, $EmailPrivacy, $HasMemberCV, $Id, $NamePrivacy, $PhonePrivacy)
  {
    $this->AddressPrivacy = $AddressPrivacy;
    $this->CSUId = $CSUId;
    $this->DirectoryPrivacy = $DirectoryPrivacy;
    $this->EmailPrivacy = $EmailPrivacy;
    $this->HasMemberCV = $HasMemberCV;
    $this->Id = $Id;
    $this->NamePrivacy = $NamePrivacy;
    $this->PhonePrivacy = $PhonePrivacy;
  }

}
