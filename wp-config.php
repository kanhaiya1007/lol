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
define( 'DB_NAME', 'lol_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'P@DM)JMx=:q?AeHN_kGQG=XFL6N0z~?B;-hSwF*]yTKuUq%[+9rh U=dc$krWnN8' );
define( 'SECURE_AUTH_KEY',  '4+YIw@FHXj+G_FK+%tW>VWZ-hL6D+bwNoVc>)flLlyr:P[QS~zUrhscMdj[E!}m.' );
define( 'LOGGED_IN_KEY',    'Q(D`Ab~|ZMh;}RZ6{`#3}z@8|Nrw0.@w)u_45SP?1s]N*:Op57/P$z6lb)8~DF+o' );
define( 'NONCE_KEY',        '&4N.BSIpAux $iTB$O_h8wBsUo_PKj$5Lp9ln|i|z-$7ld`w-R[UdOW HbPQw0<s' );
define( 'AUTH_SALT',        '[an.0].<|CVybR6/4}Ke&zUQhjIq9*;S*lq$nG?Cfl?oZ8(JHEvF<6/3=>ah4U^:' );
define( 'SECURE_AUTH_SALT', 'qjIB,Gt`BoLVm!kXR^5b|m25:#fnKZ04XLv5r~J0? Y%y)%q&+_OXw!X%%rB|8A=' );
define( 'LOGGED_IN_SALT',   'I#5>:-4%XG.xR]{P/mij{@}(;d6<MzXh<cp:=f(u@v*2c#L).cs*D|ZzTn|i+J|~' );
define( 'NONCE_SALT',       '9#+$RDDwqi=]^/ArZZOD0 (.MS~0gn?=I6FP(KrO8&32_<H&8c[?N^U#$7ew:{I4' );

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
