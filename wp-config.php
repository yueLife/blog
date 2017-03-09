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
define('DB_NAME', 'reverie_blog');

/** MySQL数据库用户名 */
define('DB_USER', 'reverie_blog');

/** MySQL数据库密码 */
define('DB_PASSWORD', '4t59UM&jV@Rt^vr*');

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
define('AUTH_KEY',         'VEJ!+4eoDh7YGB?_B4TdH15~x:K5D+f5K!-?.@@J1DL%Ete!I%e,N79ep2^9y;jS');
define('SECURE_AUTH_KEY',  'G0U[K}q{-!--LlGy!v&,9Il1L%6i7pt@ub K/8=`j_#T(jzRG_%_*)gLPT ]VhG+');
define('LOGGED_IN_KEY',    'm`rc~,`P{]4$_W S?pTz<v8!Q$bSz#f#=@, mw%+:$I^8Ep1QA2vw.(wO&zr4}A4');
define('NONCE_KEY',        'osR)8Lp&_GA/XMec&MFKt5Hn&BskQq s%1rO&aGa#N~y|p.oBO s0{qK|f>a{355');
define('AUTH_SALT',        'hVO>Khta vX^b`PZAw^rHhbh2P<PJ58w-6^Jq5.qW_7vp4{]@MPy/~xsMJ(ycD)1');
define('SECURE_AUTH_SALT', 'K)a4^Z ArNq!P(lw6kDxpcL?}k5s5T:a/1:3mF_QB-`oI2_N=2w^|r:F2`GhVQrq');
define('LOGGED_IN_SALT',   '}AL:Qe7O0ewrYP*OV,B%f:=/7N;I$V{ w7h( 5CGwZ:%YRX9i%j46Xk~=Td;0xJ[');
define('NONCE_SALT',       'GTZe7ZJm(*Ut:$A78!4gE*b0)6/DMJE)Aqd`m1zymi*f6VqP2TH<1/G>+Z*egtc_');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'blog_';

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
