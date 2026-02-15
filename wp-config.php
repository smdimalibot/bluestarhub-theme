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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'hJvAy?4z}W?.=s5n%DC{U`tedhZf|Im>GOzy)fu#y>)qUboz8jS+Uv),B3aN/ wo' );
define( 'SECURE_AUTH_KEY',   '5]V}.4>pH#oreadm|8wAylvny!{V2eCkE0v>s%E{4&L+B_yyD&|*?{=?K=z?#Z3{' );
define( 'LOGGED_IN_KEY',     'f;Gbj_7{=v:/6]l&s`7VVpZjPT5o?j8Ka- &3Kn/o+P+W<X&$d8pw5Glrzd45o8f' );
define( 'NONCE_KEY',         'a8tIw1GbCYziG6Z/&(^{4J{mMK??W;6m](= eN9nc0oF?K_b#@.M_hNi0RPTyAT3' );
define( 'AUTH_SALT',         'Lgebh1+|@+e^H]6Yi*,$ahTNpR)<j4:kIpSQ#?c#9b%>fy;c8H> |`tiaAzDd2x1' );
define( 'SECURE_AUTH_SALT',  'd!@o@R4%G.Keb)Y/COV._(;KCK7eZAyhCpshot_wMtm_Dh_B|W;Z:s-((xyXII*L' );
define( 'LOGGED_IN_SALT',    'sa2p[,e/Ek#Bqs4VJcD_np<3dE/H;dCy/]?lG()|#:v%g@fnodkW4GCHD_D;D)[0' );
define( 'NONCE_SALT',        '~Qd@A.A<Y]OrLgnpYM)8?5rY*IIBh{J2XBT|LO%pVmq;-&[ug {v@la[(|%2FN,x' );
define( 'WP_CACHE_KEY_SALT', ',(j+;m~Q[koK0my1X-ZF- 2BNO0%H0fNLf_;fi|5eYQOVfz;&{lIkrz3l;KNKrsr' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
