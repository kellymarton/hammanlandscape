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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\Users\Kelly\Desktop\school\Interactivity\FinalWebsite\hlwp\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'hlwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '$>Vc5m}&1l&=>7GW@p!a?aM|x%LnTG:7W.jWm|xS&S%gZ,DUIu,A?(n(#UxF8)R]');
define('SECURE_AUTH_KEY',  '*V>H&t_y,{@dk0pC6(331?hj]1nl4eNx&cOMjO/ur4OjO&I+9mxC~)Z4#@UsI j;');
define('LOGGED_IN_KEY',    'Wxk QH&Hk9b{QWM[xsb*eLeDqO5n@[ ^Nz?4QH,lMMFDG#yp4hqWn*|X54Q?^o43');
define('NONCE_KEY',        '7Y$^3fH7Joz^!HacI&=I5-1B]eiJ45&) ;LPi.C|@Pj<>Hij)h1i}ZswMZ8ds_<?');
define('AUTH_SALT',        'Tw<NKZ40mGrALEP~,(j_FBMKJ2fc6Kp(@J%;W5z53d^xKV{>oE5E|@r`/A@ZY:)0');
define('SECURE_AUTH_SALT', 'x|&bkGdtu|myxf| -)q6>oPN{YCAy4Rh^~uQnFKA@.nc^o~{.a 0u#h/(TlBy5B ');
define('LOGGED_IN_SALT',   'r4N,;Opv$(*JuGT&F+n|;/P?xMV8U~f>.@T*9Eu$HOgq;R@u@ik/vgtiY8Q-W0#q');
define('NONCE_SALT',       '>f0_7jw#]B<~}-Ej#+P9w<:we50z zIahYHW@<|#9P{Qm+isdOI~?eCA~2Xu1zvW');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
