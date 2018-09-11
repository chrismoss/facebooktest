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
use FacebookAds\Object\Fields\AtlasCompanyFields;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AtlasCompany extends AbstractCrudObject {

  /**
   * @return AtlasCompanyFields
   */
  public static function getFieldsEnum() {
    return AtlasCompanyFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function getActionTags(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter_by' => 'string',
      'order_by' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/action_tags',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdvertisers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter_by' => 'string',
      'order_by' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/advertisers',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAtlasUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter_by' => 'string',
      'order_by' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/atlas_users',
      new AtlasUser(),
      'EDGE',
      AtlasUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBranches(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter_by' => 'string',
      'order_by' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/branches',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCampaigns(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter_by' => 'string',
      'order_by' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/campaigns',
      new AtlasCampaign(),
      'EDGE',
      AtlasCampaign::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getChannels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter_by' => 'string',
      'order_by' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/channels',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getClients(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter_by' => 'string',
      'order_by' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/clients',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getConnectedFbAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/connected_fb_accounts',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCustomDimensions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter_by' => 'string',
      'order_by' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/custom_dimensions',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInProductMetricsByCampaign(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'additional_filter_value_sets' => 'list<list<string>>',
      'columns' => 'list<columns_enum>',
      'date_range' => 'Object',
      'dimension_columns' => 'list<dimension_columns_enum>',
      'filter_by' => 'string',
      'filter_value_sets' => 'list<list<string>>',
      'granularity' => 'granularity_enum',
      'join_column' => 'join_column_enum',
      'order_by' => 'string',
      'requested_columns' => 'list<requested_columns_enum>',
      'should_include_empty_metrics_rows' => 'bool',
      'should_include_prior_period' => 'bool',
      'should_summarize_over_date_range' => 'bool',
      'time_period' => 'time_period_enum',
      'view' => 'view_enum',
    );
    $enums = array(
      'columns_enum' => array(
        'attributed_clicks_count',
        'attributed_impressions_count',
        'action_tag_id',
        'ad_id',
        'ad_set_id',
        'alias',
        'action_requests',
        'advertiser_id',
        'campaign_id',
        'campaign_group_id',
        'channel_id',
        'click_through_rate',
        'click_lookback_window',
        'click_lookback_window_in_minutes',
        'clicks',
        'company_id',
        'connection_id',
        'conversion_device_type',
        'conversion_event_id',
        'contributor_device_path_type',
        'age_range',
        'gender',
        'country',
        'dma_code',
        'dma_name',
        'device_os',
        'cost_per_1k_impressions',
        'cost_per_click',
        'cost_per_visit',
        'CUSTOM_BUCKET_BOOL_1',
        'CUSTOM_BUCKET_BOOL_2',
        'CUSTOM_BUCKET_BOOL_3',
        'CUSTOM_BUCKET_BOOL_4',
        'CUSTOM_BUCKET_INT_1',
        'CUSTOM_BUCKET_INT_2',
        'CUSTOM_BUCKET_INT_3',
        'CUSTOM_BUCKET_INT_4',
        'CUSTOM_BUCKET_STR_1',
        'CUSTOM_BUCKET_STR_2',
        'CUSTOM_BUCKET_STR_3',
        'CUSTOM_BUCKET_STR_4',
        'device_type',
        'days_from_conversion',
        'id',
        'data_driven_convs',
        'data_driven_convs_per_1k_impress',
        'data_driven_convs_per_100_clicks',
        'data_driven_convs_per_click',
        'data_driven_convs_per_visit',
        'data_driven_cpa',
        'data_driven_nullable_convs',
        'data_driven_roas',
        'data_driven_revenue',
        'dimension_group_ruleset',
        'even_credit_convs',
        'even_credit_convs_per_1k_impress',
        'even_credit_convs_per_100_clicks',
        'even_credit_convs_per_click',
        'even_credit_convs_per_visit',
        'even_credit_cpa',
        'even_credit_roas',
        'even_credit_revenue',
        'fb_identity_frequency',
        'fb_identity_reach',
        'first_click_convs',
        'first_click_revenue',
        'first_touch_convs',
        'first_touch_revenue',
        'first_touchpoints',
        'impression',
        'impressions',
        'last_click_convs',
        'last_click_convs_per_1k_impress',
        'last_click_convs_per_100_clicks',
        'last_click_convs_per_click',
        'last_click_convs_per_visit',
        'last_click_cpa',
        'last_click_roas',
        'last_click_revenue',
        'last_click_with_extrapolation_convs',
        'last_click_with_extrapolation_convs_per_1k_impress',
        'last_click_with_extrapolation_convs_per_100_clicks',
        'last_click_with_extrapolation_convs_per_click',
        'last_click_with_extrapolation_convs_per_visit',
        'last_click_with_extrapolation_cpa',
        'last_click_with_extrapolation_roas',
        'last_click_with_extrapolation_revenue',
        'last_click_with_cookies_convs',
        'last_click_with_cookies_convs_per_1k_impress',
        'last_click_with_cookies_convs_per_100_clicks',
        'last_click_with_cookies_convs_per_click',
        'last_click_with_cookies_convs_per_visit',
        'last_click_with_cookies_cpa',
        'last_click_with_cookies_roas',
        'last_click_with_cookies_revenue',
        'last_touch_convs',
        'last_touch_convs_per_1k_impress',
        'last_touch_convs_per_100_clicks',
        'last_touch_convs_per_click',
        'last_touch_convs_per_visit',
        'last_touch_cpa',
        'last_touch_roas',
        'last_touch_revenue',
        'first_view_convs',
        'first_view_revenue',
        'last_view_convs',
        'last_view_revenue',
        'last_touch_with_extrapolation_convs',
        'last_touch_with_extrapolation_convs_per_1k_impress',
        'last_touch_with_extrapolation_convs_per_100_clicks',
        'last_touch_with_extrapolation_convs_per_click',
        'last_touch_with_extrapolation_convs_per_visit',
        'last_touch_with_extrapolation_cpa',
        'last_touch_with_extrapolation_roas',
        'last_touch_with_extrapolation_revenue',
        'last_touchpoints',
        'lookback_window',
        'fraud_impressions',
        'metric_conversions',
        'metric_desktop_contributors',
        'metric_mobile_contributors',
        'non_fraud_impressions',
        'non_fraud_included_impressions',
        'off_screen_impressions',
        'positional_20fl_convs',
        'positional_20fl_convs_per_1k_impress',
        'positional_20fl_convs_per_100_clicks',
        'positional_20fl_convs_per_click',
        'positional_20fl_convs_per_visit',
        'positional_20fl_cpa',
        'positional_20fl_roas',
        'positional_20fl_revenue',
        'positional_30fl_convs',
        'positional_30fl_convs_per_1k_impress',
        'positional_30fl_convs_per_100_clicks',
        'positional_30fl_convs_per_click',
        'positional_30fl_convs_per_visit',
        'positional_30fl_cpa',
        'positional_30fl_roas',
        'positional_30fl_revenue',
        'positional_40fl_convs',
        'positional_40fl_convs_per_1k_impress',
        'positional_40fl_convs_per_100_clicks',
        'positional_40fl_convs_per_click',
        'positional_40fl_convs_per_visit',
        'positional_40fl_cpa',
        'positional_40fl_roas',
        'positional_40fl_revenue',
        'measurable_impressions',
        'name',
        'net_media_cost',
        'placement_id',
        'publisher_id',
        'raw_impressions',
        'reach',
        'reach_by_frequency_1',
        'reach_by_frequency_2',
        'reach_by_frequency_3',
        'reach_by_frequency_4',
        'reach_by_frequency_5',
        'reach_by_frequency_6',
        'reach_by_frequency_7',
        'reach_by_frequency_8',
        'reach_by_frequency_9',
        'reach_by_frequency_10',
        'reach_by_frequency_11',
        'reach_by_frequency_12',
        'reach_by_frequency_13',
        'reach_by_frequency_14',
        'reach_by_frequency_15_plus',
        'reach_excluded_impressions',
        'reach_included_impressions',
        'reach_frequency',
        'report_click_through_rate',
        'report_clicks',
        'report_impressions',
        'report_visits',
        'report_visits_for_virtual_column',
        'search_clicks',
        'source_channel',
        'stats_model_convs',
        'stats_model_convs_per_1k_impress',
        'stats_model_convs_per_100_clicks',
        'stats_model_convs_per_click',
        'stats_model_convs_per_visit',
        'stats_model_cpa',
        'stats_model_roas',
        'stats_model_revenue',
        'sum_legal_price',
        'tactic_id',
        'time_decay_1day_convs',
        'time_decay_1day_convs_per_1k_impress',
        'time_decay_1day_convs_per_100_clicks',
        'time_decay_1day_convs_per_click',
        'time_decay_1day_convs_per_visit',
        'time_decay_1day_cpa',
        'time_decay_1day_roas',
        'time_decay_1day_revenue',
        'time_decay_2day_convs',
        'time_decay_2day_convs_per_1k_impress',
        'time_decay_2day_convs_per_100_clicks',
        'time_decay_2day_convs_per_click',
        'time_decay_2day_convs_per_visit',
        'time_decay_2day_cpa',
        'time_decay_2day_roas',
        'time_decay_2day_revenue',
        'time_decay_7day_convs',
        'time_decay_7day_convs_per_1k_impress',
        'time_decay_7day_convs_per_100_clicks',
        'time_decay_7day_convs_per_click',
        'time_decay_7day_convs_per_visit',
        'time_decay_7day_cpa',
        'time_decay_7day_roas',
        'time_decay_7day_revenue',
        'time_decay_14day_convs',
        'time_decay_14day_convs_per_1k_impress',
        'time_decay_14day_convs_per_100_clicks',
        'time_decay_14day_convs_per_click',
        'time_decay_14day_convs_per_visit',
        'time_decay_14day_cpa',
        'time_decay_14day_roas',
        'time_decay_14day_revenue',
        'timestamp',
        'total_comparable_conversions',
        'total_comparable_revenue',
        'total_conversions',
        'total_measurable_impressions',
        'total_non_fraud_impressions',
        'total_raw_impressions',
        'total_revenue',
        'total_viewable_impressions',
        'total_wasted_impressions',
        'unique_reach',
        'url_without_params',
        'version_id',
        'view_lookback_window',
        'view_lookback_window_in_minutes',
        'viewable_impressions',
        'wasted_impressions',
      ),
      'dimension_columns_enum' => array(
        'attributed_clicks_count',
        'attributed_impressions_count',
        'action_tag_id',
        'ad_id',
        'ad_set_id',
        'alias',
        'action_requests',
        'advertiser_id',
        'campaign_id',
        'campaign_group_id',
        'channel_id',
        'click_through_rate',
        'click_lookback_window',
        'click_lookback_window_in_minutes',
        'clicks',
        'company_id',
        'connection_id',
        'conversion_device_type',
        'conversion_event_id',
        'contributor_device_path_type',
        'age_range',
        'gender',
        'country',
        'dma_code',
        'dma_name',
        'device_os',
        'cost_per_1k_impressions',
        'cost_per_click',
        'cost_per_visit',
        'CUSTOM_BUCKET_BOOL_1',
        'CUSTOM_BUCKET_BOOL_2',
        'CUSTOM_BUCKET_BOOL_3',
        'CUSTOM_BUCKET_BOOL_4',
        'CUSTOM_BUCKET_INT_1',
        'CUSTOM_BUCKET_INT_2',
        'CUSTOM_BUCKET_INT_3',
        'CUSTOM_BUCKET_INT_4',
        'CUSTOM_BUCKET_STR_1',
        'CUSTOM_BUCKET_STR_2',
        'CUSTOM_BUCKET_STR_3',
        'CUSTOM_BUCKET_STR_4',
        'device_type',
        'days_from_conversion',
        'id',
        'data_driven_convs',
        'data_driven_convs_per_1k_impress',
        'data_driven_convs_per_100_clicks',
        'data_driven_convs_per_click',
        'data_driven_convs_per_visit',
        'data_driven_cpa',
        'data_driven_nullable_convs',
        'data_driven_roas',
        'data_driven_revenue',
        'dimension_group_ruleset',
        'even_credit_convs',
        'even_credit_convs_per_1k_impress',
        'even_credit_convs_per_100_clicks',
        'even_credit_convs_per_click',
        'even_credit_convs_per_visit',
        'even_credit_cpa',
        'even_credit_roas',
        'even_credit_revenue',
        'fb_identity_frequency',
        'fb_identity_reach',
        'first_click_convs',
        'first_click_revenue',
        'first_touch_convs',
        'first_touch_revenue',
        'first_touchpoints',
        'impression',
        'impressions',
        'last_click_convs',
        'last_click_convs_per_1k_impress',
        'last_click_convs_per_100_clicks',
        'last_click_convs_per_click',
        'last_click_convs_per_visit',
        'last_click_cpa',
        'last_click_roas',
        'last_click_revenue',
        'last_click_with_extrapolation_convs',
        'last_click_with_extrapolation_convs_per_1k_impress',
        'last_click_with_extrapolation_convs_per_100_clicks',
        'last_click_with_extrapolation_convs_per_click',
        'last_click_with_extrapolation_convs_per_visit',
        'last_click_with_extrapolation_cpa',
        'last_click_with_extrapolation_roas',
        'last_click_with_extrapolation_revenue',
        'last_click_with_cookies_convs',
        'last_click_with_cookies_convs_per_1k_impress',
        'last_click_with_cookies_convs_per_100_clicks',
        'last_click_with_cookies_convs_per_click',
        'last_click_with_cookies_convs_per_visit',
        'last_click_with_cookies_cpa',
        'last_click_with_cookies_roas',
        'last_click_with_cookies_revenue',
        'last_touch_convs',
        'last_touch_convs_per_1k_impress',
        'last_touch_convs_per_100_clicks',
        'last_touch_convs_per_click',
        'last_touch_convs_per_visit',
        'last_touch_cpa',
        'last_touch_roas',
        'last_touch_revenue',
        'first_view_convs',
        'first_view_revenue',
        'last_view_convs',
        'last_view_revenue',
        'last_touch_with_extrapolation_convs',
        'last_touch_with_extrapolation_convs_per_1k_impress',
        'last_touch_with_extrapolation_convs_per_100_clicks',
        'last_touch_with_extrapolation_convs_per_click',
        'last_touch_with_extrapolation_convs_per_visit',
        'last_touch_with_extrapolation_cpa',
        'last_touch_with_extrapolation_roas',
        'last_touch_with_extrapolation_revenue',
        'last_touchpoints',
        'lookback_window',
        'fraud_impressions',
        'metric_conversions',
        'metric_desktop_contributors',
        'metric_mobile_contributors',
        'non_fraud_impressions',
        'non_fraud_included_impressions',
        'off_screen_impressions',
        'positional_20fl_convs',
        'positional_20fl_convs_per_1k_impress',
        'positional_20fl_convs_per_100_clicks',
        'positional_20fl_convs_per_click',
        'positional_20fl_convs_per_visit',
        'positional_20fl_cpa',
        'positional_20fl_roas',
        'positional_20fl_revenue',
        'positional_30fl_convs',
        'positional_30fl_convs_per_1k_impress',
        'positional_30fl_convs_per_100_clicks',
        'positional_30fl_convs_per_click',
        'positional_30fl_convs_per_visit',
        'positional_30fl_cpa',
        'positional_30fl_roas',
        'positional_30fl_revenue',
        'positional_40fl_convs',
        'positional_40fl_convs_per_1k_impress',
        'positional_40fl_convs_per_100_clicks',
        'positional_40fl_convs_per_click',
        'positional_40fl_convs_per_visit',
        'positional_40fl_cpa',
        'positional_40fl_roas',
        'positional_40fl_revenue',
        'measurable_impressions',
        'name',
        'net_media_cost',
        'placement_id',
        'publisher_id',
        'raw_impressions',
        'reach',
        'reach_by_frequency_1',
        'reach_by_frequency_2',
        'reach_by_frequency_3',
        'reach_by_frequency_4',
        'reach_by_frequency_5',
        'reach_by_frequency_6',
        'reach_by_frequency_7',
        'reach_by_frequency_8',
        'reach_by_frequency_9',
        'reach_by_frequency_10',
        'reach_by_frequency_11',
        'reach_by_frequency_12',
        'reach_by_frequency_13',
        'reach_by_frequency_14',
        'reach_by_frequency_15_plus',
        'reach_excluded_impressions',
        'reach_included_impressions',
        'reach_frequency',
        'report_click_through_rate',
        'report_clicks',
        'report_impressions',
        'report_visits',
        'report_visits_for_virtual_column',
        'search_clicks',
        'source_channel',
        'stats_model_convs',
        'stats_model_convs_per_1k_impress',
        'stats_model_convs_per_100_clicks',
        'stats_model_convs_per_click',
        'stats_model_convs_per_visit',
        'stats_model_cpa',
        'stats_model_roas',
        'stats_model_revenue',
        'sum_legal_price',
        'tactic_id',
        'time_decay_1day_convs',
        'time_decay_1day_convs_per_1k_impress',
        'time_decay_1day_convs_per_100_clicks',
        'time_decay_1day_convs_per_click',
        'time_decay_1day_convs_per_visit',
        'time_decay_1day_cpa',
        'time_decay_1day_roas',
        'time_decay_1day_revenue',
        'time_decay_2day_convs',
        'time_decay_2day_convs_per_1k_impress',
        'time_decay_2day_convs_per_100_clicks',
        'time_decay_2day_convs_per_click',
        'time_decay_2day_convs_per_visit',
        'time_decay_2day_cpa',
        'time_decay_2day_roas',
        'time_decay_2day_revenue',
        'time_decay_7day_convs',
        'time_decay_7day_convs_per_1k_impress',
        'time_decay_7day_convs_per_100_clicks',
        'time_decay_7day_convs_per_click',
        'time_decay_7day_convs_per_visit',
        'time_decay_7day_cpa',
        'time_decay_7day_roas',
        'time_decay_7day_revenue',
        'time_decay_14day_convs',
        'time_decay_14day_convs_per_1k_impress',
        'time_decay_14day_convs_per_100_clicks',
        'time_decay_14day_convs_per_click',
        'time_decay_14day_convs_per_visit',
        'time_decay_14day_cpa',
        'time_decay_14day_roas',
        'time_decay_14day_revenue',
        'timestamp',
        'total_comparable_conversions',
        'total_comparable_revenue',
        'total_conversions',
        'total_measurable_impressions',
        'total_non_fraud_impressions',
        'total_raw_impressions',
        'total_revenue',
        'total_viewable_impressions',
        'total_wasted_impressions',
        'unique_reach',
        'url_without_params',
        'version_id',
        'view_lookback_window',
        'view_lookback_window_in_minutes',
        'viewable_impressions',
        'wasted_impressions',
      ),
      'granularity_enum' => array(
        'hour',
        'day',
        'week',
        'month',
        'year',
        'lifetime',
      ),
      'join_column_enum' => array(
        'attributed_clicks_count',
        'attributed_impressions_count',
        'action_tag_id',
        'ad_id',
        'ad_set_id',
        'alias',
        'action_requests',
        'advertiser_id',
        'campaign_id',
        'campaign_group_id',
        'channel_id',
        'click_through_rate',
        'click_lookback_window',
        'click_lookback_window_in_minutes',
        'clicks',
        'company_id',
        'connection_id',
        'conversion_device_type',
        'conversion_event_id',
        'contributor_device_path_type',
        'age_range',
        'gender',
        'country',
        'dma_code',
        'dma_name',
        'device_os',
        'cost_per_1k_impressions',
        'cost_per_click',
        'cost_per_visit',
        'CUSTOM_BUCKET_BOOL_1',
        'CUSTOM_BUCKET_BOOL_2',
        'CUSTOM_BUCKET_BOOL_3',
        'CUSTOM_BUCKET_BOOL_4',
        'CUSTOM_BUCKET_INT_1',
        'CUSTOM_BUCKET_INT_2',
        'CUSTOM_BUCKET_INT_3',
        'CUSTOM_BUCKET_INT_4',
        'CUSTOM_BUCKET_STR_1',
        'CUSTOM_BUCKET_STR_2',
        'CUSTOM_BUCKET_STR_3',
        'CUSTOM_BUCKET_STR_4',
        'device_type',
        'days_from_conversion',
        'id',
        'data_driven_convs',
        'data_driven_convs_per_1k_impress',
        'data_driven_convs_per_100_clicks',
        'data_driven_convs_per_click',
        'data_driven_convs_per_visit',
        'data_driven_cpa',
        'data_driven_nullable_convs',
        'data_driven_roas',
        'data_driven_revenue',
        'dimension_group_ruleset',
        'even_credit_convs',
        'even_credit_convs_per_1k_impress',
        'even_credit_convs_per_100_clicks',
        'even_credit_convs_per_click',
        'even_credit_convs_per_visit',
        'even_credit_cpa',
        'even_credit_roas',
        'even_credit_revenue',
        'fb_identity_frequency',
        'fb_identity_reach',
        'first_click_convs',
        'first_click_revenue',
        'first_touch_convs',
        'first_touch_revenue',
        'first_touchpoints',
        'impression',
        'impressions',
        'last_click_convs',
        'last_click_convs_per_1k_impress',
        'last_click_convs_per_100_clicks',
        'last_click_convs_per_click',
        'last_click_convs_per_visit',
        'last_click_cpa',
        'last_click_roas',
        'last_click_revenue',
        'last_click_with_extrapolation_convs',
        'last_click_with_extrapolation_convs_per_1k_impress',
        'last_click_with_extrapolation_convs_per_100_clicks',
        'last_click_with_extrapolation_convs_per_click',
        'last_click_with_extrapolation_convs_per_visit',
        'last_click_with_extrapolation_cpa',
        'last_click_with_extrapolation_roas',
        'last_click_with_extrapolation_revenue',
        'last_click_with_cookies_convs',
        'last_click_with_cookies_convs_per_1k_impress',
        'last_click_with_cookies_convs_per_100_clicks',
        'last_click_with_cookies_convs_per_click',
        'last_click_with_cookies_convs_per_visit',
        'last_click_with_cookies_cpa',
        'last_click_with_cookies_roas',
        'last_click_with_cookies_revenue',
        'last_touch_convs',
        'last_touch_convs_per_1k_impress',
        'last_touch_convs_per_100_clicks',
        'last_touch_convs_per_click',
        'last_touch_convs_per_visit',
        'last_touch_cpa',
        'last_touch_roas',
        'last_touch_revenue',
        'first_view_convs',
        'first_view_revenue',
        'last_view_convs',
        'last_view_revenue',
        'last_touch_with_extrapolation_convs',
        'last_touch_with_extrapolation_convs_per_1k_impress',
        'last_touch_with_extrapolation_convs_per_100_clicks',
        'last_touch_with_extrapolation_convs_per_click',
        'last_touch_with_extrapolation_convs_per_visit',
        'last_touch_with_extrapolation_cpa',
        'last_touch_with_extrapolation_roas',
        'last_touch_with_extrapolation_revenue',
        'last_touchpoints',
        'lookback_window',
        'fraud_impressions',
        'metric_conversions',
        'metric_desktop_contributors',
        'metric_mobile_contributors',
        'non_fraud_impressions',
        'non_fraud_included_impressions',
        'off_screen_impressions',
        'positional_20fl_convs',
        'positional_20fl_convs_per_1k_impress',
        'positional_20fl_convs_per_100_clicks',
        'positional_20fl_convs_per_click',
        'positional_20fl_convs_per_visit',
        'positional_20fl_cpa',
        'positional_20fl_roas',
        'positional_20fl_revenue',
        'positional_30fl_convs',
        'positional_30fl_convs_per_1k_impress',
        'positional_30fl_convs_per_100_clicks',
        'positional_30fl_convs_per_click',
        'positional_30fl_convs_per_visit',
        'positional_30fl_cpa',
        'positional_30fl_roas',
        'positional_30fl_revenue',
        'positional_40fl_convs',
        'positional_40fl_convs_per_1k_impress',
        'positional_40fl_convs_per_100_clicks',
        'positional_40fl_convs_per_click',
        'positional_40fl_convs_per_visit',
        'positional_40fl_cpa',
        'positional_40fl_roas',
        'positional_40fl_revenue',
        'measurable_impressions',
        'name',
        'net_media_cost',
        'placement_id',
        'publisher_id',
        'raw_impressions',
        'reach',
        'reach_by_frequency_1',
        'reach_by_frequency_2',
        'reach_by_frequency_3',
        'reach_by_frequency_4',
        'reach_by_frequency_5',
        'reach_by_frequency_6',
        'reach_by_frequency_7',
        'reach_by_frequency_8',
        'reach_by_frequency_9',
        'reach_by_frequency_10',
        'reach_by_frequency_11',
        'reach_by_frequency_12',
        'reach_by_frequency_13',
        'reach_by_frequency_14',
        'reach_by_frequency_15_plus',
        'reach_excluded_impressions',
        'reach_included_impressions',
        'reach_frequency',
        'report_click_through_rate',
        'report_clicks',
        'report_impressions',
        'report_visits',
        'report_visits_for_virtual_column',
        'search_clicks',
        'source_channel',
        'stats_model_convs',
        'stats_model_convs_per_1k_impress',
        'stats_model_convs_per_100_clicks',
        'stats_model_convs_per_click',
        'stats_model_convs_per_visit',
        'stats_model_cpa',
        'stats_model_roas',
        'stats_model_revenue',
        'sum_legal_price',
        'tactic_id',
        'time_decay_1day_convs',
        'time_decay_1day_convs_per_1k_impress',
        'time_decay_1day_convs_per_100_clicks',
        'time_decay_1day_convs_per_click',
        'time_decay_1day_convs_per_visit',
        'time_decay_1day_cpa',
        'time_decay_1day_roas',
        'time_decay_1day_revenue',
        'time_decay_2day_convs',
        'time_decay_2day_convs_per_1k_impress',
        'time_decay_2day_convs_per_100_clicks',
        'time_decay_2day_convs_per_click',
        'time_decay_2day_convs_per_visit',
        'time_decay_2day_cpa',
        'time_decay_2day_roas',
        'time_decay_2day_revenue',
        'time_decay_7day_convs',
        'time_decay_7day_convs_per_1k_impress',
        'time_decay_7day_convs_per_100_clicks',
        'time_decay_7day_convs_per_click',
        'time_decay_7day_convs_per_visit',
        'time_decay_7day_cpa',
        'time_decay_7day_roas',
        'time_decay_7day_revenue',
        'time_decay_14day_convs',
        'time_decay_14day_convs_per_1k_impress',
        'time_decay_14day_convs_per_100_clicks',
        'time_decay_14day_convs_per_click',
        'time_decay_14day_convs_per_visit',
        'time_decay_14day_cpa',
        'time_decay_14day_roas',
        'time_decay_14day_revenue',
        'timestamp',
        'total_comparable_conversions',
        'total_comparable_revenue',
        'total_conversions',
        'total_measurable_impressions',
        'total_non_fraud_impressions',
        'total_raw_impressions',
        'total_revenue',
        'total_viewable_impressions',
        'total_wasted_impressions',
        'unique_reach',
        'url_without_params',
        'version_id',
        'view_lookback_window',
        'view_lookback_window_in_minutes',
        'viewable_impressions',
        'wasted_impressions',
      ),
      'requested_columns_enum' => array(
        'attributed_clicks_count',
        'attributed_impressions_count',
        'action_tag_id',
        'ad_id',
        'ad_set_id',
        'alias',
        'action_requests',
        'advertiser_id',
        'campaign_id',
        'campaign_group_id',
        'channel_id',
        'click_through_rate',
        'click_lookback_window',
        'click_lookback_window_in_minutes',
        'clicks',
        'company_id',
        'connection_id',
        'conversion_device_type',
        'conversion_event_id',
        'contributor_device_path_type',
        'age_range',
        'gender',
        'country',
        'dma_code',
        'dma_name',
        'device_os',
        'cost_per_1k_impressions',
        'cost_per_click',
        'cost_per_visit',
        'CUSTOM_BUCKET_BOOL_1',
        'CUSTOM_BUCKET_BOOL_2',
        'CUSTOM_BUCKET_BOOL_3',
        'CUSTOM_BUCKET_BOOL_4',
        'CUSTOM_BUCKET_INT_1',
        'CUSTOM_BUCKET_INT_2',
        'CUSTOM_BUCKET_INT_3',
        'CUSTOM_BUCKET_INT_4',
        'CUSTOM_BUCKET_STR_1',
        'CUSTOM_BUCKET_STR_2',
        'CUSTOM_BUCKET_STR_3',
        'CUSTOM_BUCKET_STR_4',
        'device_type',
        'days_from_conversion',
        'id',
        'data_driven_convs',
        'data_driven_convs_per_1k_impress',
        'data_driven_convs_per_100_clicks',
        'data_driven_convs_per_click',
        'data_driven_convs_per_visit',
        'data_driven_cpa',
        'data_driven_nullable_convs',
        'data_driven_roas',
        'data_driven_revenue',
        'dimension_group_ruleset',
        'even_credit_convs',
        'even_credit_convs_per_1k_impress',
        'even_credit_convs_per_100_clicks',
        'even_credit_convs_per_click',
        'even_credit_convs_per_visit',
        'even_credit_cpa',
        'even_credit_roas',
        'even_credit_revenue',
        'fb_identity_frequency',
        'fb_identity_reach',
        'first_click_convs',
        'first_click_revenue',
        'first_touch_convs',
        'first_touch_revenue',
        'first_touchpoints',
        'impression',
        'impressions',
        'last_click_convs',
        'last_click_convs_per_1k_impress',
        'last_click_convs_per_100_clicks',
        'last_click_convs_per_click',
        'last_click_convs_per_visit',
        'last_click_cpa',
        'last_click_roas',
        'last_click_revenue',
        'last_click_with_extrapolation_convs',
        'last_click_with_extrapolation_convs_per_1k_impress',
        'last_click_with_extrapolation_convs_per_100_clicks',
        'last_click_with_extrapolation_convs_per_click',
        'last_click_with_extrapolation_convs_per_visit',
        'last_click_with_extrapolation_cpa',
        'last_click_with_extrapolation_roas',
        'last_click_with_extrapolation_revenue',
        'last_click_with_cookies_convs',
        'last_click_with_cookies_convs_per_1k_impress',
        'last_click_with_cookies_convs_per_100_clicks',
        'last_click_with_cookies_convs_per_click',
        'last_click_with_cookies_convs_per_visit',
        'last_click_with_cookies_cpa',
        'last_click_with_cookies_roas',
        'last_click_with_cookies_revenue',
        'last_touch_convs',
        'last_touch_convs_per_1k_impress',
        'last_touch_convs_per_100_clicks',
        'last_touch_convs_per_click',
        'last_touch_convs_per_visit',
        'last_touch_cpa',
        'last_touch_roas',
        'last_touch_revenue',
        'first_view_convs',
        'first_view_revenue',
        'last_view_convs',
        'last_view_revenue',
        'last_touch_with_extrapolation_convs',
        'last_touch_with_extrapolation_convs_per_1k_impress',
        'last_touch_with_extrapolation_convs_per_100_clicks',
        'last_touch_with_extrapolation_convs_per_click',
        'last_touch_with_extrapolation_convs_per_visit',
        'last_touch_with_extrapolation_cpa',
        'last_touch_with_extrapolation_roas',
        'last_touch_with_extrapolation_revenue',
        'last_touchpoints',
        'lookback_window',
        'fraud_impressions',
        'metric_conversions',
        'metric_desktop_contributors',
        'metric_mobile_contributors',
        'non_fraud_impressions',
        'non_fraud_included_impressions',
        'off_screen_impressions',
        'positional_20fl_convs',
        'positional_20fl_convs_per_1k_impress',
        'positional_20fl_convs_per_100_clicks',
        'positional_20fl_convs_per_click',
        'positional_20fl_convs_per_visit',
        'positional_20fl_cpa',
        'positional_20fl_roas',
        'positional_20fl_revenue',
        'positional_30fl_convs',
        'positional_30fl_convs_per_1k_impress',
        'positional_30fl_convs_per_100_clicks',
        'positional_30fl_convs_per_click',
        'positional_30fl_convs_per_visit',
        'positional_30fl_cpa',
        'positional_30fl_roas',
        'positional_30fl_revenue',
        'positional_40fl_convs',
        'positional_40fl_convs_per_1k_impress',
        'positional_40fl_convs_per_100_clicks',
        'positional_40fl_convs_per_click',
        'positional_40fl_convs_per_visit',
        'positional_40fl_cpa',
        'positional_40fl_roas',
        'positional_40fl_revenue',
        'measurable_impressions',
        'name',
        'net_media_cost',
        'placement_id',
        'publisher_id',
        'raw_impressions',
        'reach',
        'reach_by_frequency_1',
        'reach_by_frequency_2',
        'reach_by_frequency_3',
        'reach_by_frequency_4',
        'reach_by_frequency_5',
        'reach_by_frequency_6',
        'reach_by_frequency_7',
        'reach_by_frequency_8',
        'reach_by_frequency_9',
        'reach_by_frequency_10',
        'reach_by_frequency_11',
        'reach_by_frequency_12',
        'reach_by_frequency_13',
        'reach_by_frequency_14',
        'reach_by_frequency_15_plus',
        'reach_excluded_impressions',
        'reach_included_impressions',
        'reach_frequency',
        'report_click_through_rate',
        'report_clicks',
        'report_impressions',
        'report_visits',
        'report_visits_for_virtual_column',
        'search_clicks',
        'source_channel',
        'stats_model_convs',
        'stats_model_convs_per_1k_impress',
        'stats_model_convs_per_100_clicks',
        'stats_model_convs_per_click',
        'stats_model_convs_per_visit',
        'stats_model_cpa',
        'stats_model_roas',
        'stats_model_revenue',
        'sum_legal_price',
        'tactic_id',
        'time_decay_1day_convs',
        'time_decay_1day_convs_per_1k_impress',
        'time_decay_1day_convs_per_100_clicks',
        'time_decay_1day_convs_per_click',
        'time_decay_1day_convs_per_visit',
        'time_decay_1day_cpa',
        'time_decay_1day_roas',
        'time_decay_1day_revenue',
        'time_decay_2day_convs',
        'time_decay_2day_convs_per_1k_impress',
        'time_decay_2day_convs_per_100_clicks',
        'time_decay_2day_convs_per_click',
        'time_decay_2day_convs_per_visit',
        'time_decay_2day_cpa',
        'time_decay_2day_roas',
        'time_decay_2day_revenue',
        'time_decay_7day_convs',
        'time_decay_7day_convs_per_1k_impress',
        'time_decay_7day_convs_per_100_clicks',
        'time_decay_7day_convs_per_click',
        'time_decay_7day_convs_per_visit',
        'time_decay_7day_cpa',
        'time_decay_7day_roas',
        'time_decay_7day_revenue',
        'time_decay_14day_convs',
        'time_decay_14day_convs_per_1k_impress',
        'time_decay_14day_convs_per_100_clicks',
        'time_decay_14day_convs_per_click',
        'time_decay_14day_convs_per_visit',
        'time_decay_14day_cpa',
        'time_decay_14day_roas',
        'time_decay_14day_revenue',
        'timestamp',
        'total_comparable_conversions',
        'total_comparable_revenue',
        'total_conversions',
        'total_measurable_impressions',
        'total_non_fraud_impressions',
        'total_raw_impressions',
        'total_revenue',
        'total_viewable_impressions',
        'total_wasted_impressions',
        'unique_reach',
        'url_without_params',
        'version_id',
        'view_lookback_window',
        'view_lookback_window_in_minutes',
        'viewable_impressions',
        'wasted_impressions',
      ),
      'time_period_enum' => array(
        'all_available',
        'all_dates',
        'custom',
        'date_range',
        'fifteen_days',
        'last_fourteen_days',
        'last_hundred_fourty_four_hours',
        'last_month',
        'last_ninety_days',
        'last_quarter',
        'last_seven_days',
        'last_sixty_days',
        'last_thirty_days',
        'last_twenty_four_hours',
        'last_year',
        'month_to_date',
        'quarter_to_date',
        'seven_days',
        'thirty_days',
        'this_month_whole_days',
        'today',
        'week_to_date',
        'year_to_date',
        'yesterday',
      ),
      'view_enum' => array(
        'none',
        'adset&#x2F;connection&#x2F;advertiser',
        'advertiser',
        'advertiser&#x2F;version',
        'advertiser&#x2F;version&#x2F;campaign',
        'campaign',
        'campaign&#x2F;device',
        'campaign&#x2F;placement',
        'campaign&#x2F;publisher',
        'campaign&#x2F;version',
        'campaign&#x2F;version&#x2F;publisher',
        'company&#x2F;campaign',
        'connection&#x2F;advertiser',
        'connection&#x2F;advertiser&#x2F;adset',
        'connection&#x2F;advertiser&#x2F;campaign',
        'connection&#x2F;advertiser&#x2F;campaign&#x2F;placement',
        'conversion_event&#x2F;campaign',
        'conversion_event&#x2F;channel',
        'conversion_event&#x2F;publisher',
        'conversion_event&#x2F;tactic',
        'placement',
        'placement&#x2F;advertiser',
        'placement&#x2F;device',
        'publisher',
        'publisher&#x2F;campaign',
        'publisher&#x2F;device',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/in_product_metrics_by_campaign',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPermissions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter_by' => 'string',
      'order_by' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/permissions',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getReportColumns(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter_by' => 'string',
      'order_by' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/report_columns',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getReportRuns(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter_by' => 'string',
      'order_by' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/report_runs',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getReports(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter_by' => 'string',
      'order_by' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/reports',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getRoles(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter_by' => 'string',
      'order_by' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/roles',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTactics(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter_by' => 'string',
      'order_by' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/tactics',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTrackingConnections(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter_by' => 'string',
      'order_by' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/tracking_connections',
      new AbstractCrudObject(),
      'EDGE',
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
      new AtlasCompany(),
      'NODE',
      AtlasCompany::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
