<?php
/**
 * @package ochasite
 * Setup the WordPress core custom header feature.
 *
 * @uses ochasite_header_style()
 */
/**
 * header customise
 */
 
$custom_header_args = array(
	// デフォルトで表示するヘッダー画像(画像のURLを入力)
	'default-image' => get_template_directory_uri() . '/images/header-bg.jpg',
	// ヘッダー画像の横幅
	'width' => 900,
	// ヘッダー画像の縦幅
	'height' => 220,
	// ヘッダー画像の横幅を自由に切り取れるかどうか(trueもしくはfalse)
	'flex-width' => false,
	// ヘッダー画像の縦幅を自由に切り取れるかどうか(trueもしくはfalse)
	'flex-height' => false,
	// ヘッダーテキストを表示するかどうかを指定する機能の使うかどうか(trueもしくはfalse)
	'header-text' => false,
	// ヘッダーテキストのデフォルトの色
	'default-text-color' => 'fff',
	// 動画ヘッダーに対応するかどうか(trueもしくはfalse)
	'video' => false,
	// adminへの画像ファイルのアップロードを許可するか(trueもしくはfalse)
	'uploads' => false,
	// ヘッダー画像をランダムにローテーションするかどうか(trueもしくはfalse)
	'random-default' => true,
	// テーマのheadタグ内に呼び出したいコードが書かれた関数を指定(関数名)
	'wp-head-callback' => 'wphead_cb',
	// カスタムヘッダーページのheadタグ内に呼び出したいコードが書かれた関数を指定(関数名)
	'admin-head-callback' => 'adminhead_cb',
	// カスタムヘッダーページのプレビュー部分に表示したいコードが書かれた関数を指定(関数名)
	'admin-preview-callback' => 'adminpreview_cb',
);
add_theme_support( 'custom-header', $custom_header_args );


/**
 * header text color
 */

function wphead_cb() {
	echo '<style type="text/css">';
	echo '.p-header__ttl, .p-header__info { color: #'.get_header_textcolor().' }';
	echo '</style>';
}
 
