<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'user15_m4' );

/** データベースのユーザー名 */
define( 'DB_USER', 'user-db15' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'Mj8BnSCz' );

/** データベースのホスト名 */
define( 'DB_HOST', 'db.skilljapan.info' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uD{VQP3OgCKD);(_}hD?[&cMo.XI1Zvg^rUJh{g>2r--}*s1K7w5Vhk!n$UDQ5B(' );
define( 'SECURE_AUTH_KEY',  'RQJUQE5@}n]*&5RGYFii&G/hV/OitZ2JO3l>3U<ckC2I%.IoZ TgSo@!mT+4-dAL' );
define( 'LOGGED_IN_KEY',    ',OFemf%d=GITv?EUPM[q;+?.P!&fEkXWc:gzGRa-j-<h93>0W-`5Uslg5OS94o0X' );
define( 'NONCE_KEY',        'Zi*,tFG7xe){Ug&lf^ =moO.Ft6<I2J1cfI^Wn6;FuMA`[y+,kpAt6FdDW.|2[J-' );
define( 'AUTH_SALT',        '_a]h/KsV&1YHoPx6mT!*-_H7[$)0Rmj=Q1S2GPZV^?$O4V%L38vvx>QN=Y=VZHgY' );
define( 'SECURE_AUTH_SALT', '=aXN!]D>#??NH ~,l/VXKT[4aVD?D!c6}S{XL^GX6<A8pvJ=MX9Dql6W!/uh!+;+' );
define( 'LOGGED_IN_SALT',   'lpEMIE(>c%JnA^I`om9JB$(i?n6v0R3<#9S5f2b:MZTtSd?fICZY9?S6)uB(#Gf~' );
define( 'NONCE_SALT',       'vwqqVo+;1h(KyH:6y6_P )YI{Xy+CL9I3%6fwwXUr6WC@[1{KB@n-hxQ{|KAjL|s' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
