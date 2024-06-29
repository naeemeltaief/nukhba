<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nukhba' );

/** Database username */
define( 'DB_USER', 'administrator' );

/** Database password */
define( 'DB_PASSWORD', 'iNaeem.131998' );

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
define( 'AUTH_KEY',         'm-DjenA(3VV5z*5X=+[h<E3M@ZG(RBQ-pgi(^+p?.jsmr0pnc+E3`}*h?5zeKKnf' );
define( 'SECURE_AUTH_KEY',  'soo^rkIB81$uy3Tx1OZ(h;XL>|8xTK1cp~H@m<,mE#$[Wm$x.eMV!rbQl2?%J*2/' );
define( 'LOGGED_IN_KEY',    'tq/c!8mR@1_Ab)u+Cz!#2mGRBsL&52D5}rU;4nwrDumR9Y]0Pc+sO7{_mb$(ySrJ' );
define( 'NONCE_KEY',        '};A]o`aa;!Fqsp+tXmP+79XR^{Ix5u9FJo/B0Q1BJOK/6@GkO<18dUwF1#_wJRag' );
define( 'AUTH_SALT',        '`(m9d>-0+O-f$r-7I[+c+VJ1tLjMnIkKQZn#:*GHo1?S[4#cR$n&Mb6)Vq|uk)S8' );
define( 'SECURE_AUTH_SALT', 'WqlZ249E%))|@:)Dr[rkTY]<vT`tnZ^|lO,qU1pQ9>,d1CYWkc^V~_sc7<w/!W<g' );
define( 'LOGGED_IN_SALT',   'K6R77Vz+fK=K72%JXj@b?P|M6cf_x8fO H:>{Fi0w$G9GJ[)v{&~R17dR[a!Xlgp' );
define( 'NONCE_SALT',       '{s7>@DlsO[Uv)(Ia|z%e~h>ettT  Bo@<m-&^xl!OKCPFgIhFNQHdhK!U38Q7|hj' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
