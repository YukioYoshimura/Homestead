<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_ASSIGNED_TO_ID' => '担当ユーザID',
    'LBL_ASSIGNED_TO_NAME' => '割り当て先',
    'LBL_SECURITYGROUPS' => 'セキュリティグループ',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'セキュリティグループ',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '作成日',
    'LBL_DATE_MODIFIED' => '更新日',
    'LBL_MODIFIED' => '更新者',
    'LBL_MODIFIED_NAME' => '更新者',
    'LBL_CREATED' => '作成者',
    'LBL_DESCRIPTION' => '詳細',
    'LBL_DELETED' => '削除済み',
    'LBL_NAME' => '名称',
    'LBL_CREATED_USER' => '生成ユーザ',
    'LBL_MODIFIED_USER' => '更新ユーザ',
    'LBL_LIST_NAME' => '名称',
    'LBL_EDIT_BUTTON' => '編集',
    'LBL_REMOVE' => '削除',
    'LBL_LIST_FORM_TITLE' => 'ピボット リスト',
    'LBL_MODULE_NAME' => 'ピボット',
    'LBL_MODULE_TITLE' => 'ピボット',
    'LBL_HOMEPAGE_TITLE' => '私のピボット',
    'LNK_NEW_RECORD' => 'ピボットを作成',
    'LNK_LIST' => 'ピボットを表示',
    'LBL_SEARCH_FORM_TITLE' => 'ピボットを検索',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_NEW_FORM_TITLE' => '新しいピボット',
    'LBL_CONFIG' => '構成',
    'LBL_TYPE' => '解析用領域',
    'LNK_SPOT_LIST' => 'スポットを表示',
    'LNK_SPOT_CREATE' => 'スポットを作成',

    //Analytics
    'LBL_AN_CONFIGURATION' => '構成',

    'LBL_AN_UNSUPPORTED_DB' => '申し訳ありませんが、Suite スポットは現在MySQL または MS SQL に対して構成されています。',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => '名称',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => '取引先タイプ',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => '業界',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => '請求国',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => '担当ユーザ名',
    'LBL_AN_LEADS_STATUS' => 'ステータス',
    'LBL_AN_LEADS_LEAD_SOURCE' => '潜在顧客ソース',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'キャンペーン名',
    'LBL_AN_LEADS_YEAR' => '年',
    'LBL_AN_LEADS_QUARTER' => '四半期',
    'LBL_AN_LEADS_MONTH' => '月',
    'LBL_AN_LEADS_WEEK' => '週',
    'LBL_AN_LEADS_DAY' => '日',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => '取引先',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => '商談名',
    'LBL_AN_SALES_ASSIGNED_USER' => '担当ユーザ名',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => '商談種類',
    'LBL_AN_SALES_LEAD_SOURCE' => '潜在顧客ソース',
    'LBL_AN_SALES_AMOUNT' => '金額',
    'LBL_AN_SALES_STAGE' => 'セールスステージ',
    'LBL_AN_SALES_PROBABILITY' => '確率',
    'LBL_AN_SALES_DATE' => '販売日付',
    'LBL_AN_SALES_QUARTER' => '販売店四半期',
    'LBL_AN_SALES_MONTH' => '販売月',
    'LBL_AN_SALES_WEEK' => '販売週',
    'LBL_AN_SALES_DAY' => '売上日',
    'LBL_AN_SALES_YEAR' => '販売年',
    'LBL_AN_SALES_CAMPAIGN' => 'キャンペーン',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => '取引先',
    'LBL_AN_SERVICE_STATE' => '都道府県',
    'LBL_AN_SERVICE_STATUS' => 'ステータス',
    'LBL_AN_SERVICE_PRIORITY' => '優先度',
    'LBL_AN_SERVICE_CREATED_DAY' => '作成日付',
    'LBL_AN_SERVICE_CREATED_WEEK' => '作成週',
    'LBL_AN_SERVICE_CREATED_MONTH' => '作成月',
    'LBL_AN_SERVICE_CREATED_QUARTER' => '作成四半期',
    'LBL_AN_SERVICE_CREATED_YEAR' => '作成年',
    'LBL_AN_SERVICE_CONTACT_NAME' => '取引先担当者',
    'LBL_AN_SERVICE_ASSIGNED_TO' => '担当ユーザ名',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'タイプ',
    'LBL_AN_ACTIVITIES_NAME' => '名称',
    'LBL_AN_ACTIVITIES_STATUS' => 'ステータス',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => '担当ユーザ名',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'ステータス',
    'LBL_AN_MARKETING_TYPE' => 'タイプ',
    'LBL_AN_MARKETING_BUDGET' => '予算',
    'LBL_AN_MARKETING_EXPECTED_COST' => '期待コスト',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => '期待収益',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => '商談名',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => '商談金額',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => '商談営業ステージ',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => '割り当てられる商談',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => '取引先',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'キャンペーン名',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => '活動日',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => '活動タイプ',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => '関連タイプ',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => '関連先ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => '商談名',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => '商談のタイプ',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => '商談のリードソース',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => '商談営業ステージ',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => '取引先',
    'LBL_AN_QUOTES_CONTACT_NAME' => '取引先担当者',
    'LBL_AN_QUOTES_ITEM_NAME' => '項目名',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'アイテムの種類',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'アイテムのカテゴリー',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Item Qty',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'アイテムの表示価格',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'アイテムのセール価格',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'アイテムの原価',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'アイテムの割引価格',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => '割引額',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'アイテムの総額',
    'LBL_AN_QUOTES_GRAND_TOTAL' => '総計',
    'LBL_AN_QUOTES_ASSIGNED_TO' => '担当ユーザ名',
    'LBL_AN_QUOTES_DATE_CREATED' => '作成日',
    'LBL_AN_QUOTES_DAY_CREATED' => '作成日',
    'LBL_AN_QUOTES_WEEK_CREATED' => '作成週',
    'LBL_AN_QUOTES_MONTH_CREATED' => '作成年',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Quarter Created',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Year Created',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Error ascertaining the label for the pivot sub-area',

    //Added to allow for the UI of the pivot to be language agnostic
    'LBL_RENDERERS_TABLE' =>'Table',
    'LBL_RENDERERS_TABLE_BARCHART' =>'Table Barchart',
    'LBL_RENDERERS_HEATMAP' =>'Heatmap',
    'LBL_RENDERERS_ROW_HEATMAP' =>'Row Heatmap',
    'LBL_RENDERERS_COL_HEATMAP' =>'Col Heatmap',
    'LBL_RENDERERS_LINE_CHART' =>'折れ線グラフ',
    'LBL_RENDERERS_BAR_CHART' =>'縦棒グラフ',
    'LBL_RENDERERS_STACKED_BAR_CHART' =>'Stacked Bar',
    'LBL_RENDERERS_AREA_CHART' =>'Area Chart',
    'LBL_RENDERERS_SCATTER_CHART' =>'Scatter Chart',

    'LBL_AGGREGATORS_COUNT' => '合計',
    'LBL_AGGREGATORS_COUNT_UNIQUE_VALUES' => 'Count Unique Values',
    'LBL_AGGREGATORS_LIST_UNIQUE_VALUES' => 'List Unique Values',
    'LBL_AGGREGATORS_SUM' => '合計',
    'LBL_AGGREGATORS_INTEGER_SUM' => 'Integer Sum',
    'LBL_AGGREGATORS_AVERAGE' => '平均',
    'LBL_AGGREGATORS_MINIMUM' => '最小',
    'LBL_AGGREGATORS_MAXIMUM' => '最大',
    'LBL_AGGREGATORS_SUM_OVER_SUM' => 'Sum over Sum',
    'LBL_AGGREGATORS_80%_UPPER_BOUND' => '80% Upper Bound',
    'LBL_AGGREGATORS_80%_LOWER_BOUND' => '80% Lower Bound',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_TOTAL' => 'Sum as Fraction of Total',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_ROWS' => 'Sum as Fraction of Rows',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_COLUMNS' => 'Sum as Fraction of Columns',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_TOTAL' => 'Count as Fraction of Total',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_ROWS' => 'Count as Fraction of Rows',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_COLUMNS' => 'Count as Fraction of Columns',

    'LBL_LOCALE_STRINGS_RENDER_ERROR' => 'An error occurred rendering the PivotTable results.',
    'LBL_LOCALE_STRINGS_COMPUTING_ERROR' => 'An error occurred computing the PivotTable results.',
    'LBL_LOCALE_STRINGS_UI_RENDER_ERROR' => 'An error occurred rendering the PivotTable UI.',
    'LBL_LOCALE_STRINGS_SELECT_ALL' => '全てのレコード',
    'LBL_LOCALE_STRINGS_SELECT_NONE' => 'Select None',
    'LBL_LOCALE_STRINGS_TOO_MANY' => '(too many to list)',
    'LBL_LOCALE_STRINGS_FILTER_RESULTS' => 'Filter results',
    'LBL_LOCALE_STRINGS_TOTALS' => 'Totals',
    'LBL_LOCALE_STRINGS_VS' => 'vs',
    'LBL_LOCALE_STRINGS_BY' => 'by',
    'LBL_LOCALE_STRINGS_OK' => '了解',

    'LBL_ACTIVITIES_CALL'=>'コール情報',
    'LBL_ACTIVITIES_MEETING'=>'ミーティング',
    'LBL_ACTIVITIES_TASK'=>'タスク',
);
