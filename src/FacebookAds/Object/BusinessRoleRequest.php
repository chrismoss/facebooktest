<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\BusinessRoleRequestFields;
use FacebookAds\Object\Values\BusinessObjectAssetTypeValues;
use FacebookAds\Object\Values\BusinessRoleRequestRoleValues;
use FacebookAds\Object\Values\BusinessRoleRequestStatusValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class BusinessRoleRequest extends AbstractCrudObject {

  /**
   * @return BusinessRoleRequestFields
   */
  public static function getFieldsEnum() {
    return BusinessRoleRequestFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Role'] = BusinessRoleRequestRoleValues::getInstance()->getValues();
    $ref_enums['Status'] = BusinessRoleRequestStatusValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getAssignedClientAssets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'asset_type' => 'asset_type_enum',
    );
    $enums = array(
      'asset_type_enum' => array(
        'PAGE',
        'AD_ACCOUNT',
        'PRODUCT_CATALOG',
        'APP',
        'PIXEL',
        'SYSTEM_USER',
        'BRAND',
        'USER',
        'PROJECT',
        'INSTAGRAM_ACCOUNT',
        'ATLAS_ADVERTISER',
        'FUNDING_SOURCE',
        'LEGACY_LOGIN',
        'BUSINESS_REQUEST',
        'EXAMPLE_CAT',
        'MONETIZATION_PROPERTY',
        'GRP_PLAN',
        'PERSONA',
        'CREDIT_PARTITION',
        'PAYOUT_ACCOUNT',
        'AD_STUDY',
        'SAVED_AUDIENCE',
        'CUSTOM_AUDIENCE',
        'PLATFORM_CUSTOM_AUDIENCE',
        'EVENT_SOURCE_GROUP',
        'OFFLINE_CONVERSION_DATA_SET',
        'AD_IMAGE',
        'PHOTO',
        'BLOCK_LIST',
        'FINANCE',
        'IP',
        'CREDIT_PARTITION_CONFIG',
        'VIDEO_ASSET',
        'BUSINESS_UNIT',
        'PAGE_FOR_LOCATIONS',
        'AD_ACCOUNT_CREATION_REQUEST',
        'RESELLER_VETTING_OE_REQUEST',
        'REGISTERED_TRADEMARK',
        'CUSTOM_CONVERSION',
        'LEADS_ACCESS',
        'SPACO_DS_DATA_COLLECTION',
        'OWNED_DOMAIN',
        'WHATSAPP_BUSINESS_ACCOUNT',
        'BUSINESS_RESOURCE_GROUP',
        'HOTEL_PRICE_FETCHER_PULL_CONFIG',
        'NEWS_PAGE',
        'PLACE_PAGE_SET',
        'BUSINESS_LOCATIONS_WRAPPER',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/assigned_client_assets',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAssignedOwnedAssets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'asset_type' => 'asset_type_enum',
    );
    $enums = array(
      'asset_type_enum' => BusinessObjectAssetTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/assigned_owned_assets',
      new BusinessObject(),
      'EDGE',
      BusinessObject::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/',
      new AbstractCrudObject(),
      'NODE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new BusinessRoleRequest(),
      'NODE',
      BusinessRoleRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'role' => 'role_enum',
    );
    $enums = array(
      'role_enum' => BusinessRoleRequestRoleValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new BusinessRoleRequest(),
      'NODE',
      BusinessRoleRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
