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
    'LBL_MODULE_NAME' => '商談',
    'LBL_MODULE_TITLE' => '商談: ホーム',
    'LBL_SEARCH_FORM_TITLE' => '商談検索',
    'LBL_LIST_FORM_TITLE' => '商談一覧',
    'LBL_OPPORTUNITY_NAME' => '商談名:',
    'LBL_OPPORTUNITY' => '商談名:',
    'LBL_NAME' => '商談名',
    'LBL_INVITEE' => '取引先担当者',
    'LBL_CURRENCIES' => '通貨',
    'LBL_LIST_OPPORTUNITY_NAME' => '名前',
    'LBL_LIST_ACCOUNT_NAME' => '取引先',
    'LBL_LIST_AMOUNT' => '金額',
    'LBL_LIST_AMOUNT_USDOLLAR' => '金額',
    'LBL_LIST_DATE_CLOSED' => '完了',
    'LBL_LIST_SALES_STAGE' => 'セールスステージ',
    'LBL_ACCOUNT_ID' => '取引先ID',
    'LBL_CURRENCY_NAME' => '通貨名',
    'LBL_CURRENCY_SYMBOL' => '通貨シンボル',

    'UPDATE' => '商談の通貨更新',
    'LBL_ACCOUNT_NAME' => '取引先:',
    'LBL_AMOUNT' => '金額:',
    'LBL_AMOUNT_USDOLLAR' => '金額USD:',
    'LBL_CURRENCY' => '通貨:',
    'LBL_DATE_CLOSED' => '受注予定日:',
    'LBL_TYPE' => 'タイプ:',
    'LBL_CAMPAIGN' => 'キャンペーン:',
    'LBL_NEXT_STEP' => '次ステップ:',
    'LBL_LEAD_SOURCE' => 'リードソース:',
    'LBL_SALES_STAGE' => '商談ステージ:',
    'LBL_PROBABILITY' => '確度 (%):',
    'LBL_DESCRIPTION' => '詳細:',
    'LBL_DUPLICATE' => '重複の可能性がある商談',
    'MSG_DUPLICATE' => 'あなたが作成しようとしている商談は既存の商談と重複する可能性があります。類似の商談は下記に表示されています。保存をクリックすると新たに商談を作成します。キャンセルをクリックすると商談を作成せずにモジュールに戻ります。',
    'LBL_NEW_FORM_TITLE' => '商談作成',
    'LNK_NEW_OPPORTUNITY' => '商談作成',
    'LNK_OPPORTUNITY_LIST' => '商談',
    'ERR_DELETE_RECORD' => '商談を削除するにはレコード番号を指定する必要があります。',
    'LBL_TOP_OPPORTUNITIES' => '私の商談ランキング',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'プロジェクトからこの商談を削除しても良いですか？',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '商談',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',

    'LBL_LEADS_SUBPANEL_TITLE' => 'リード',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '取引先担当者',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ドキュメント',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'プロジェクト',
    'LBL_ASSIGNED_TO_NAME' => 'アサイン先:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'アサイン先ユーザ',
    'LBL_MY_CLOSED_OPPORTUNITIES' => '私のクローズ済み商談',
    'LBL_TOTAL_OPPORTUNITIES' => '商談総額',
    'LBL_CLOSED_WON_OPPORTUNITIES' => '受注済み商談',
    'LBL_ASSIGNED_TO_ID' => 'アサイン先:',
    'LBL_MODIFIED_NAME' => '更新者',
    'LBL_CREATED_USER' => '作成者',
    'LBL_MODIFIED_USER' => '更新者',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'キャンペーン',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'プロジェクト',
    'LNK_IMPORT_OPPORTUNITIES' => '商談をインポートする',
    'LBL_EDITLAYOUT' => 'レイアウト編集' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => '契約',
    'LBL_AOS_QUOTES' => '見積',
);
