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
    'ERR_DELETE_RECORD' => '取引先担当者を削除するにはレコード番号を指定する必要があります。',
    'LBL_ACCOUNT_ID' => '取引先ID:',
    'LBL_ACCOUNT_NAME' => '取引先:',
    'LBL_CAMPAIGN' => 'キャンペーン:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_ADD_BUSINESSCARD' => '名刺から作成',
    'LBL_ADDMORE_BUSINESSCARD' => 'さらに名刺から作成',
    'LBL_ADDRESS_INFORMATION' => '住所情報',
    'LBL_ALT_ADDRESS_CITY' => '別の市区町村:',
    'LBL_ALT_ADDRESS_COUNTRY' => '別の国:',
    'LBL_ALT_ADDRESS_POSTALCODE' => '別の郵便番号:',
    'LBL_ALT_ADDRESS_STATE' => '別の都道府県:',
    'LBL_ALT_ADDRESS_STREET_2' => '別の住所 2:',
    'LBL_ALT_ADDRESS_STREET_3' => '別の住所 3:',
    'LBL_ALT_ADDRESS_STREET' => '別の番地その他:',
    'LBL_ALTERNATE_ADDRESS' => '別の住所:',
    'LBL_ALT_ADDRESS' => '別の住所:',
    'LBL_ANY_ADDRESS' => '住所:',
    'LBL_ANY_EMAIL' => 'Eメール:',
    'LBL_ANY_PHONE' => '電話:',
    'LBL_ASSIGNED_TO_NAME' => '担当ユーザ名:',
    'LBL_ASSIGNED_TO_ID' => '担当ユーザID:',
    'LBL_ASSISTANT_PHONE' => 'アシスタント電話:',
    'LBL_ASSISTANT' => 'アシスタント:',
    'LBL_BIRTHDATE' => '誕生日:',
    'LBL_BUSINESSCARD' => '名刺から作成',
    'LBL_CITY' => '市区町村:',
    'LBL_CAMPAIGN_ID' => 'キャンペーンID',
    'LBL_CONTACT_INFORMATION' => '概要',  //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CONTACT_NAME' => '取引先担当者:',
    'LBL_CONTACT_OPP_FORM_TITLE' => '取引先担当者 - 商談:',
    'LBL_CONTACT_ROLE' => '役割:',
    'LBL_CONTACT' => '取引先担当者:',
    'LBL_COUNTRY' => '国:',
    'LBL_CREATED_ACCOUNT' => '新しい取引先が作成されました',
    'LBL_CREATED_CALL' => '新しいコールが作成されました',
    'LBL_CREATED_CONTACT' => '新しい取引先担当者が作成されました',
    'LBL_CREATED_MEETING' => '新しいミーティングが作成されました',
    'LBL_CREATED_OPPORTUNITY' => '新しい商談が作成されました',
    'LBL_DATE_MODIFIED' => '最終更新日:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '取引先担当者',
    'LBL_DEPARTMENT' => '部署:',
    'LBL_DESCRIPTION' => '詳細:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => '直属の部下',
    'LBL_DO_NOT_CALL' => '発信禁止:',
    'LBL_DUPLICATE' => '重複の可能性がある取引先担当者一覧',
    'LBL_EMAIL_ADDRESS' => 'Eメール:',
    'LBL_EMAIL_OPT_OUT' => 'メール送信除外:',
    'LBL_EXISTING_ACCOUNT' => '既存の取引先を使用',
    'LBL_EXISTING_CONTACT' => '既存の取引先担当者を使用',
    'LBL_EXISTING_OPPORTUNITY' => '既存の商談を使用',
    'LBL_FAX_PHONE' => 'FAX:',
    'LBL_FIRST_NAME' => '名:',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_HOME_PHONE' => '自宅電話:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'vCardインポート',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'vCardをインポートすることによって新規取引先担当者を作成します。',
    'LBL_INVALID_EMAIL' => '無効なEメール:',
    'LBL_INVITEE' => '直属の部下',
    'LBL_LAST_NAME' => '姓:',
    'LBL_LEAD_SOURCE' => 'リードソース:',
    'LBL_LIST_ACCEPT_STATUS' => '受け入れステータス',
    'LBL_LIST_ACCOUNT_NAME' => '取引先',
    'LBL_LIST_CONTACT_NAME' => '取引先担当者',
    'LBL_LIST_CONTACT_ROLE' => '役割',
    'LBL_LIST_EMAIL_ADDRESS' => '電子メール',
    'LBL_LIST_FIRST_NAME' => '名',
    'LBL_LIST_FORM_TITLE' => '取引先担当者一覧',
    'LBL_LIST_LAST_NAME' => '姓',
    'LBL_LIST_NAME' => '名前',
    'LBL_LIST_PHONE' => '勤務先電話番号',
    'LBL_LIST_TITLE' => '職位',
    'LBL_MOBILE_PHONE' => '携帯電話:',
    'LBL_MODIFIED' => '変更者:',
    'LBL_MODULE_NAME' => '取引先担当者',
    'LBL_MODULE_TITLE' => '取引先担当者: ホーム',
    'LBL_NAME' => '名前:',
    'LBL_NEW_FORM_TITLE' => '取引先担当者作成',
    'LBL_NOTE_SUBJECT' => 'ノート件名',
    'LBL_OFFICE_PHONE' => '勤務先電話番号:',
    'LBL_OPP_NAME' => '商談名:',
    'LBL_OPPORTUNITY_ROLE_ID' => '商談の役割ID:',
    'LBL_OPPORTUNITY_ROLE' => '商談での役割:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'その他電子メール:',
    'LBL_OTHER_PHONE' => '他の電話番号:',
    'LBL_PHONE' => '電話番号:',
    'LBL_PORTAL_APP' => 'ポータルアプリケーション:',
    'LBL_PORTAL_INFORMATION' => 'ポータル情報',
    'LBL_PORTAL_NAME' => 'ポータルユーザ名:',
    'LBL_STREET' => '番地',
    'LBL_POSTAL_CODE' => '郵便番号:',
    'LBL_PRIMARY_ADDRESS_CITY' => '主となる市区町村:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '主となる国:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '主となる郵便番号:',
    'LBL_PRIMARY_ADDRESS_STATE' => '主となる都道府県:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '主となる住所 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '主となる住所 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => '主となる番地その他:',
    'LBL_PRIMARY_ADDRESS' => '主となる住所:',
    'LBL_PRODUCTS_TITLE' => '商品',
    'LBL_REPORTS_TO_ID' => '上司ID:',
    'LBL_REPORTS_TO' => '上司:',
    'LBL_RESOURCE_NAME' => 'リソース名',
    'LBL_SALUTATION' => '敬称:',
    'LBL_SAVE_CONTACT' => '取引先担当者保存',
    'LBL_SEARCH_FORM_TITLE' => '取引先担当者検索',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'チェックした取引先担当者を選択',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'チェックした取引先担当者を選択',
    'LBL_STATE' => '都道府県:', //For address fields
    'LBL_SYNC_CONTACT' => 'Outlook&reg;と同期:',
    'LBL_PROSPECT_LIST' => 'ターゲットリスト',
    'LBL_TITLE' => '職位:',
    'LNK_CONTACT_LIST' => '取引先担当者',
    'LNK_IMPORT_VCARD' => 'vCardから作成',
    'LNK_NEW_ACCOUNT' => '取引先作成',
    'LNK_NEW_APPOINTMENT' => 'アポイント作成',
    'LNK_NEW_CALL' => 'コール作成',
    'LNK_NEW_CASE' => 'ケース作成',
    'LNK_NEW_CONTACT' => '取引先担当者作成',
    'LNK_NEW_EMAIL' => 'Eメール作成・保存',
    'LNK_NEW_MEETING' => 'ミーティング作成',
    'LNK_NEW_NOTE' => 'ノート作成',
    'LNK_NEW_OPPORTUNITY' => '商談作成',
    'LNK_NEW_TASK' => 'タスク作成',
    'LNK_SELECT_ACCOUNT' => "取引先選択",
    'NTC_DELETE_CONFIRMATION' => '本当にこのレコードを削除して良いですか？',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => '商談の作成には取引先が必要です。\n 取引先を新しく作るか、既存の取引先を選択してください。',
    'NTC_REMOVE_CONFIRMATION' => '本当にこの取引先担当者をケースから削除して良いですか？',

    'LBL_LEADS_SUBPANEL_TITLE' => '潜在顧客',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商談',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ドキュメント',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => '主要な住所へコピー',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'その他の住所へコピー',

    'LBL_CASES_SUBPANEL_TITLE' => 'ケース',
    'LBL_BUGS_SUBPANEL_TITLE' => 'バグトラッカー',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'プロジェクト',
    'LBL_PROJECTS_RESOURCES' => 'プロジェクトリソース',
    'LBL_CAMPAIGNS' => 'キャンペーン',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'キャンペーン',
    'LBL_LIST_CITY' => '市区町村',
    'LBL_LIST_STATE' => '都道府県',
    'LBL_HOMEPAGE_TITLE' => '取引先担当者',
    'LBL_OPPORTUNITIES' => '商談',

    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡先',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'プロジェクト',
    'LNK_IMPORT_CONTACTS' => 'データインポート',

    // SNIP
    'LBL_USER_SYNC' => 'ユーザ同期',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'イベント',

    'LBL_AOP_CASE_UPDATES' => 'ケースのアップデート',
    'LBL_CREATE_PORTAL_USER' => 'ポータルユーザを作成',
    'LBL_ENABLE_PORTAL_USER' => 'Enable Portal User',
    'LBL_DISABLE_PORTAL_USER' => 'Disable Portal User',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Failed to create portal user',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Failed to enable portal user',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Failed to disable portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'ポータルユーザを作成',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Enabled portal user',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Disabled portal user',
    'LBL_NO_JOOMLA_URL' => 'No portal URL specified',
    'LBL_PORTAL_USER_TYPE' => 'ポータルユーザータイプ',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Account Disabled',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Account ID',
   
    'LBL_ERROR_NO_PORTAL_SELECTED' => 'There isn\'t any portal selected', // escaped single quotes required. PR 5426
    'LBL_PLEASE_UPDATE_DEPRECATED_PORTAL_ERROR' => 'More than one portal URLs are set but multiple portal is not supported, please update portal component on site: ',
    'LBL_PLEASE_UPDATE_DEPRECATED_PORTAL_WARNING' => 'Portal component is deprecated, please update portal component on site: ',

    'LBL_INVALID_USER_DATA' => 'Trying to create a portal user without name and/or any email address. Please check the contact details',
    'LBL_NO_RELATED_JACCOUNT' => 'Trying to disable a CRM User without related Joomla Portal Account',
    'LBL_UNABLE_READ_PORTAL_VERSION' => 'Unable to read AOP version from portal', // PR 5426
 
    'LBL_AOS_CONTRACTS' => '契約',
    'LBL_AOS_INVOICES' => '請求',
    'LBL_AOS_QUOTES' => '見積',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',
    'LBL_LANGUAGE' => '言語', // PR 5721
);