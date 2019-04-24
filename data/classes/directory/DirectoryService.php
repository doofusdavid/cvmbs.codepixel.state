<?php

include_once('MemberResponse.php');
include_once('MemberContactResponse.php');
include_once('MemberDirectoryProfileResponse.php');
include_once('GroupResponse.php');
include_once('MemberPhotoResponse.php');
include_once('DirectoryInfoResponse.php');
include_once('MemberDirectoryCVResponse.php');
include_once('GetMembersBySearchName.php');
include_once('GetMembersBySearchNameResponse.php');
include_once('GetMembersBySearchNameAndGroupKey.php');
include_once('GetMembersBySearchNameAndGroupKeyResponse.php');
include_once('GetMembersByMemberName.php');
include_once('GetMembersByMemberNameResponse.php');
include_once('GetGroupsByMemberId.php');
include_once('GetGroupsByMemberIdResponse.php');
include_once('GetMemberById.php');
include_once('GetMemberByIdResponse.php');
include_once('GetGroupById.php');
include_once('GetGroupByIdResponse.php');
include_once('GetGroupByGroupKey.php');
include_once('GetGroupByGroupKeyResponse.php');
include_once('GetMemberPhotoByMemberId.php');
include_once('GetMemberPhotoByMemberIdResponse.php');
include_once('GetMemberContactsByMemberId.php');
include_once('GetMemberContactsByMemberIdResponse.php');
include_once('GetDirectoryProfileByMemberId.php');
include_once('GetDirectoryProfileByMemberIdResponse.php');
include_once('GetDirectoryInfoByMemberId.php');
include_once('GetDirectoryInfoByMemberIdResponse.php');
include_once('GetMembersByGroupId.php');
include_once('GetMembersByGroupIdResponse.php');
include_once('GetMembersByGroupKey.php');
include_once('GetMembersByGroupKeyResponse.php');
include_once('GetCVByMemberId.php');
include_once('GetCVByMemberIdResponse.php');
include_once('GetMembersByEmployeeCategory.php');
include_once('GetMembersByEmployeeCategoryResponse.php');
include_once('GetMembersByEmployeeCategories.php');
include_once('GetMembersByEmployeeCategoriesResponse.php');
include_once('GetMembersByEmployeeCategoryAndGroupKey.php');
include_once('GetMembersByEmployeeCategoryAndGroupKeyResponse.php');


/**
 * 
 */
