<?php

//
// CHECK THE FUNCTION IN THE BOTTOM OF THIS FILE (don't overwrite it to ja_utf8)
//

define('_MD_PAGES_NUM','件数');
define('_MD_PAGES_TOP','トップ');
define('_MD_PAGES_ALLCONTENTS','全コンテンツ');
define('_MD_PAGES_DELETEDCONTENTS','削除済コンテンツ');
define('_MD_PAGES_MENU','メニュー');
define('_MD_PAGES_CREATED','作成');
define('_MD_PAGES_MODIFIED','更新');
define('_MD_PAGES_EXPIRING','有効期限');
define('_MD_PAGES_BYTE','byte');
define('_MD_PAGES_HISTORY','履歴');
define('_MD_PAGES_DIFF2NOW','現在との差分');
define('_MD_PAGES_DIFFFROMPREV','前バージョンとの差分');
define('_MD_PAGES_REFERIT','参照する');
define('_MD_PAGES_DOWNLOADIT','ダウンロード');
define('_MD_PAGES_VIEWED','閲覧数');
define('_MD_PAGES_NEXT','次');
define('_MD_PAGES_PREV','前');
define('_MD_PAGES_CATEGORYINDEX','カテゴリートップ');
define('_MD_PAGES_NOSUBJECT','(no subject)');
define('_MD_PAGES_FMT_PUBLIC','公開');
define('_MD_PAGES_FMT_PRIVATE','非公開');
define('_MD_PAGES_FMT_PUBLICCOUNT','公開:%s件');
define('_MD_PAGES_FMT_PRIVATECOUNT','非公開:%s件');
define('_MD_PAGES_WAITINGRELEASE','公開待ち');
define('_MD_PAGES_EXPIRED','期限切れ');
define('_MD_PAGES_INVISIBLE','非表示');
define('_MD_PAGES_WAITINGAPPROVAL','承認待ち');
define('_MD_PAGES_WAITINGREGISTER','新規登録申請中');
define('_MD_PAGES_WAITINGUPDATE','変更申請中');
define('_MD_PAGES_REGISTERED_AUTOMATICALLY','自動登録');
define('_MD_PAGES_ONOFF','表示/非表示');

define('_MD_PAGES_CATEGORY','カテゴリー');
define('_MD_PAGES_CATEGORIES','カテゴリー');
define('_MD_PAGES_SUBCATEGORY','サブカテゴリー');
define('_MD_PAGES_SUBCATEGORIES','サブカテゴリー');
define('_MD_PAGES_CONTENT','コンテンツ');
define('_MD_PAGES_CONTENTS','コンテンツ');

define('_MD_PAGES_LINK_MAKECATEGORY','カテゴリー作成');
define('_MD_PAGES_LINK_MAKESUBCATEGORY','サブカテゴリー作成');
define('_MD_PAGES_LINK_MAKECONTENT','コンテンツ作成');
define('_MD_PAGES_LINK_EDITCATEGORY','カテゴリー編集');
define('_MD_PAGES_LINK_EDITCONTENT','コンテンツ編集');
define('_MD_PAGES_LINK_CATEGORYPERMISSIONS','カテゴリー権限設定');
define('_MD_PAGES_LINK_BATCHCONTENTS','コンテンツ一括管理');
define('_MD_PAGES_LINK_PUBLICCATEGORYINDEX','公開側カテゴリートップ');

define('_MD_PAGES_LINK_PRINTERFRIENDLY','プリンタ用画面');
define('_MD_PAGES_LINK_TELLAFRIEND','友達に伝える');
define('_MD_PAGES_FMT_TELLAFRIENDSUBJECT','%sで見つけた記事');
define('_MD_PAGES_FMT_TELLAFRIENDBODY',"興味深い記事を見つけました\n記事タイトル:%s");
define('_MD_PAGES_JUMPTOTOPOFPAGESBODY',"この記事の1行目に飛ぶ");
define('_MD_PAGES_MAILTOENCODING','Shift_JIS'); // don't define it for singlebyte
define('_MD_PAGES_CSVENCODING','Shift_JIS');

