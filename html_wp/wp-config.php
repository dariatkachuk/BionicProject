<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'SC17WPDB');

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
define('AUTH_KEY',         '&G#&Afk u5TP(/|#6-+*oxO|3hm{~7h=_G1H*7`Al`. }Z)5P!0 }7fJs${P7<V.');
define('SECURE_AUTH_KEY',  '8516)vlA5[y=_~<ZfnIUG_$?YD+0u<z+HdxYDU3ysN<Qydy&9%=mA)wJl`*{CJ%&');
define('LOGGED_IN_KEY',    '|z~@,-k#SKLP S=@i.7ZxRZ80Bsm{0rOs,To)w![z^|%<*sQx+9;o4 i`<|[ B3R');
define('NONCE_KEY',        '0yel1q>l<)b_|Zx]RE:#Hx}7ED-K8W:$?3n1B_G7/qb:@_|No$)@eez(+dHjcLz9');
define('AUTH_SALT',        '&s(wHW1-G#2sZT)sNbn`1I(c19~XBF.~-a}4[C.W5Jq!ZWl3}e1+7588Ja?,c|NP');
define('SECURE_AUTH_SALT', '_O^/iB}W~hMY9^ozaR|s;66}[Ra9o% 2||k_3@Z1Ku^w7z-mb`Lu~#Sr%!2=e/#t');
define('LOGGED_IN_SALT',   'MoW|Z9jzyLb`^l0-.WaZ<KGL3f$>;Q3E@x{/_Ef[`%8cn6I{dY)j-<vcgq=/{E o');
define('NONCE_SALT',       '%P;&M7JC(FBpRJp=}FM?]v?$qlp69to[IIs6$-t)/k*8hj(A4-xcG%Qa6J$dc*k}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD','direct');

