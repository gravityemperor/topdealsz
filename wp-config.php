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
define( 'DB_NAME', 'topdealsz_db' );

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
define( 'AUTH_KEY',         ']n*573Ruax(2l>3+~Ur9W+&6tz1(y~,,p,ZL3:spy8{%oB|G6l,h,4v5MSPpZ`&^' );
define( 'SECURE_AUTH_KEY',  'ybI!#,o6bIx%DxeEF],u5>Guq(=;z<)/2yi;pyEvc8AKVP7[h2r&SLsk_Aj{eT4~' );
define( 'LOGGED_IN_KEY',    'QEH{ZrhTDG+j(g~`& `mFjt:rp+pGUZ$LJa%}4qLGF-V}:3j2c(5[&EJH.t`iyKI' );
define( 'NONCE_KEY',        'N1<`Rt}Jn^x(0(/9c*UG!dQ6Hn=ftL4]ga:jJbT~mZb}?D~aRHa*([R,pGA!5^l:' );
define( 'AUTH_SALT',        '!,b1cX)W1c?/@e_X8UG#FmbV7dDUh_{9-Yu^]^DR4=]s@a~.h-^s=0Sw<0jL_`vx' );
define( 'SECURE_AUTH_SALT', '&A?,}QM4vi[EC1iz/^yzf{]:DSr_Ml: DcORL12OBULEYb%CzV]czx7K7-uLQMKF' );
define( 'LOGGED_IN_SALT',   'q&P6|!v-xhO%ogpU0Pa$=L.*t)q=vNv%dDlM%@f}[yZ6qJ4H)B?xU}MMm[M<Lc3Z' );
define( 'NONCE_SALT',       'g D.jZ$if$8lLe>[vm+qn!3ek,p,Xf6Sk`*nM&hR,I$>/Gi|+6V!,PQF8DfiCOh)' );

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
