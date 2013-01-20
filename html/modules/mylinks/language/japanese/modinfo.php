<?php
// Module Info

// The name of this module
define("_MI_MYLINKS_NAME","リンク集");

// A brief description of this module
define("_MI_MYLINKS_DESC","ユーザが自由にリンク情報の登録／修正／評価を行えるセクションを作成します。");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYLINKS_BNAME1","新着リンク");
define("_MI_MYLINKS_BNAME2","高評価リンク");

// Sub menu titles
define("_MI_MYLINKS_SMNAME1","登録する");
define("_MI_MYLINKS_SMNAME2","人気リンク");
define("_MI_MYLINKS_SMNAME3","高評価リンク");

define("_MI_MYLINKS_ADMENU2","リンク情報の追加 / 編集");
define("_MI_MYLINKS_ADMENU3","新規投稿リンク");
define("_MI_MYLINKS_ADMENU4","リンク切れ報告");
define("_MI_MYLINKS_ADMENU5","修正リンク情報");

// Title of config items
define('_MI_MYLINKS_POPULAR','「人気リンク」になるためのヒット数');
define('_MI_MYLINKS_NEWLINKS','トップページの「新着リンク」に表示する件数');
define('_MI_MYLINKS_PERPAGE','１ページ毎に表示するリンクの件数');
define('_MI_MYLINKS_USESHOTS','スクリーンショットを使用する');
define('_MI_MYLINKS_USEFRAMES','フレームを使用する');
define('_MI_MYLINKS_SHOTWIDTH','スクリーンショットの画像幅');
define('_MI_MYLINKS_ANONPOST','匿名ユーザによるリンクの投稿を許可する');
define('_MI_MYLINKS_AUTOAPPROVE','管理者の介在しない新規リンクの自動承認');

// Description of each config items
define('_MI_MYLINKS_POPULARDSC', '「人気！」アイコンが表示されるためのヒット数を指定してください。');
define('_MI_MYLINKS_NEWLINKSDSC', 'トップページの「新着リンク」ブロックに表示する最大件数を指定してください。');
define('_MI_MYLINKS_PERPAGEDSC', 'リンク一覧表示で１ページあたりに表示する最大件数を指定してください。');
define('_MI_MYLINKS_USEFRAMEDSC', 'リンクページをフレーム内に表示するかどうか');
define('_MI_MYLINKS_USESHOTSDSC', 'リンク情報にスクリーンショット画像を表示する場合は「はい」を選択してください。');
define('_MI_MYLINKS_SHOTWIDTHDSC', 'スクリーンショット画像の横幅の最大値を指定してください。');
define('_MI_MYLINKS_AUTOAPPROVEDSC','管理者の承認操作なしに新規リンク登録の承認を行う場合は「はい」を選択してください。');

// Text for notifications

define('_MI_MYLINKS_GLOBAL_NOTIFY', 'モジュール全体');
define('_MI_MYLINKS_GLOBAL_NOTIFYDSC', 'リンク集モジュール全体における通知オプション');

define('_MI_MYLINKS_CATEGORY_NOTIFY', '表示中のカテゴリ');
define('_MI_MYLINKS_CATEGORY_NOTIFYDSC', '表示中のカテゴリに対する通知オプション');

define('_MI_MYLINKS_LINK_NOTIFY', '表示中のリンク');
define('_MI_MYLINKS_LINK_NOTIFYDSC', '表示中のリンクに対する通知オプション');

define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFY', '新規カテゴリ');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP', '新規カテゴリが作成された場合に通知する');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC', '新規カテゴリが作成された場合に通知する');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : 新規カテゴリが作成されました（リンク集）');

define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFY', 'リンク修正のリクエスト');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP', 'リンク修正のリクエストがあった場合に通知する');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC', 'リンク修正のリクエストがあった場合に通知する');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: リンク修正のリクエストがありました');

define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFY', 'リンク切れ報告');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP', 'リンク切れの報告があった場合に通知する');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC', 'リンク切れの報告があった場合に通知する');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: リンク切れの報告がありました');

define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFY', '新規リンク投稿');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP', '新規リンクの投稿があった場合に通知する');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC', '新規リンクの投稿があった場合に通知する');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規リンクの投稿がありました');

define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFY', '新規リンク掲載');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYCAP', '新規リンクが掲載された場合に通知する');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYDSC', '新規リンクが掲載された場合に通知する');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規リンクが掲載されました');

define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFY', '新規リンク投稿（特定カテゴリ）');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYCAP', 'このカテゴリにおいて新規リンクが投稿された場合に通知する');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYDSC', 'このカテゴリにおいて新規リンクが投稿された場合に通知する');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規リンクの投稿がありました');

define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFY', '新規リンク掲載（特定カテゴリ）');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYCAP', 'このカテゴリにおいて新規リンクが掲載された場合に通知する');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYDSC', 'このカテゴリにおいて新規リンクが掲載された場合に通知する');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新規リンクが掲載されました');

define('_MI_MYLINKS_LINK_APPROVE_NOTIFY', 'リンク承認');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYCAP', 'このリンクが承認された場合に通知する');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYDSC', 'このリンクが承認された場合に通知する');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: リンクが承認されました');

?>