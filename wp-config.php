<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'db_test');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+ m!F7Rln W;IlQl)jvz*$S=>K2eF7x=%!82DR^gU^/<A2&sOY]kjqfP6h.(`qPe');
define('SECURE_AUTH_KEY',  'Z~|BqSW*<LJW#c5h-}k#+m 9{j.8>}/uprf>+tm+2?(o[LUy1i7vuKw@p.>t>fd-');
define('LOGGED_IN_KEY',    '7M_a(CC3:/G|nO@MPL|o+y|J[F5WVoskyAk|I:zT%#F#XaW.|:*X#us-QT)<a:gz');
define('NONCE_KEY',        'vZ}|_/mb,k.p^%SA_K^125U)W;Mp .{]Z6DfM;{sd.g)8lar-)}ZZ>-h->=M^Li!');
define('AUTH_SALT',        ';d_.B:K.Lb[B)g4t|9$iOK:m12{}]@1~oMpPz$ORR+]csWgoqa&ff/>)1St-MOxk');
define('SECURE_AUTH_SALT', '1*P&K)x&S?g)+}%sR$0;MGDb w8XXj!GM#A45AKtW|+!`W!D8*1tt*=GO-7]nE%Q');
define('LOGGED_IN_SALT',   '=yz-fCfU(Qx;I|M {9Ah6,/#7PW/T$UG5v(.r#U@Qhxu6m~}Y/7Bp7x<23oS[<mG');
define('NONCE_SALT',       'Hv2c8lfrx( )UiBW*bvhtrw|!B&gK+)(l+!As2j>6k5^+-IPz<8}qE8,TZ<_>xnA');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
