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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shub' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'tdk=W9-xk3tL]SRg3gncx/=H8[Ax-bn4mK{@n_N:(LQ[v0%*xN7orGYhDVvzX3)z' );
define( 'SECURE_AUTH_KEY',  '!)m1[?J8{h!zrjn<AfVgEck#w0xoX#Bcx5a}!A2XF0N5A(DU4q>1i2F aGs#zI:3' );
define( 'LOGGED_IN_KEY',    '>O0 ^^}>HL2)<Z.!$C=:+v!5gSPpK6(z^`uPHJot(`DJdAh_B&Q*Mn#~CD2RaVj|' );
define( 'NONCE_KEY',        '/V?):$YFWdQ+h<ZN -OLzVog9)y@w=?mC6j&z~8oy<2jZU^FPA98)(GeS5MO:_O*' );
define( 'AUTH_SALT',        '(Hu^Fbm`rxS#xyB+z$%[gGY)ycA%mx,RXS#oERssF` /a|oT -x@TA*N#Txj5#=y' );
define( 'SECURE_AUTH_SALT', '^GE@~-/J Yf&,.K]R9.fK5/O]@k!K|~q&T7YhEGP~Dk-7=|ho3NwsJ4+}KPR7vl}' );
define( 'LOGGED_IN_SALT',   '.vGC&sU6xT#^N7)nyypTDev;{g>P4:s-N=IcTQSQjK.3E#x}EuZd@CIu9&,i5I!h' );
define( 'NONCE_SALT',       ',V1u!1J_x3y!.K./dgPV^@I#(]%} 5B(-z)XC99d.$PE1JDI`s@-p*6 atdt2ygz' );

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
