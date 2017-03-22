<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'dummy');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'dummy');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'dummy');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A;+?o|m`r28GfPrv+WYJxaO%h]g^2?q5M0/~R,l.:x!!bg[bUk,1;^]<Gwy5ny;7');
define('SECURE_AUTH_KEY',  '3ObOrm|l8OiLMl30PtbgS?,}w[ym+nldE&k8^w:b7V(^:{yJ?MxGR,[G!N6l,QT0');
define('LOGGED_IN_KEY',    'ohDzXSozf8Ay@I3grXa`_M2ba#Q)CE=5;aF;X74aR-uqC`u4H4-U.=OL)S-eA[,`');
define('NONCE_KEY',        ';%X?v@)|aRosE@_-|!?qf,_+kHF[0/1R?Oe9[@v]}2O$= Lnx|?2gQ(VSNpd1op.');
define('AUTH_SALT',        'JVI#L@M|R6RO&ty MGOo%bNZvA03#nrSik/|I6+y/4U32BO1].D9)A)n.qqIKI6/');
define('SECURE_AUTH_SALT', '*6E^7A9N-S@QHcpKN@#@y4He|0 }%YLzAf-s^!b+V%QG7*W%(8,.MO[%8B1My==f');
define('LOGGED_IN_SALT',   '1iDXZoXD;+-PW&-3D 1FP925^EjL[57euF@X0,(6E(v*I:bd8=;;vnZ8<.)&#lft');
define('NONCE_SALT',       ')+LJ+zt(*NW/;m*3[4fPvA(Rv25wva(PTxg+,ul^5*>lM(A<hJ_SvRU;|27ovHVH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ssp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */

$local_path = '10.1.10.96/south-street-partners';
// $_SERVER['SERVER_NAME']

if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $local_path . '/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $local_path . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $local_path . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
