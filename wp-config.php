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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LA01747158-i49m6x' );

/** Database username */
define( 'DB_USER', 'LA01747158' );

/** Database password */
define( 'DB_PASSWORD', '07211919ryo' );

/** Database hostname */
define( 'DB_HOST', 'mysql139.phy.lolipop.lan' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '6j4!L6RkFV|_vl$}KB)rDULkAt0b+Tq$<:H>S$T-M`K&%Bs!7C)%7G:Qv#{PuKpF' );
define( 'SECURE_AUTH_KEY',   'N%EsMggLzc~IC=0+)cackA)]F32@$39J_Us%ukWw5]Z]f!vNG|1c0w`G+;V j,LP' );
define( 'LOGGED_IN_KEY',     '1sr@C-.}}PRUa|>CMeAX~$x:|d^[^eY4sXOX}@tKG3keAhK)K3nhV?2tg5%4k/n`' );
define( 'NONCE_KEY',         ')]SM?`Zd.}{iF/9UMFu!6lZ_PPjz~E5+p;oFxW_xCi1iRo[WWnE1L3K8f/}$td7z' );
define( 'AUTH_SALT',         '~u[z0S07_3_Por8XEMQpO9~;@~6=oIjPs;{K6]XHS?jzQf=P*=F{=?<u n{0GaQm' );
define( 'SECURE_AUTH_SALT',  'S*Pn3KQ7<K7E@*jyj5.e<G3)M@C={h}V+8Y%gPx*Nf;EC5rNQqN$dz]/fZQE_d]_' );
define( 'LOGGED_IN_SALT',    'a 3W5xcOg_KlD8]^I%8YPXdIV4pud/6),<JKj^F]~dvG+d[M5(*VIupk+S_`o4a%' );
define( 'NONCE_SALT',        'Z&:OKkH1-Bm`[rT#-(`)C7(iN@A6p`w3jT<h?(bC3tnxL3l0iga.L3XpZ0>xOCw2' );
define( 'WP_CACHE_KEY_SALT', 'X^2j`$S5<.t:L69ha+Q(7 9!d?jc:1t +rp&}l$0ll#4X?8FO+I(<K#iPOu1hk`M' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp20240721150954_';

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
