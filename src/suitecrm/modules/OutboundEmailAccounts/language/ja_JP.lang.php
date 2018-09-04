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
    'LBL_LIST_FORM_TITLE' => 'Outbound Email Accounts List',
    'LBL_MODULE_NAME' => '送信メール アカウント',
    'LBL_MODULE_TITLE' => '送信メール アカウント',
    'LBL_HOMEPAGE_TITLE' => 'My Outbound Email Accounts',
    'LNK_NEW_RECORD' => 'Create Outbound Email Accounts',
    'LNK_LIST' => '送信メール アカウントを表示',
    'LBL_SEARCH_FORM_TITLE' => 'Search Outbound Email Accounts',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_NEW_FORM_TITLE' => 'New Outbound Email Accounts',
    'LBL_USERNAME' => 'ユーザ名',
    'LBL_PASSWORD' => 'パスワード',
    'LBL_SMTP_SERVERNAME' => 'SMTP Server Name',
    'LBL_SMTP_AUTH' => 'SMTP Auth',
    'LBL_SMTP_PORT' => 'SMTPポート',
    'LBL_SMTP_PROTOCOL' => 'SMTP Protocol',
    'LBL_EDITVIEW_PANEL1' => 'Account settings',
    'LBL_CHANGE_PASSWORD' => 'パスワード変更',
    'LBL_SEND_TEST_EMAIL' => 'テストメール送信',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'テストメールの送信に失敗しました。設定を確認してください。',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP認証を使用？',
    'LBL_MAIL_SMTPPASS' => 'SMTPパスワード:',
    'LBL_MAIL_SMTPPORT' => 'SMTPポート番号:',
    'LBL_MAIL_SMTPSERVER' => 'SMTPサーバ名:',
    'LBL_MAIL_SMTPUSER' => 'SMTPユーザ名:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTPサーバ設定',
    'LBL_CHOOSE_EMAIL_PROVIDER' => '電子メールプロバイダを選択:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo!メールパスワード:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo!メールID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmailパスワード:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail電子メールアドレス:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchangeパスワード:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchangeユーザ名:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchangeサーバポート:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchangeサーバ:',

    'LBL_TYPE' => 'タイプ',
    'LBL_MAIL_SENDTYPE' => 'Mail Send Type',
    'LBL_MAIL_SMTPSSL' => 'Mail SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => '"From" name',
    'LBL_SMTP_FROM_ADDR' => '"From" address',
);
