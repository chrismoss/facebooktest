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

namespace FacebookAds\Object\Values;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 * @method static InsightsQueryResultAggregatebyValues getInstance()
 */
class InsightsQueryResultAggregatebyValues extends AbstractEnum {

  const COUNT = 'COUNT';
  const COUNT_IDENTIFIED_USERS = 'COUNT_IDENTIFIED_USERS';
  const USERS = 'USERS';
  const TOPK = 'TOPK';
  const SUM = 'SUM';
  const SUM_PER_EVENT = 'SUM_PER_EVENT';
  const SUM_IDENTIFIED_USERS = 'SUM_IDENTIFIED_USERS';
  const USD_SUM = 'USD_SUM';
  const USD_SUM_PER_EVENT = 'USD_SUM_PER_EVENT';
  const USD_SUM_IDENTIFIED_USERS = 'USD_SUM_IDENTIFIED_USERS';
  const USD_SUM_PER_USER = 'USD_SUM_PER_USER';
  const UNKNOWN_USERS = 'UNKNOWN_USERS';
  const SCORE = 'SCORE';
  const MEDIAN_VALUE = 'MEDIAN_VALUE';
  const MEDIAN_VALUE_PER_USER = 'MEDIAN_VALUE_PER_USER';
  const DAU = 'DAU';
  const WAU = 'WAU';
  const MAU = 'MAU';
  const PERCENTILES_COUNT = 'PERCENTILES_COUNT';
  const PERCENTILES_VALUE = 'PERCENTILES_VALUE';
  const PERCENTILES_USD_VALUE = 'PERCENTILES_USD_VALUE';
  const OVERLAP = 'OVERLAP';
  const COUNT_PER_USER = 'COUNT_PER_USER';
  const VALUE_PER_USER = 'VALUE_PER_USER';
  const USD_VALUE_PER_USER = 'USD_VALUE_PER_USER';
  const SESSIONS_PER_JOURNEY = 'SESSIONS_PER_JOURNEY';
  const CONVERTED_JOURNEY_PERCENT = 'CONVERTED_JOURNEY_PERCENT';
  const MEDIAN_JOURNEY_LENGTH = 'MEDIAN_JOURNEY_LENGTH';
  const AVERAGE_JOURNEY_LENGTH = 'AVERAGE_JOURNEY_LENGTH';
  const JOURNEY_CHANNEL_INCLUSION = 'JOURNEY_CHANNEL_INCLUSION';
  const EVENT_SOURCE_IDS = 'EVENT_SOURCE_IDS';
  const SESSION_BOUNCE_RATE = 'SESSION_BOUNCE_RATE';
  const JOURNEY_INCLUSION = 'JOURNEY_INCLUSION';
  const USER_PROPERTY_USER_COUNT = 'USER_PROPERTY_USER_COUNT';
}
