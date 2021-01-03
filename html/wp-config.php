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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress');
/** MySQL database username */
define( 'DB_USER', 'root');
/** MySQL database password */
define( 'DB_PASSWORD', 'password');
/** MySQL hostname */
define( 'DB_HOST', 'mysql');
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');
define('ALLOW_UNFILTERED_UPLOADS', true);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8d5ad5308996e2c11fb994986ef1c1466d86f52b');
define( 'SECURE_AUTH_KEY',  '1bbefb2103410314d83179c2c9b2506942c73b3b');
define( 'LOGGED_IN_KEY',    '263bcb309d48e1e21858046327c733d701a806dd');
define( 'NONCE_KEY',        'd4f073d6549923ac993ef5f0d8ac2ee41be761d2');
define( 'AUTH_SALT',        '65623ce3e4c1f54a2fa7a5d9ca1e19bc29c67d8d');
define( 'SECURE_AUTH_SALT', '1e1367a1bd31f42dbc31b37df29ec94e44eab119');
define( 'LOGGED_IN_SALT',   '0c270a2be066271ac3120bbab2fa87d7512245c3');
define( 'NONCE_SALT',       '66f00c6ea7577b9ad5321e4fcf35fe76581e5aef');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