define('_MD_PAGES_ERR_SQL','SQLエラーが発生しました。行: ');
define('_MD_PAGES_ERR_DUPLICATEDVPATH','仮想パスが重複しています');
define('_MD_PAGES_ERR_PIDLOOP','親子関係でループが発生しています');

define('_MD_PAGES_MSG_UPDATED','更新しました');

define('_MD_PAGES_ERR_READCATEGORY','このカテゴリーの読み出し権限がありません');
define('_MD_PAGES_ERR_CREATECATEGORY','カテゴリー作成権限がありません');
define('_MD_PAGES_ERR_CATEGORYMANAGEMENT','カテゴリー管理権限がありません');
define('_MD_PAGES_ERR_READCONTENT','指定されたコンテンツは存在しません');
define('_MD_PAGES_ERR_CREATECONTENT','コンテンツ作成権限がありません');
define('_MD_PAGES_ERR_LOCKEDCONTENT','コンテンツがロックされています');
define('_MD_PAGES_ERR_EDITCONTENT','コンテンツ編集権限がありません');
define('_MD_PAGES_ERR_DELETECONTENT','コンテンツ削除権限がありません');
define('_MD_PAGES_ERR_PERMREADFULL','このコンテンツの全文を表示する権限がありません');
define('_MD_PAGES_ERR_LOGINTOREADFULL','このコンテンツの全文を表示するにはログインしてください');
define('_MD_PAGES_ERR_COMPILEERROR','このコンテンツはコンパイルエラー等の理由で本文処理できていません。再度編集してください');

define('_MD_PAGES_MSG_CATEGORYMADE','カテゴリーを作成しました');
define('_MD_PAGES_MSG_CATEGORYUPDATED','カテゴリーを更新しました');
define('_MD_PAGES_MSG_CATEGORYDELETED','カテゴリーを削除しました');
define('_MD_PAGES_MSG_CONTENTMADE','コンテンツを作成しました');
define('_MD_PAGES_MSG_CONTENTWAITINGREGISTER','新規コンテンツの登録申請を行いました');
define('_MD_PAGES_MSG_CONTENTUPDATED','コンテンツを更新しました');
define('_MD_PAGES_MSG_CONTENTWAITINGUPDATE','このコンテンツの変更申請を行いました');
define('_MD_PAGES_MSG_CONTENTDELETED','コンテンツを削除しました');
define('_MD_PAGES_MSG_CONTENTREJECTED','コンテンツの申請を却下しました');

