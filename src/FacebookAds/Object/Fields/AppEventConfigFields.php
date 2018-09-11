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

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AppEventConfigFields extends AbstractEnum {

  const AWS_KINESIS_FIREHOSE_SETTING = 'aws_kinesis_firehose_setting';
  const BREAKDOWNS_CONFIG = 'breakdowns_config';
  const BUILTIN_FIELDS_CONFIG = 'builtin_fields_config';
  const DEPRECATED_EVENTS_CONFIG = 'deprecated_events_config';
  const EVENTS_CONFIG = 'events_config';
  const ID = 'id';
  const IOS_PURCHASE_VALIDATION_SECRET = 'ios_purchase_validation_secret';
  const IS_ANY_ROLE_ABLE_TO_SEE_RESTRICTED_INSIGHTS = 'is_any_role_able_to_see_restricted_insights';
  const IS_IMPLICIT_PURCHASE_LOGGING_ON_ANDROID_SUPPORTED = 'is_implicit_purchase_logging_on_android_supported';
  const IS_IMPLICIT_PURCHASE_LOGGING_ON_IOS_SUPPORTED = 'is_implicit_purchase_logging_on_ios_supported';
  const IS_TRACK_ANDROID_APP_UNINSTALL_SUPPORTED = 'is_track_android_app_uninstall_supported';
  const IS_TRACK_IOS_APP_UNINSTALL_SUPPORTED = 'is_track_ios_app_uninstall_supported';
  const JOURNEY_BACKFILL_STATUS = 'journey_backfill_status';
  const JOURNEY_CONVERSION_EVENTS = 'journey_conversion_events';
  const JOURNEY_ENABLED = 'journey_enabled';
  const JOURNEY_TIMEOUT = 'journey_timeout';
  const LATEST_SDK_VERSIONS = 'latest_sdk_versions';
  const LOG_ANDROID_IMPLICIT_PURCHASE_EVENTS = 'log_android_implicit_purchase_events';
  const LOG_AUTOMATIC_ANALYTICS_EVENTS = 'log_automatic_analytics_events';
  const LOG_IMPLICIT_PURCHASE_EVENTS = 'log_implicit_purchase_events';
  const PREV_JOURNEY_CONVERSION_EVENTS = 'prev_journey_conversion_events';
  const QUERY_APPROXIMATION_ACCURACY_LEVEL = 'query_approximation_accuracy_level';
  const QUERY_CURRENCY = 'query_currency';
  const QUERY_TIMEZONE = 'query_timezone';
  const RECENT_EVENTS_UPDATE_TIME = 'recent_events_update_time';
  const SESSION_TIMEOUT_INTERVAL = 'session_timeout_interval';
  const TRACK_ANDROID_APP_UNINSTALL = 'track_android_app_uninstall';
  const TRACK_IOS_APP_UNINSTALL = 'track_ios_app_uninstall';

  public function getFieldTypes() {
    return array(
      'aws_kinesis_firehose_setting' => 'Object',
      'breakdowns_config' => 'list<Object>',
      'builtin_fields_config' => 'list<Object>',
      'deprecated_events_config' => 'list<Object>',
      'events_config' => 'list<Object>',
      'id' => 'string',
      'ios_purchase_validation_secret' => 'string',
      'is_any_role_able_to_see_restricted_insights' => 'bool',
      'is_implicit_purchase_logging_on_android_supported' => 'bool',
      'is_implicit_purchase_logging_on_ios_supported' => 'bool',
      'is_track_android_app_uninstall_supported' => 'bool',
      'is_track_ios_app_uninstall_supported' => 'bool',
      'journey_backfill_status' => 'string',
      'journey_conversion_events' => 'list<string>',
      'journey_enabled' => 'bool',
      'journey_timeout' => 'string',
      'latest_sdk_versions' => 'map<string, string>',
      'log_android_implicit_purchase_events' => 'bool',
      'log_automatic_analytics_events' => 'bool',
      'log_implicit_purchase_events' => 'bool',
      'prev_journey_conversion_events' => 'list<string>',
      'query_approximation_accuracy_level' => 'string',
      'query_currency' => 'string',
      'query_timezone' => 'string',
      'recent_events_update_time' => 'datetime',
      'session_timeout_interval' => 'unsigned int',
      'track_android_app_uninstall' => 'bool',
      'track_ios_app_uninstall' => 'bool',
    );
  }
}
