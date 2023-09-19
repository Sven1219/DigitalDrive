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
define( 'DB_NAME', 'DriveDigital' );

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
define( 'AUTH_KEY',         'T-s@C(oG:`#T?N/x@_7:M$ae*Pkc|1d5yAui6}7Ay=w-M4:61:=ryW2?olra*N$z' );
define( 'SECURE_AUTH_KEY',  'i}Ll#&RS&2-nMrJW,26e4kxv6(O2f7%4n;DRZ{|`8SAZ/rMPP96k(Ew~{bE><{3e' );
define( 'LOGGED_IN_KEY',    '*Gd^ 2$C6r8BQ<n@wgVI>94?I $=Ni7vDY&[9FRb#6(OmtrLnOI]_U~(^TRE??ql' );
define( 'NONCE_KEY',        '+?bk.$My)XXjG&q;QOi]th[TmLFXQx!W#cYdkQb!Dc>[8AF!MzF+4CL8Pc!.9-% ' );
define( 'AUTH_SALT',        'm8P]htfAI_W9-UyBEUZXdu[;hE-ZT|KW=bDRP.<HX^~Z5Fd+.H}F`_~zqk;S`k)v' );
define( 'SECURE_AUTH_SALT', '5lFu^(cD<8aL_8P|%?FKXplQ3fi5:G`DOgeQ8sm5EMZKg1mp|9A_*#u&D_`y&lL%' );
define( 'LOGGED_IN_SALT',   ':.oh.FJvPWL~PjEFo>sx%/*O,Xow:F]^hpoF;BJd.Gn{)}`]=/!;r1 eBj%+`8l^' );
define( 'NONCE_SALT',       '.83gr}DM>Qk6%W6m!v]2>ynU|G1TtdFfJctW&iXu*Qh|A(3LhOrA&l{GBvSh`E}]' );

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
