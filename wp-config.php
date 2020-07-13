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
define( 'DB_NAME', 'alpzkie' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '4@P!s)mq7Uy<IU,>hViS-!OK[gDQ*%<(SKB+!}QfN:A*ws$GCs;58zbjQ*^MYmeg' );
define( 'SECURE_AUTH_KEY',  '`vu.A[N|Rp#)v>S!9tAS:6;P3(IgtI Goqds@^8T5=zM,Z.0INoSsNO;!y{{OPRF' );
define( 'LOGGED_IN_KEY',    '$i?b G:r9-cEWxNfO6CtXf~`2Rx(i+b/<t/zHst5z8l|@B9{ =Z1D}HpMw=Da}nT' );
define( 'NONCE_KEY',        'c%ii]=Tq *l}7+w33AEKqO4C.;qEge0>2~d3WNR*`Tx@xMTk_}IrymHHz}wQqYuc' );
define( 'AUTH_SALT',        'pmrC=2PWjGIYV]%Z4uAj+9T.x}ryp#yL@,Bx?b@bKM5=8z:+hS0B^G|g!3J1cpyZ' );
define( 'SECURE_AUTH_SALT', '^<e^tH^5w2(,SSj>R:1!Lz`8g0_2#Kr`CKL(>E$&%|y[`!e9rR6:X 1WpxT&1$Cd' );
define( 'LOGGED_IN_SALT',   'k&WlsjAl#DD 0t9fRQCpSvCUE_z{J[~7r{2[A`4{8]m3y-wbp}WI[0dW2:S4.EXY' );
define( 'NONCE_SALT',       'y:$@p?y$M]{_yv>7lKg&&00O>M@2RfnJD6u0I5~hl8hqtKZyy]]QqQ;b#`n$1/in' );

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
