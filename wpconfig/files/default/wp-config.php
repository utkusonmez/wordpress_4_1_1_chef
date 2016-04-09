<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
define('WP_REDIS_HOST', 'wordpress.uukthl.0001.euw1.cache.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.c6fq6gmcl8om.eu-west-1.rds.amazonaws.com:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://d2u25wdza9iz3r.cloudfront.net');
define('WP_SITEURL','http://d2u25wdza9iz3r.cloudfront.net');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S`Uz|n}7hCcqd{S+)^6c}~-f<DM+*[/$L18Qh?:8k,LmblSrZ(L-&xw]D^TAb9|`');
define('SECURE_AUTH_KEY',  'u=y25!&]Dp0fs_D|aaPE^|<-pdG@K2aIV@86r ]Y4h)$b%XX$D/d[5kpwnH~48b ');
define('LOGGED_IN_KEY',    'TD(OqSb^^$DJ*#<4s-v|aT#4JboUJt$!=h^C,/LQD9]eCqmo4r+ye_=-[3IjKb.}');
define('NONCE_KEY',        '7l,JYe)Px?{qxpenha:oprQq|^:U-sEE36E@S=pQ$@V+T3#Vv@*<)g_A8Lb2B~wX');
define('AUTH_SALT',        'CZZ8I%I_n|tI:|IGnj$%@_F;I/wZLq@]$@=<;h:MjLiS:I)@A}<H7kp56VBxhH5n');
define('SECURE_AUTH_SALT', 'l(SY$u-K^G^z2M`ZAX2|Uxkg&k_+V]|dBE4Zo7&LR[1nZ3~e#N E%&hnVhtQkS4k');
define('LOGGED_IN_SALT',   '-Tx!*YB=RzbU|3#cPUL]-(I2?1;6?&d}6c1Hm8m:hJUkcVx#3>FiCYK+hV/ uAIV');
define('NONCE_SALT',       'dLxx95NCl-^XK|mI7X]qB]4SaL75%Se<t<z<l1i(f(iSI~^n-=+Rat%-w%-bxNm{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
