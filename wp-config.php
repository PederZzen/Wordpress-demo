<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RClL+0-k1&zz.{[L0yQ2 y-zx6oAdq?}zICTG@#ZcbsA(jIh,m4S}/rRfyOgFO;o' );
define( 'SECURE_AUTH_KEY',  'g~Du<;2ws#BRgDKqSl!KWy@b9U+jS@o$aCw}}Xeo(K`T1r]-3c1mr)_t,ddv;N)E' );
define( 'LOGGED_IN_KEY',    '.WW|[4KX)g.u@VIyAn~EG3SHr0yl WtzH2i;9*Kpvr Ei5sb_gps`UFH@aO7^cy!' );
define( 'NONCE_KEY',        'qpZRx!L;G2EYyuNx`k:j;}V8MO4FhITCnXL10!7bOe35Uf)GBn@IcrGf*Xqb{f7o' );
define( 'AUTH_SALT',        'ssn uq>$jLv]@($ %9=o8IxV;GP{Oe|2d3@_=Lwvd8Pa^b~:~%Fw,;AC@jlJA%U(' );
define( 'SECURE_AUTH_SALT', '^v@tOXub7^j`oj$ct-rp6l~;(Karn3<$&YMHdr#0?MMkbQ4zl@(vECBho^B3Lcft' );
define( 'LOGGED_IN_SALT',   'J$:0W{LHIeZC4QUuJe|%&Fa;!Mt6*GO Bbfkp49qg9>2-.RJ><]5.(=Lan`jOP$h' );
define( 'NONCE_SALT',       'i+S%Ckp#6}[XdhS+5Afmvcx4#dz^MUeK{nKYuS7X~?*rx^Ylw^*XNAJHx?LQPhsO' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
