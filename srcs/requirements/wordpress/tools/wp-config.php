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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'eablak' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '/K47y:W3`!Aq@L*ZT(~t%&3F7$3N^!,1oy^9,*]dHp{{`c/HRuNEqqF02>38^I(k' );
define( 'SECURE_AUTH_KEY',  'H^%&sY,Pl-n]hL[S;Z*yrE2U]j#}Jp,fB~D+`(Z %.7*3Kty[@n:2|p8~&Fo%^!x' );
define( 'LOGGED_IN_KEY',    'rPo]m>skA$suE4*;e+*@mMPKi^0#EMh9t;_J+cQ%moAKDT5OY8X+6tHXf}e5{[|o' );
define( 'NONCE_KEY',        'e>LAZYix*0myveYUXAM *$1p%4X4NjeW40Dm]6Y&2H,trAytt)cx0Pkj{;6Oj0D#' );
define( 'AUTH_SALT',        'xXsFxJq,L+G5`}@x!BM!R58YG8,0<]KyjrBE1G6JIfU#Xje+tK;9F!%maO(/CxZa' );
define( 'SECURE_AUTH_SALT', 'L!E%Xn70c|%r(hoiaPz|(56 Z^~a{G!Qmq/[j2H9Z-LKFz_))*-rznxH5Z~%iV05' );
define( 'LOGGED_IN_SALT',   'b9fTD|;|Bjc_>}IHhlp03x4o0ygs3mQN_m9rqb.Nn%#w(8O <2cxHa;2F01c!gAv' );
define( 'NONCE_SALT',       '}*kYJ]uNK*2TTSR`Cx[I(z^v&>r-Il0{0!z^dT,>OXfBgXNP~b9g~Na7N:Os-40o' );

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