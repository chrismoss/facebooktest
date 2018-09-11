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
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Values\AdActivityCategoryValues;
use FacebookAds\Object\Values\AdAsyncRequestStatusesValues;
use FacebookAds\Object\Values\AdCampaignActivityChangedAllValues;
use FacebookAds\Object\Values\AdCampaignActivityChangedAnyValues;
use FacebookAds\Object\Values\AdCampaignDeliveryEstimateOptimizationGoalValues;
use FacebookAds\Object\Values\AdCampaignDeliveryStatsBidRecommendationTimeRangeTypeValues;
use FacebookAds\Object\Values\AdCampaignStatsActionAttributionDaysAfterClickValues;
use FacebookAds\Object\Values\AdCampaignStatsActionAttributionDaysAfterImpValues;
use FacebookAds\Object\Values\AdDatePresetValues;
use FacebookAds\Object\Values\AdDeliveryInsightsFieldsValues;
use FacebookAds\Object\Values\AdSetBidStrategyValues;
use FacebookAds\Object\Values\AdSetBillingEventValues;
use FacebookAds\Object\Values\AdSetConfiguredStatusValues;
use FacebookAds\Object\Values\AdSetDatePresetValues;
use FacebookAds\Object\Values\AdSetDestinationTypeValues;
use FacebookAds\Object\Values\AdSetEffectiveStatusValues;
use FacebookAds\Object\Values\AdSetExecutionOptionsValues;
use FacebookAds\Object\Values\AdSetFullFunnelExplorationModeValues;
use FacebookAds\Object\Values\AdSetOperatorValues;
use FacebookAds\Object\Values\AdSetOptimizationGoalValues;
use FacebookAds\Object\Values\AdSetStatusOptionValues;
use FacebookAds\Object\Values\AdSetStatusValues;
use FacebookAds\Object\Values\AdsInsightsActionAttributionWindowsValues;
use FacebookAds\Object\Values\AdsInsightsActionBreakdownsValues;
use FacebookAds\Object\Values\AdsInsightsActionReportTimeValues;
use FacebookAds\Object\Values\AdsInsightsBreakdownsValues;
use FacebookAds\Object\Values\AdsInsightsDatePresetValues;
use FacebookAds\Object\Values\AdsInsightsLevelValues;
use FacebookAds\Object\Values\AdsInsightsSummaryActionBreakdownsValues;
use FacebookAds\Object\Values\AdsReportBuilderAttributionWindowsValues;
use FacebookAds\Object\Values\AdsReportBuilderDatePresetValues;
use FacebookAds\Object\Values\AdsReportBuilderDimensionsValues;
use FacebookAds\Object\Values\FAMEAdGroupDatePresetValues;
use FacebookAds\Object\Values\FAMEAdGroupEffectiveStatusValues;
use FacebookAds\Object\Values\ReachEstimateOptimizeForValues;
use FacebookAds\Object\Traits\AdLabelAwareCrudObjectTrait;
use FacebookAds\Object\Traits\ObjectValidation;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdSet extends AbstractArchivableCrudObject
  implements CanRedownloadInterface {

  use AdLabelAwareCrudObjectTrait;
  use ObjectValidation;

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'adsets';
  }

  /**
   * @return AdSetFields
   */
  public static function getFieldsEnum() {
    return AdSetFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['BidStrategy'] = AdSetBidStrategyValues::getInstance()->getValues();
    $ref_enums['BillingEvent'] = AdSetBillingEventValues::getInstance()->getValues();
    $ref_enums['ConfiguredStatus'] = AdSetConfiguredStatusValues::getInstance()->getValues();
    $ref_enums['EffectiveStatus'] = AdSetEffectiveStatusValues::getInstance()->getValues();
    $ref_enums['OptimizationGoal'] = AdSetOptimizationGoalValues::getInstance()->getValues();
    $ref_enums['Status'] = AdSetStatusValues::getInstance()->getValues();
    $ref_enums['DatePreset'] = AdSetDatePresetValues::getInstance()->getValues();
    $ref_enums['DestinationType'] = AdSetDestinationTypeValues::getInstance()->getValues();
    $ref_enums['ExecutionOptions'] = AdSetExecutionOptionsValues::getInstance()->getValues();
    $ref_enums['FullFunnelExplorationMode'] = AdSetFullFunnelExplorationModeValues::getInstance()->getValues();
    $ref_enums['Operator'] = AdSetOperatorValues::getInstance()->getValues();
    $ref_enums['StatusOption'] = AdSetStatusOptionValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getActivities(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'after' => 'string',
      'limit' => 'int',
      'since' => 'datetime',
      'category' => 'category_enum',
      'until' => 'datetime',
      'uid' => 'int',
      'business_id' => 'string',
    );
    $enums = array(
      'category_enum' => AdActivityCategoryValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/activities',
      new AdActivity(),
      'EDGE',
      AdActivity::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getActivityLogs(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'changed_all' => 'list<changed_all_enum>',
      'changed_any' => 'list<changed_any_enum>',
      'since' => 'Object',
      'until' => 'Object',
      'uid' => 'Object',
    );
    $enums = array(
      'changed_all_enum' => AdCampaignActivityChangedAllValues::getInstance()->getValues(),
      'changed_any_enum' => AdCampaignActivityChangedAnyValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/activity_logs',
      new AdCampaignActivity(),
      'EDGE',
      AdCampaignActivity::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdStudies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ad_studies',
      new AdStudy(),
      'EDGE',
      AdStudy::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdCreatives(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adcreatives',
      new AdCreative(),
      'EDGE',
      AdCreative::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdDrafts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/addrafts',
      new AdDraft(),
      'EDGE',
      AdDraft::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAdLabels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adlabels' => 'list<Object>',
      'execution_options' => 'list<execution_options_enum>',
    );
    $enums = array(
      'execution_options_enum' => AdSetExecutionOptionsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/adlabels',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdLabel(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adlabels' => 'list<Object>',
      'execution_options' => 'list<execution_options_enum>',
    );
    $enums = array(
      'execution_options_enum' => AdSetExecutionOptionsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adlabels',
      new AdSet(),
      'EDGE',
      AdSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdRulesGoverned(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'pass_evaluation' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adrules_governed',
      new AdRule(),
      'EDGE',
      AdRule::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAds(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'include_deleted' => 'bool',
      'effective_status' => 'list<string>',
      'date_preset' => 'date_preset_enum',
      'time_range' => 'Object',
      'updated_since' => 'int',
      'ad_draft_id' => 'string',
    );
    $enums = array(
      'date_preset_enum' => AdDatePresetValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ads',
      new Ad(),
      'EDGE',
      Ad::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAsyncAdRequests(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'statuses' => 'list<statuses_enum>',
    );
    $enums = array(
      'statuses_enum' => AdAsyncRequestStatusesValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/asyncadrequests',
      new AdAsyncRequest(),
      'EDGE',
      AdAsyncRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getColumnSuggestions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/column_suggestions',
      new ColumnSuggestions(),
      'EDGE',
      ColumnSuggestions::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getConversions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'start_time' => 'datetime',
      'end_time' => 'datetime',
      'time_start' => 'datetime',
      'time_stop' => 'datetime',
      'aggregate_days' => 'int',
      'by_impression_time' => 'bool',
      'include_deleted' => 'bool',
      'offset' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/conversions',
      new AdConversions(),
      'EDGE',
      AdConversions::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCopies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'effective_status' => 'list<effective_status_enum>',
      'date_preset' => 'date_preset_enum',
      'is_completed' => 'bool',
      'time_range' => 'Object',
    );
    $enums = array(
      'effective_status_enum' => AdSetEffectiveStatusValues::getInstance()->getValues(),
      'date_preset_enum' => AdSetDatePresetValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/copies',
      new AdSet(),
      'EDGE',
      AdSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCopy(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'deep_copy' => 'bool',
      'campaign_id' => 'string',
      'rename_options' => 'Object',
      'status_option' => 'status_option_enum',
      'start_time' => 'datetime',
      'end_time' => 'datetime',
      'create_dco_adset' => 'bool',
    );
    $enums = array(
      'status_option_enum' => AdSetStatusOptionValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/copies',
      new AdSet(),
      'EDGE',
      AdSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getDeliveryEstimate(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'targeting_spec' => 'Targeting',
      'optimization_goal' => 'optimization_goal_enum',
      'promoted_object' => 'Object',
    );
    $enums = array(
      'optimization_goal_enum' => AdCampaignDeliveryEstimateOptimizationGoalValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/delivery_estimate',
      new AdCampaignDeliveryEstimate(),
      'EDGE',
      AdCampaignDeliveryEstimate::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getDeliveryInsights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'fields' => 'list<fields_enum>',
    );
    $enums = array(
      'fields_enum' => AdDeliveryInsightsFieldsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/delivery_insights',
      new AdDeliveryInsights(),
      'EDGE',
      AdDeliveryInsights::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getDeliveryStats(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'bid_recommendation_days_back' => 'unsigned int',
      'bid_recommendation_time_range_type' => 'bid_recommendation_time_range_type_enum',
    );
    $enums = array(
      'bid_recommendation_time_range_type_enum' => AdCampaignDeliveryStatsBidRecommendationTimeRangeTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/delivery_stats',
      new AdCampaignDeliveryStats(),
      'EDGE',
      AdCampaignDeliveryStats::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getFameAds(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'date_preset' => 'date_preset_enum',
      'effective_status' => 'list<effective_status_enum>',
      'time_range' => 'Object',
      'updated_since' => 'int',
    );
    $enums = array(
      'date_preset_enum' => FAMEAdGroupDatePresetValues::getInstance()->getValues(),
      'effective_status_enum' => FAMEAdGroupEffectiveStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/fame_ads',
      new FAMEAdGroup(),
      'EDGE',
      FAMEAdGroup::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInsights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'default_summary' => 'bool',
      'fields' => 'list<string>',
      'filtering' => 'list<Object>',
      'summary' => 'list<string>',
      'sort' => 'list<string>',
      'action_attribution_windows' => 'list<action_attribution_windows_enum>',
      'action_breakdowns' => 'list<action_breakdowns_enum>',
      'action_report_time' => 'action_report_time_enum',
      'breakdowns' => 'list<breakdowns_enum>',
      'date_preset' => 'date_preset_enum',
      'export_columns' => 'list<string>',
      'export_format' => 'string',
      'export_name' => 'string',
      'level' => 'level_enum',
      'product_id_limit' => 'int',
      'summary_action_breakdowns' => 'list<summary_action_breakdowns_enum>',
      'time_increment' => 'string',
      'time_range' => 'Object',
      'time_ranges' => 'list<Object>',
      'use_account_attribution_setting' => 'bool',
    );
    $enums = array(
      'action_attribution_windows_enum' => AdsInsightsActionAttributionWindowsValues::getInstance()->getValues(),
      'action_breakdowns_enum' => AdsInsightsActionBreakdownsValues::getInstance()->getValues(),
      'action_report_time_enum' => AdsInsightsActionReportTimeValues::getInstance()->getValues(),
      'breakdowns_enum' => AdsInsightsBreakdownsValues::getInstance()->getValues(),
      'date_preset_enum' => AdsInsightsDatePresetValues::getInstance()->getValues(),
      'level_enum' => AdsInsightsLevelValues::getInstance()->getValues(),
      'summary_action_breakdowns_enum' => AdsInsightsSummaryActionBreakdownsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/insights',
      new AdsInsights(),
      'EDGE',
      AdsInsights::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInsightsAsync(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'default_summary' => 'bool',
      'fields' => 'list<string>',
      'filtering' => 'list<Object>',
      'summary' => 'list<string>',
      'sort' => 'list<string>',
      'action_attribution_windows' => 'list<action_attribution_windows_enum>',
      'action_breakdowns' => 'list<action_breakdowns_enum>',
      'action_report_time' => 'action_report_time_enum',
      'breakdowns' => 'list<breakdowns_enum>',
      'date_preset' => 'date_preset_enum',
      'export_columns' => 'list<string>',
      'export_format' => 'string',
      'export_name' => 'string',
      'level' => 'level_enum',
      'product_id_limit' => 'int',
      'summary_action_breakdowns' => 'list<summary_action_breakdowns_enum>',
      'time_increment' => 'string',
      'time_range' => 'Object',
      'time_ranges' => 'list<Object>',
      'use_account_attribution_setting' => 'bool',
    );
    $enums = array(
      'action_attribution_windows_enum' => AdsInsightsActionAttributionWindowsValues::getInstance()->getValues(),
      'action_breakdowns_enum' => AdsInsightsActionBreakdownsValues::getInstance()->getValues(),
      'action_report_time_enum' => AdsInsightsActionReportTimeValues::getInstance()->getValues(),
      'breakdowns_enum' => AdsInsightsBreakdownsValues::getInstance()->getValues(),
      'date_preset_enum' => AdsInsightsDatePresetValues::getInstance()->getValues(),
      'level_enum' => AdsInsightsLevelValues::getInstance()->getValues(),
      'summary_action_breakdowns_enum' => AdsInsightsSummaryActionBreakdownsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/insights',
      new AdReportRun(),
      'EDGE',
      AdReportRun::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getReachEstimate(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'targeting_spec' => 'Targeting',
      'optimize_for' => 'optimize_for_enum',
      'daily_budget' => 'unsigned int',
      'is_debug' => 'bool',
    );
    $enums = array(
      'optimize_for_enum' => ReachEstimateOptimizeForValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/reachestimate',
      new ReachEstimate(),
      'EDGE',
      ReachEstimate::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getReporting(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'attribution_windows' => 'list<attribution_windows_enum>',
      'dimensions' => 'list<dimensions_enum>',
      'dimension_groups' => 'list<list<adcampaignreporting_dimension_groups_enum_param>>',
      'locked_dimensions' => 'unsigned int',
      'metrics' => 'list<string>',
      'filtering' => 'Object',
      'sorting' => 'list<map>',
      'date_preset' => 'date_preset_enum',
      'time_range' => 'Object',
      'default_summary' => 'bool',
      'last_report_snapshot_id' => 'unsigned int',
      'offset' => 'unsigned int',
      'limit' => 'int',
      'pagination_key' => 'string',
      'last_dimension' => 'Object',
      'summary_count' => 'bool',
    );
    $enums = array(
      'attribution_windows_enum' => AdsReportBuilderAttributionWindowsValues::getInstance()->getValues(),
      'dimensions_enum' => AdsReportBuilderDimensionsValues::getInstance()->getValues(),
      'date_preset_enum' => AdsReportBuilderDatePresetValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/reporting',
      new AdsReportBuilder(),
      'EDGE',
      AdsReportBuilder::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getStats(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'start_time' => 'datetime',
      'end_time' => 'datetime',
      'time_start' => 'datetime',
      'time_stop' => 'datetime',
      'action_attribution_days_after_click' => 'action_attribution_days_after_click_enum',
      'action_attribution_days_after_imp' => 'action_attribution_days_after_imp_enum',
    );
    $enums = array(
      'action_attribution_days_after_click_enum' => AdCampaignStatsActionAttributionDaysAfterClickValues::getInstance()->getValues(),
      'action_attribution_days_after_imp_enum' => AdCampaignStatsActionAttributionDaysAfterImpValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/stats',
      new AdCampaignStats(),
      'EDGE',
      AdCampaignStats::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTargetingInsights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/targeting_insights',
      new AdsTargetingInsights(),
      'EDGE',
      AdsTargetingInsights::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTargetingSentenceLines(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/targetingsentencelines',
      new TargetingSentenceLine(),
      'EDGE',
      TargetingSentenceLine::getFieldsEnum()->getValues(),
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
      'date_preset' => 'date_preset_enum',
      'from_adtable' => 'bool',
      'time_range' => 'Object',
    );
    $enums = array(
      'date_preset_enum' => array(
        'today',
        'yesterday',
        'this_month',
        'last_month',
        'this_quarter',
        'lifetime',
        'last_3d',
        'last_7d',
        'last_14d',
        'last_28d',
        'last_30d',
        'last_90d',
        'last_week_mon_sun',
        'last_week_sun_sat',
        'last_quarter',
        'last_year',
        'this_week_mon_today',
        'this_week_sun_today',
        'this_year',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new AdSet(),
      'NODE',
      AdSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'account_id' => 'string',
      'ad_keywords' => 'map',
      'adlabels' => 'list<Object>',
      'bid_amount' => 'int',
      'bid_adjustments' => 'Object',
      'bid_strategy' => 'bid_strategy_enum',
      'billing_event' => 'billing_event_enum',
      'campaign_spec' => 'Object',
      'adset_schedule' => 'list<Object>',
      'status' => 'status_enum',
      'creative_sequence' => 'list<string>',
      'daily_budget' => 'unsigned int',
      'daily_imps' => 'unsigned int',
      'daily_min_spend_target' => 'unsigned int',
      'daily_spend_cap' => 'unsigned int',
      'date_format' => 'string',
      'destination_type' => 'destination_type_enum',
      'end_time' => 'datetime',
      'execution_options' => 'list<execution_options_enum>',
      'frequency_cap' => 'unsigned int',
      'frequency_cap_reset_period' => 'unsigned int',
      'is_autobid' => 'bool',
      'is_average_price_pacing' => 'bool',
      'lifetime_budget' => 'unsigned int',
      'lifetime_frequency_cap' => 'unsigned int',
      'lifetime_imps' => 'unsigned int',
      'lifetime_min_spend_target' => 'unsigned int',
      'lifetime_spend_cap' => 'unsigned int',
      'name' => 'string',
      'optimization_goal' => 'optimization_goal_enum',
      'pacing_type' => 'list<string>',
      'promoted_object' => 'Object',
      'rb_prediction_id' => 'string',
      'redownload' => 'bool',
      'rf_prediction_id' => 'string',
      'start_time' => 'datetime',
      'targeting' => 'Targeting',
      'time_based_ad_rotation_id_blocks' => 'list<list<unsigned int>>',
      'time_based_ad_rotation_intervals' => 'list<unsigned int>',
      'time_start' => 'datetime',
      'time_stop' => 'datetime',
      'upstream_events' => 'map',
      'full_funnel_exploration_mode' => 'full_funnel_exploration_mode_enum',
      'attribution_spec' => 'list<map>',
    );
    $enums = array(
      'bid_strategy_enum' => AdSetBidStrategyValues::getInstance()->getValues(),
      'billing_event_enum' => AdSetBillingEventValues::getInstance()->getValues(),
      'status_enum' => AdSetStatusValues::getInstance()->getValues(),
      'destination_type_enum' => AdSetDestinationTypeValues::getInstance()->getValues(),
      'execution_options_enum' => AdSetExecutionOptionsValues::getInstance()->getValues(),
      'optimization_goal_enum' => AdSetOptimizationGoalValues::getInstance()->getValues(),
      'full_funnel_exploration_mode_enum' => AdSetFullFunnelExplorationModeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new AdSet(),
      'NODE',
      AdSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