define('_MD_PAGES_CATEGORYMANAGER','カテゴリーマネージャ');
define('_MD_PAGES_CONTENTMANAGER','コンテンツマネージャ');
define('_MD_PAGES_TH_VIRTUALPATH','仮想パス');
define('_MD_PAGES_TH_SUBJECT','表題');
define('_MD_PAGES_TH_SUBJECT_WAITING','申請中の表題');
define('_MD_PAGES_TH_HTMLHEADER','HTMLヘッダー');
define('_MD_PAGES_TH_HTMLHEADER_WAITING','申請中のHTMLヘッダー');
define('_MD_PAGES_TH_BODY','本文');
define('_MD_PAGES_TH_BODY_WAITING','申請中の本文');
define('_MD_PAGES_TH_FILTERS','本文フィルター');
define('_MD_PAGES_TH_TAGS','タグ');
define('_MD_PAGES_TH_TAGSDSC','複数のタグを指定する時はスペースで区切る');
define('_MD_PAGES_TH_WEIGHT','表示順');
define('_MD_PAGES_TH_CONTENTOPTIONS','オプション');
define('_MD_PAGES_LABEL_USECACHE','本文キャッシュ');
define('_MD_PAGES_NOTE_USECACHEDSC','※静的なコンテンツで速度が問題になりそうな時だけここをONにしてください。');
define('_MD_PAGES_LABEL_LOCKED','ロック（モデレータ・管理者以外による変更禁止）');
define('_MD_PAGES_LABEL_SPECIFY_DATETIME','日時を指定する');
define('_MD_PAGES_LABEL_VISIBLE','表示');
define('_MD_PAGES_LABEL_SHOWINNAVI','ページナビに表示する');
define('_MD_PAGES_LABEL_SHOWINMENU','メニューに表示する');
define('_MD_PAGES_LABEL_ALLOWCOMMENT','コメント可能');
define('_MD_PAGES_TH_CATEGORYTITLE','タイトル');
define('_MD_PAGES_TH_CATEGORYDESC','説明');
define('_MD_PAGES_TH_CATEGORYPARENT','親カテゴリー');
define('_MD_PAGES_TH_CATEGORYWEIGHT','表示順');
define('_MD_PAGES_TH_CATEGORYOPTIONS','オプション');
define('_MD_PAGES_CONTENTS_TOTAL','総記事数');
define('_MD_PAGES_SUBCATEGORIES_TOTAL','総サブカテゴリー数');
define('_MD_PAGES_SUBCATEGORY_COUNT','サブカテゴリー数');
define('_MD_PAGES_MSG_CONFIRMDELETECATEGORY','このカテゴリーに含まれるコンテンツもすべて削除されますがよろしいですか？');
define('_MD_PAGES_MSG_CONFIRMDELETECONTENT','コンテンツを削除してよろしいですか？');
define('_MD_PAGES_MSG_CONFIRMSAVEASCONTENT','コンテンツを複製してよろしいですか？');
//define('_MD_PAGES_MSG_GOTOPREFERENCE4EDITTOP','トップカテゴリーは特別なカテゴリーです。設定変更は管理画面の一般設定で行います');
define('_MD_PAGES_LABEL_HTMLHEADERONOFF','HTMLヘッダカスタマイズ部表示');
define('_MD_PAGES_LABEL_HTMLHEADERCONFIGALERT','(※コンテンツ毎のHTMLヘッダは一般設定によって禁止されています)');
define('_MD_PAGES_LABEL_INPUTHELPER','入力支援ON/OFF');
define('_MD_PAGES_BTN_SUBMITEDITING','編集内容を登録');
define('_MD_PAGES_BTN_SUBMITSAVEAS','別レコードとして保存');
define('_MD_PAGES_BTN_COPYFROMWAITING','申請データを承認する');
define('_MD_PAGES_MSG_CONFIRMCOPYFROMWAITING','申請データを承認します。よろしいですか？\n（このフォーム内での編集内容は破棄されます）');
define('_MD_PAGES_HOWTO_OVERRIDEOPTIONS','一般設定での設定値をこのカテゴリーだけ変更したい場合は、<br />(オプション名):(オプション値)<br />という形で、１行に１設定ずつ記述してください。<br />例）<br />show_breadcrumbs:1 <br /><br />変更可能なオプションと現在値は以下の通りです。');

// vote to content
define('_MD_PAGES_ERR_VOTEPERM','投票権がありません');
define('_MD_PAGES_ERR_VOTEINVALID','不正な投票です');
define('_MD_PAGES_MSG_VOTEDOUBLE','１記事に対して投票は１回限りです');
define('_MD_PAGES_MSG_VOTEACCEPTED','投票ありがとうございました');
define('_MD_PAGES_MSG_VOTEDISABLED','このカテゴリーでは投票機能は利用できません');
define('_MD_PAGES_VOTECOUNT','投票数');
define('_MD_PAGES_VOTEPOINTAVG','平均点');
define('_MD_PAGES_VOTEPOINTDSCBEST','役に立った');
define('_MD_PAGES_VOTEPOINTDSCWORST','役に立たなかった');

// query contents
define('_MD_PAGES_FMT_QUERYTAGTITLE','タグ: %s');
define('_MD_PAGES_FMT_QUERYTAGDESC','「%s」というタグを持つコンテンツの一覧');
define('_MD_PAGES_ERR_NOCONTENTMATCHED','該当するコンテンツはありません');