class DirectoryService extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'MemberResponse' => '\MemberResponse',
    'MemberContactResponse' => '\MemberContactResponse',
    'MemberDirectoryProfileResponse' => '\MemberDirectoryProfileResponse',
    'GroupResponse' => '\GroupResponse',
    'MemberPhotoResponse' => '\MemberPhotoResponse',
    'DirectoryInfoResponse' => '\DirectoryInfoResponse',
    'MemberDirectoryCVResponse' => '\MemberDirectoryCVResponse',
    'GetMembersBySearchName' => '\GetMembersBySearchName',
    'GetMembersBySearchNameResponse' => '\GetMembersBySearchNameResponse',
    'GetMembersBySearchNameAndGroupKey' => '\GetMembersBySearchNameAndGroupKey',
    'GetMembersBySearchNameAndGroupKeyResponse' => '\GetMembersBySearchNameAndGroupKeyResponse',
    'GetMembersByMemberName' => '\GetMembersByMemberName',
    'GetMembersByMemberNameResponse' => '\GetMembersByMemberNameResponse',
    'GetGroupsByMemberId' => '\GetGroupsByMemberId',
    'GetGroupsByMemberIdResponse' => '\GetGroupsByMemberIdResponse',
    'GetMemberById' => '\GetMemberById',
    'GetMemberByIdResponse' => '\GetMemberByIdResponse',
    'GetGroupById' => '\GetGroupById',
    'GetGroupByIdResponse' => '\GetGroupByIdResponse',
    'GetGroupByGroupKey' => '\GetGroupByGroupKey',
    'GetGroupByGroupKeyResponse' => '\GetGroupByGroupKeyResponse',
    'GetMemberPhotoByMemberId' => '\GetMemberPhotoByMemberId',
    'GetMemberPhotoByMemberIdResponse' => '\GetMemberPhotoByMemberIdResponse',
    'GetMemberContactsByMemberId' => '\GetMemberContactsByMemberId',
    'GetMemberContactsByMemberIdResponse' => '\GetMemberContactsByMemberIdResponse',
    'GetDirectoryProfileByMemberId' => '\GetDirectoryProfileByMemberId',
    'GetDirectoryProfileByMemberIdResponse' => '\GetDirectoryProfileByMemberIdResponse',
    'GetDirectoryInfoByMemberId' => '\GetDirectoryInfoByMemberId',
    'GetDirectoryInfoByMemberIdResponse' => '\GetDirectoryInfoByMemberIdResponse',
    'GetMembersByGroupId' => '\GetMembersByGroupId',
    'GetMembersByGroupIdResponse' => '\GetMembersByGroupIdResponse',
    'GetMembersByGroupKey' => '\GetMembersByGroupKey',
    'GetMembersByGroupKeyResponse' => '\GetMembersByGroupKeyResponse',
    'GetCVByMemberId' => '\GetCVByMemberId',
    'GetCVByMemberIdResponse' => '\GetCVByMemberIdResponse',
    'GetMembersByEmployeeCategory' => '\GetMembersByEmployeeCategory',
    'GetMembersByEmployeeCategoryResponse' => '\GetMembersByEmployeeCategoryResponse',
    'GetMembersByEmployeeCategories' => '\GetMembersByEmployeeCategories',
    'GetMembersByEmployeeCategoriesResponse' => '\GetMembersByEmployeeCategoriesResponse',
    'GetMembersByEmployeeCategoryAndGroupKey' => '\GetMembersByEmployeeCategoryAndGroupKey',
    'GetMembersByEmployeeCategoryAndGroupKeyResponse' => '\GetMembersByEmployeeCategoryAndGroupKeyResponse');

  /**
   * 
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'http://www.cvmbs.colostate.edu/directoryservice/DirectoryService.svc?wsdl')
  {
    foreach (self::$classmap as $key => $value) {
      if (!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    
    parent::__construct($wsdl, $options);
  }

  /**
   * 
   * @param GetMembersBySearchName $parameters
   * @access public
   * @return GetMembersBySearchNameResponse
   */
  public function GetMembersBySearchName(GetMembersBySearchName $parameters)
  {
    return $this->__soapCall('GetMembersBySearchName', array($parameters));
  }

  /**
   * 
   * @param GetMembersBySearchNameAndGroupKey $parameters
   * @access public
   * @return GetMembersBySearchNameAndGroupKeyResponse
   */
  public function GetMembersBySearchNameAndGroupKey(GetMembersBySearchNameAndGroupKey $parameters)
  {
    return $this->__soapCall('GetMembersBySearchNameAndGroupKey', array($parameters));
  }

  /**
   * 
   * @param GetMembersByMemberName $parameters
   * @access public
   * @return GetMembersByMemberNameResponse
   */
  public function GetMembersByMemberName(GetMembersByMemberName $parameters)
  {
    return $this->__soapCall('GetMembersByMemberName', array($parameters));
  }

  /**
   * 
   * @param GetGroupsByMemberId $parameters
   * @access public
   * @return GetGroupsByMemberIdResponse
   */
  public function GetGroupsByMemberId(GetGroupsByMemberId $parameters)
  {
    return $this->__soapCall('GetGroupsByMemberId', array($parameters));
  }

  /**
   * 
   * @param GetMemberById $parameters
   * @access public
   * @return GetMemberByIdResponse
   */
  public function GetMemberById(GetMemberById $parameters)
  {
    return $this->__soapCall('GetMemberById', array($parameters));
  }

  /**
   * 
   * @param GetGroupById $parameters
   * @access public
   * @return GetGroupByIdResponse
   */
  public function GetGroupById(GetGroupById $parameters)
  {
    return $this->__soapCall('GetGroupById', array($parameters));
  }

  /**
   * 
   * @param GetGroupByGroupKey $parameters
   * @access public
   * @return GetGroupByGroupKeyResponse
   */
  public function GetGroupByGroupKey(GetGroupByGroupKey $parameters)
  {
    return $this->__soapCall('GetGroupByGroupKey', array($parameters));
  }

  /**
   * 
   * @param GetMemberPhotoByMemberId $parameters
   * @access public
   * @return GetMemberPhotoByMemberIdResponse
   */
  public function GetMemberPhotoByMemberId(GetMemberPhotoByMemberId $parameters)
  {
    return $this->__soapCall('GetMemberPhotoByMemberId', array($parameters));
  }

  /**
   * 
   * @param GetMemberContactsByMemberId $parameters
   * @access public
   * @return GetMemberContactsByMemberIdResponse
   */
  public function GetMemberContactsByMemberId(GetMemberContactsByMemberId $parameters)
  {
    return $this->__soapCall('GetMemberContactsByMemberId', array($parameters));
  }

  /**
   * 
   * @param GetDirectoryProfileByMemberId $parameters
   * @access public
   * @return GetDirectoryProfileByMemberIdResponse
   */
  public function GetDirectoryProfileByMemberId(GetDirectoryProfileByMemberId $parameters)
  {
    return $this->__soapCall('GetDirectoryProfileByMemberId', array($parameters));
  }

  /**
   * 
   * @param GetDirectoryInfoByMemberId $parameters
   * @access public
   * @return GetDirectoryInfoByMemberIdResponse
   */
  public function GetDirectoryInfoByMemberId(GetDirectoryInfoByMemberId $parameters)
  {
    return $this->__soapCall('GetDirectoryInfoByMemberId', array($parameters));
  }

  /**
   * 
   * @param GetMembersByGroupId $parameters
   * @access public
   * @return GetMembersByGroupIdResponse
   */
  public function GetMembersByGroupId(GetMembersByGroupId $parameters)
  {
    return $this->__soapCall('GetMembersByGroupId', array($parameters));
  }

  /**
   * 
   * @param GetMembersByGroupKey $parameters
   * @access public
   * @return GetMembersByGroupKeyResponse
   */
  public function GetMembersByGroupKey(GetMembersByGroupKey $parameters)
  {
    return $this->__soapCall('GetMembersByGroupKey', array($parameters));
  }

  /**
   * 
   * @param GetCVByMemberId $parameters
   * @access public
   * @return GetCVByMemberIdResponse
   */
  public function GetCVByMemberId(GetCVByMemberId $parameters)
  {
    return $this->__soapCall('GetCVByMemberId', array($parameters));
  }

  /**
   * 
   * @param GetMembersByEmployeeCategory $parameters
   * @access public
   * @return GetMembersByEmployeeCategoryResponse
   */
  public function GetMembersByEmployeeCategory(GetMembersByEmployeeCategory $parameters)
  {
    return $this->__soapCall('GetMembersByEmployeeCategory', array($parameters));
  }

  /**
   * 
   * @param GetMembersByEmployeeCategories $parameters
   * @access public
   * @return GetMembersByEmployeeCategoriesResponse
   */
  public function GetMembersByEmployeeCategories(GetMembersByEmployeeCategories $parameters)
  {
    return $this->__soapCall('GetMembersByEmployeeCategories', array($parameters));
  }

  /**
   * 
   * @param GetMembersByEmployeeCategoryAndGroupKey $parameters
   * @access public
   * @return GetMembersByEmployeeCategoryAndGroupKeyResponse
   */
  public function GetMembersByEmployeeCategoryAndGroupKey(GetMembersByEmployeeCategoryAndGroupKey $parameters)
  {
    return $this->__soapCall('GetMembersByEmployeeCategoryAndGroupKey', array($parameters));
  }

}
