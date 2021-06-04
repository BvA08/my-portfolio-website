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
define( 'DB_NAME', 'wp_wwwveerkrachtiglevenfit' );

/** MySQL database username */
define( 'DB_USER', 'wp_wwwveerkrachtiglevenfit' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_wwwveerkrachtiglevenfit' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ht``~?dbqh>X c[PnkYhDA=A4fMhK>B!WS§]%,~byU8RvMx6N7-U!(j(_yaJ9gw=');
define('SECURE_AUTH_KEY',  'r5@8&O(3lz~DbR_=C$WcEHRQ-r!Osh0:HT2J.nQ0H5l5K_3c0PFSq@`CJya[2l?W');
define('LOGGED_IN_KEY',    '=]]9LFpN@7§vF4uWnLT.y.JlVYJ@c@YDQ`x?§3cy!ld3aTGIN>`EAsBsqmBuS((J');
define('NONCE_KEY',        'yFzS,z/k4TKTfYmDWGF[LboLzi4V§HrlmTZXbK<~X{Yxi,^m`l[$-k2GWgj|daUo');
define('AUTH_SALT',        '_Kw>F4q[M]v%]YAO@W|y(3<0y9piMiruRq66O;dp&6Z$d7rmt8VJU;oqF?Y_i@OA');
define('SECURE_AUTH_SALT', 'gaSZf]zZb+ZAgw%d13713|.eaeB`)I^N`edW&W GUOR`sUaWQN,@/U`PJ=9OFl >');
define('LOGGED_IN_SALT',   '`[XnY7bDx+l]k9@ufgk&G2.VF1ZRh{P^ITFS4OZJHZ-t No8{O5U{+-PP0!]ZDH<');
define('NONCE_SALT',       'g+z:-1ZhHuec~&b(R@5fh:45-~jnkd<07t~!H7UT4%DTr7,MJpY(G3^auB.SwvZ,');

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
