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
define('WP_HOME','http://wordpress-472997816.eu-west-1.elb.amazonaws.com');
define('WP_SITEURL','http://wordpress-472997816.eu-west-1.elb.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.c6fq6gmcl8om.eu-west-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{~S!]t+^w>JB>~-H##QKY78:<|KSTUR}H*G>gK+:[m:k$=3Ux3[6=Jkj^P5A>h2n');
define('SECURE_AUTH_KEY',  'T-`$5(043Y+d=O<O@/WZK_15D~o?a-vV$<WCoH]-4txKje?|wE!Wloq8j/M;tq{m');
define('LOGGED_IN_KEY',    'Vay2Owjf[J?Q+--i+Rr|N}W^]Hv~{gk%D7GMsT-|M!-9av P1jIs={F07xSwOqHO');
define('NONCE_KEY',        'b!z9w*^~zxk5 mUwWTGNQ5yoX_O-;QSb4N-.&AFv(v,~GP5lGX5+.+A{`v4NF{fw');
define('AUTH_SALT',        '(l/;#cT|:)> 88:qeen{>Z$^c)!8SMQQcQV9QmZY`|HBj_gc]%}CvEL{u2ly&AVn');
define('SECURE_AUTH_SALT', 'GxY& i@TR|qkg=R)3Hc>}vtWV%FGB1_fW]KpV6bt!JyOL0/1k&V2+ejQT4L*>w<.');
define('LOGGED_IN_SALT',   ',a%kbW rQ%+$4?p-8z-0i1|C[)O/L_f^`aXS!_XLI}~ -Y<>9QY`T^n{Q/+x#Qaf');
define('NONCE_SALT',       'V}X~2#=rseVPhtJn`#21r!7rsZ@ A,xAW)^b=X8ze}8Ke#4eW3=-2G~JMQ3mn+o0');

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
