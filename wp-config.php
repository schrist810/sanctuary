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
define('DB_NAME', 'sanctuary_db');

/** MySQL database username */
define('DB_USER', 'sanctuaryadmin');

/** MySQL database password */
define('DB_PASSWORD', 'mysanctuary');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '``_}r7VfHAklRX]aCxL-F-M0+i ;.1LNeXSBv<Su .??@8V*2ERy%4#}f@~f|2ES');
define('SECURE_AUTH_KEY',  'rt4]4,jVn`Gs+9I91&9*[96--oFqQ+@<2&G)d5m|Z:6|^0|S0<&bpvnMR=} RV*f');
define('LOGGED_IN_KEY',    'R9<U0BkZ6/,#DHp+B{[OzR)+3_*b0J16hY /2s:v|[pG0/TjN{Jv.~E,{?pOO(]?');
define('NONCE_KEY',        '= z+geP?{FnqQ+%l:!=EtG[2(-i8s`}RsZ%^pu&-$c<9w(*o2-YAVXhx)]-b4x5$');
define('AUTH_SALT',        'x* YEh^x:;[qRd|*f#^},JTKGW^t)]E-K_9Hl QBlD}|Jvb-[GY%@BUx5).,1yx-');
define('SECURE_AUTH_SALT', ']F|[H]CdFe:BZCE0@1.kIMMkky@rFwz[{TRH5m^1wG--6- l#|;vO4A>KrcNX+ZR');
define('LOGGED_IN_SALT',   '0#$qbBJ7;C?^A,;<Lb[(xSSspvc_O#Y|Mv8iG32aUZLD~oy*eJ7W;Aw9:`~+:bzT');
define('NONCE_SALT',       'mz|INXZd*%IQ2`Q:>F~}!&`u#7}RFt1-0x%:(PX+FXl!fi^9@Aj!.%(^t@i+:z+|');

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
