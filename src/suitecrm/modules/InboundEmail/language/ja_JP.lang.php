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


    'LBL_RE' => 'RE:',

    'ERR_BAD_LOGIN_PASSWORD' => 'ログインIDかパスワードが不正です',
    'ERR_INI_ZLIB' => 'Zlibコンプレッションを一時的に無効にできませんでした。設定テストが失敗する可能性があります。',
    'ERR_NO_IMAP' => 'IMAPライブラリが見つかりませんでした。インバウンドメールを継続する前に解決してください。',
    'ERR_NO_OPTS_SAVED' => 'あなたのインバウンドメールアカウントに最適な条件は一つも保存されませんでした。設定を見直してください。',
    'ERR_TEST_MAILBOX' => '設定を確認して再試行してください。',

    'LBL_ASSIGN_TO_USER' => 'ユーザにアサイン',
    'LBL_AUTOREPLY' => '自動返信テンプレート',
    'LBL_AUTOREPLY_HELP' => '自動返信オプションを選択することによって、メールの送信者に対し、メールを受信したことを通知することができます。',
    'LBL_BASIC' => '基本設定',
    'LBL_CASE_MACRO' => 'ケースマクロ',
    'LBL_CASE_MACRO_DESC' => '受信したメールをケースに関連付けるためのマクロを設定してください。',
    'LBL_CASE_MACRO_DESC2' => '任意の値を設定できますが、<b>\\"%1\\"</b>は残してください。',
    'LBL_CLOSE_POPUP' => 'ウィンドウを閉じる',
    'LBL_CREATE_TEMPLATE' => '作成',
    'LBL_DELETE_SEEN' => '受信したメールをメールサーバから削除',
    'LBL_EDIT_TEMPLATE' => '編集',
    'LBL_EMAIL_OPTIONS' => '電子メール処理オプション',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Bounce Handling Options',
    'LBL_FILTER_DOMAIN_DESC' => 'このドメインに自動返信を送信しない。',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Select to automatically create email records in SuiteCRM for all incoming emails.',
    'LBL_FILTER_DOMAIN' => '以下のドメインに自動送信しない',
    'LBL_FIND_SSL_WARN' => '<br>SSLのテストには時間がかかる場合があります。しばらくお待ち下さい。',
    'LBL_FROM_ADDR' => 'From（アドレス）',
    'LBL_FROM_ADDR_DESC' => 'The email address provided here might not appear in the "From" address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.',
    'LBL_FROM_NAME' => 'From（名前）',
    'LBL_GROUP_QUEUE' => 'グループにアサイン',
    'LBL_HOME' => 'ホーム',
    'LBL_LIST_MAILBOX_TYPE' => '受信箱用途',
    'LBL_LIST_NAME' => '名前:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'グループ/個人',
    'LBL_LIST_SERVER_URL' => 'メールサーバ',
    'LBL_LIST_STATUS' => 'ステータス:',
    'LBL_LOGIN' => 'ユーザ名',
    'LBL_MAILBOX_DEFAULT' => '受信箱',
    'LBL_MAILBOX_SSL' => 'SSL利用',
    'LBL_MAILBOX_TYPE' => '可能なアクション',
    'LBL_DISTRIBUTION_METHOD' => '配布方式',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'ケース返信テンプレートの作成',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => '自動返信オプションを選択することによって、メールの送信者に対し、ケースが作成されたことを通知することができます。電子メールの件名欄には、ケースマクロに応じて生成されたケース番号が付加されます。この返信は、メールが最初に送信されたときにのみ送付されます。',
    'LBL_MAILBOX' => '監視フォルダ',
    'LBL_TRASH_FOLDER' => 'ごみ箱',
    'LBL_SENT_FOLDER' => '送信済みフォルダ',
    'LBL_SELECT' => '選択',
    'LBL_MARK_READ_NO' => '受信後に削除フラグを立てる',
    'LBL_MARK_READ_YES' => '受信後にサーバにメールを保存',
    'LBL_MARK_READ' => 'メールをサーバに保存',
    'LBL_MAX_AUTO_REPLIES' => '自動応答の数',
    'LBL_MAX_AUTO_REPLIES_DESC' => '24時間で行う自動応答の最大数をセットしてください。',
    'LBL_PERSONAL_MODULE_NAME' => '個人',
    'LBL_CREATE_CASE' => 'メールからケースを作成',
    'LBL_CREATE_CASE_HELP' => 'Select to automatically create case records in SuiteCRM from incoming emails.',
    'LBL_MODULE_NAME' => 'インバウンド電子メール設定',
    'LBL_BOUNCE_MODULE_NAME' => 'バウンス処理用受信箱',
    'LBL_MODULE_TITLE' => 'インバウンドメール',
    'LBL_NAME' => '名前',
    'LBL_NONE' => 'なし',
    'LBL_ONLY_SINCE_NO' => 'いいえ　メールサーバのすべての電子メールをチェック',
    'LBL_ONLY_SINCE_YES' => 'はい',
    'LBL_PASSWORD' => 'パスワード',
    'LBL_POP3_SUCCESS' => 'POP3の接続テストに成功しました。',
    'LBL_POPUP_TITLE' => '設定のテスト',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => '購読するフォルダの選択',
    'LBL_SELECT_TRASH_FOLDERS' => 'ごみ箱の選択',
    'LBL_SELECT_SENT_FOLDERS' => '送信済みフォルダの選択',
    'LBL_DELETED_FOLDERS_LIST' => '次のフォルダー %s は存在しないかサーバで削除されました。',
    'LBL_PORT' => 'メールサーバのポート',
    'LBL_REPLY_TO_NAME' => '返信先(\\"Reply-To\\")の名前',
    'LBL_REPLY_TO_ADDR' => '返信先(\\"Reply-To\\")のアドレス',
    'LBL_SAME_AS_ABOVE' => '名前/メールから利用',
    'LBL_SERVER_OPTIONS' => 'メールサーバオプション',
    'LBL_SERVER_TYPE' => 'メールサーバプロトコル',
    'LBL_SERVER_URL' => '受信メールサーバ',
    'LBL_SSL_DESC' => 'メールサーバがSSLをサポートする場合、SSLを利用してメールを受信します。',
    'LBL_ASSIGN_TO_TEAM_DESC' => '選択されたチームは電子メールアカウントへアクセスできます。グループフォルダを選択すると、グループフォルダのアサイン先チームは選択したチームに上書きされます。',
    'LBL_SSL' => 'SSL利用',
    'LBL_STATUS' => 'ステータス',
    'LBL_SYSTEM_DEFAULT' => 'システムデフォルト',
    'LBL_TEST_BUTTON_TITLE' => 'テスト',
    'LBL_TEST_SETTINGS' => '設定のテスト',
    'LBL_TEST_SUCCESSFUL' => '接続に成功しました。',
    'LBL_TEST_WAIT_MESSAGE' => 'しばらくお待ちください...',
    'LBL_WARN_IMAP_TITLE' => 'IMAP警告',
    'LBL_WARN_IMAP' => '警告一覧:',
    'LBL_WARN_NO_IMAP' => 'このシステムはPHPモジュールにIMAP c-clientライブラリ（--with-imap=/path/to/imap_c-client_library）が入っていません。この問題を解決するには管理者に連絡してください。',

    'LNK_LIST_CREATE_NEW_GROUP' => 'グループメールアカウントの作成',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'バウンス処理用アカウントの作成',
    'LNK_LIST_MAILBOXES' => 'すべてのメールアカウント',
    'LNK_LIST_SCHEDULER' => 'スケジューラー',
    'LNK_SEED_QUEUES' => 'チームからのシードキュー',
    'LBL_GROUPFOLDER_ID' => 'グループフォルダID',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'ユーザがメールを送信する際にFrom名とアドレスをReply Toに利用することを許可する。',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'このオプションが選択された場合、このグループアカウントに関連付けられたFrom名とFromアドレスは送信元の選択リストに表示されます。',
    'LBL_STATUS_ACTIVE' => 'アクティブ',
    'LBL_STATUS_INACTIVE' => '非アクティブ',
    'LBL_IS_PERSONAL' => '個人',
    'LBL_IS_GROUP' => 'グループ',
    'LBL_ENABLE_AUTO_IMPORT' => '電子メールを自動的にインポート',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => '注意：自動的にインポートする設定を変更しようとしています。設定の変更によりデータが失われる可能性があります。',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => '注意：ケースを自動的に作成する場合は自動インポートが有効に設定されている必要があります。',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Drafts',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Eメール送信済み',
    'LBL_LIST_TITLE_MY_ARCHIVES' => '電子メール',
    'LNK_MY_DRAFTS' => 'Drafts',
    'LNK_MY_INBOX' => '受信メール',
    'LNK_VIEW_MY_INBOX' => 'View Email',
    'LNK_QUICK_REPLY' => '返信',
    'LNK_SENT_EMAIL_LIST' => '送信済み電子メール',
    'LBL_EDIT_LAYOUT' => 'レイアウト編集' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => '更新者',
    'LBL_SERVICE' => 'サービス',
    'LBL_STORED_OPTIONS' => 'Stored Options',
    'LBL_GROUP_ID' => 'Group ID',
    'LBL_REPLY_ASSIGNING_BEHAVIOR' => 'Assign Replies To', // PR 6009
    'LBL_REPLY_ASSIGNING_BEHAVIOR_HELP' => 'When an incoming email is a reply to an email sent from SuiteCRM, who does the reply get assigned to:<br><br><b>Do Nothing:</b> Default Behavior. The email is assigned to no one.<br><br><b>Replied to Email Owner:</b> The email is assigned to the owner of the replied to email, or the last email sent from SuiteCRM in the thread.<br><br><b>Associated Record Owner:</b> The email is assigned to the owner of the record that the replied to email, or the last email sent from SuiteCRM in the thread, is related to.', // PR 6009

    'LBL_CREATE_CONTACT' => 'Create Contact from Email', // PR 5721
    'LBL_CREATE_CONTACT_HELP' => 'Select to automatically create a contact record in SuiteCRM from incoming emails.', // PR 5721
    'LBL_CONTACT_DEFAULT_LANGUAGE' => 'Default Contact Language', // PR 5721
    'LBL_FILL_CONTACT_NAME' => 'Fill Contact\'s Name', // PR 5721 - Escaped required
    'LBL_FILL_CONTACT_NAME_HELP' => 'Select to automatically fill the first name and last name of the new contact created, from incoming emails.', // PR 5721
    'LBL_CONTACT_DEFAULT_SOURCE' => 'New Contact Source', // PR 5721
    'LBL_NEW_CASE_STATUS' => 'Status for the Created Case', // PR 5721
    'LBL_NEW_CASE_PRIORITY' => 'Priority for the Created Case', // PR 5721
    'LBL_NEW_CASE_TYPE' => 'Type for the Created Case', // PR 5721
);