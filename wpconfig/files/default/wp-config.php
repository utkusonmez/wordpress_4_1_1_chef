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
define('WP_HOME','http://wordpress-lb-1008862846.eu-west-1.elb.amazonaws.com');
define('WP_SITEURL','http://wordpress-lb-1008862846.eu-west-1.elb.amazonaws.com');

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
define('AUTH_KEY',         'KO*9S%?9x#Kxf+E4!.b1H:>g0bg7>J0$a:L~!(U-.|#Nx!S}Ny^n*[^^EKW|]sQM');
define('SECURE_AUTH_KEY',  '`Sauhab&g]<~k>*zy6ys`p+*5x]Z=As%z[,Pa7FAyI|b_>igKl&dL6^+nLfnFOov');
define('LOGGED_IN_KEY',    'k-7O)NX%9z`7G[78?xU{Ihe{R;&{dE63>3Xsj`6]O]k:[Qa?v)XXo@4jbTianf*r');
define('NONCE_KEY',        'l.m=,?9X1fCV=]J=q2S&qk9|0O->Xs~z01h8n_1N|*2cboq_Zg?_&j:{w;w.K])z');
define('AUTH_SALT',        '%+|p1uU3^M[57f,|f@-G8g*t?BWf#p- qA+(SFV!tnVq}x<VH$c-G8H8FY_|:@$`');
define('SECURE_AUTH_SALT', 'rB6voLaDY=3/gD7nV62V1 ,A$4Nvg9k|J}@~G.21#vNdw.toCh=&YpvfJj$~(a5l');
define('LOGGED_IN_SALT',   't~<q+th[K>IKEyu|=lYAB)d[*j_.1@V+6? bG;9pQN{uE7HJ9C.NFVZ0|=ei;KVr');
define('NONCE_SALT',       'm @1*.74~e8/-<(q1LzHph3IN`HA|18lTTVK)dm`1#s1?Np0:H+8(8/SJ.?v{k:+');

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