// filters
define('_MD_PAGES_FILTERS_EVALTITLE','phpコード');
define('_MD_PAGES_FILTERS_EVALDESC','eval()に渡してPHPコードとして解釈/実行されます');
define('_MD_PAGES_FILTERS_HTMLSPECIALCHARSTITLE','HTML特殊文字エスケープ');
define('_MD_PAGES_FILTERS_HTMLSPECIALCHARSDESC','明示的にHTMLとしての解釈を禁止したい時に有効にします。BBCode等の各種修飾処理と併用する時には必ず先頭に置いてください。');
define('_MD_PAGES_FILTERS_TEXTWIKITITLE','PEAR TextWiki <a href="http://wiki.ciaweb.net/yawiki/index.php?area=Text_Wiki&amp;page=SamplePage" target="_blank">サンプル</a>');
define('_MD_PAGES_FILTERS_TEXTWIKIDESC','TextWikiルールで整形されます');
define('_MD_PAGES_FILTERS_XOOPSTPLTITLE','Smarty(XoopsTpl)');
define('_MD_PAGES_FILTERS_XOOPSTPLDESC','Smartyテンプレートとして解釈されます');
define('_MD_PAGES_FILTERS_NL2BRTITLE','自動改行');
define('_MD_PAGES_FILTERS_NL2BRDESC','改行文字を&lt;br /&gt;に置き換えます');
define('_MD_PAGES_FILTERS_SMILEYTITLE','顔文字変換');
define('_MD_PAGES_FILTERS_SMILEYDESC',':-) などのスマイリーが画像に置き換わります');
define('_MD_PAGES_FILTERS_XCODETITLE','BBCode変換');
define('_MD_PAGES_FILTERS_XCODEDESC','自動リンクおよびBBCodeが有効になります');
define('_MD_PAGES_FILTERS_WRAPSTITLE','ページラップ ※仮想パスの中身が読み込まれ、本文は無視されます');
define('_MD_PAGES_FILTERS_WRAPSDESC','XOOPS_TRUST_PATH/wraps/(dirname)/下のファイルを読込みます。(wraps互換)');


// permissions
define('_MD_PAGES_PERMS_CAN_READ','閲覧権限');
define('_MD_PAGES_PERMS_CAN_READFULL','全文閲覧権限');
define('_MD_PAGES_PERMS_CAN_POST','投稿権限');
define('_MD_PAGES_PERMS_CAN_EDIT','編集権限');
define('_MD_PAGES_PERMS_CAN_DELETE','削除権限');
define('_MD_PAGES_PERMS_POST_AUTO_APPROVED','承認不要');
define('_MD_PAGES_PERMS_IS_MODERATOR','モデレータ');
define('_MD_PAGES_PERMS_CAN_MAKESUBCATEGORY','サブカテゴリー作成権限');


// LTR or RTL
if( defined( '_ADM_USE_RTL' ) ) {
	@define( '_ALIGN_START' , _ADM_USE_RTL ? 'right' : 'left' ) ;
	@define( '_ALIGN_END' , _ADM_USE_RTL ? 'left' : 'right' ) ;
} else {
	@define( '_ALIGN_START' , 'left' ) ; // change it right for RTL
	@define( '_ALIGN_END' , 'right' ) ;  // change it left for RTL
}


if( ! defined( 'FOR_XOOPS_LANG_CHECKER' ) && ! function_exists( 'pages_convert_encoding_to_ie' ) ) {
	if( function_exists( 'mb_convert_encoding' ) && function_exists( 'mb_internal_encoding' ) ) {
		function pages_convert_encoding_to_ie( $str , $from = 'auto' ) {
			return mb_convert_encoding( $str , "UTF-8" , mb_detect_encoding( $str , 'ASCII,JIS,UTF-8,EUC-JP,SJIS' ) ) ;
		}
	} else {
		function pages_convert_encoding_to_ie( $str ) {
			return $str ;
		}
	}
}

?>