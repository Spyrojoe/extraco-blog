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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'extraco-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'UW?bF Z@J+]8=*R2v-Z>+:7KS-yHc<VU&mSAPz<6;|+#+c!XZZn<s!.la%7j`k2T');
define('SECURE_AUTH_KEY',  '|0+DP2+|^|&eN<U->Y|0fKd&p/_d-3_kPQxLsKXKArwHC@{nZdO+h?{~/#9^Y(wS');
define('LOGGED_IN_KEY',    'Sr`ZUkBk!&z3+:d+c-r*YA:?eJ}sJ6/zsR(4ToP/i#%j|,{Qftv,xV6Ousu_>, H');
define('NONCE_KEY',        ' Y/9rZ?:#2[:DJ&e;F5Mb|u>Kkz+|T1y;Ls5E3%S|Xpu^W}4=-=:h=(?ei.NWnQ+');
define('AUTH_SALT',        '~rz@x5i`3Q+d pO.L,6f$!!{4;&O5),@;Ey@+$DVL}6BC+]}+(%fG*l@>@2_WjNd');
define('SECURE_AUTH_SALT', 'z-=k#l_}lr^G$Id8f6TNfL~]y<+|T@(MS1$LQoL*m0lf)+lrjQ^|QAEgo@Dhi[,u');
define('LOGGED_IN_SALT',   '78v0p=mf[#p);vq%74;kW~eRXqo-ZCW=3={D[77ZjJ;E9zubVw>yYex2Qq]bB pw');
define('NONCE_SALT',       '{kXG;V/N4ak+xJ|sUQ]fy<`|-G^;_v27-(A|Q2Z_0WV-g@M^RaHWb[j)W_>``+9/');

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
