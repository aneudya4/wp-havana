<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'store_havana' );

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
define( 'AUTH_KEY',         '7+*N$+qo!^zLCz/^.D#mp ^Mbi%8{1|n_1R[+Q8%o/ N&~w:<{Q]ybyVWp.E#$yW' );
define( 'SECURE_AUTH_KEY',  '=wy`/,?[$98zMTp=ip8$$FuLXxp@z8(B7|I0s/^R,VCLP)#pBn~~Y@(xeKVO1>j(' );
define( 'LOGGED_IN_KEY',    '>w?#HF,&q[rX8Wu;xS2@zDqyv])mO{=x/~QDyV4:Y?iB0|4gp-55-DkPvl8g_ _#' );
define( 'NONCE_KEY',        '0KPDD%-V_^W[<@mT>hy]aa9X3y*P?1#i)RN<)?h+-X/a;YEuX,,?K*n>_3%#f-Sg' );
define( 'AUTH_SALT',        '!O7!9WI?E}kF+A;5rRa9&n})RBHg+@U(9+0DSdd@:5KB. /(`~N/&$fX3|&vkPW5' );
define( 'SECURE_AUTH_SALT', '**2XLz=n)0KKZym=9U!`&k<(D:wH1fGt{%6*x*L8@fn%?$;n0DP{_&V),kBK7|S/' );
define( 'LOGGED_IN_SALT',   ')<0o.uq.Q{SRfOP+=Oa0C*G^?CkVHf3=XJ[#qdGM/n~-@`Qu31b@5ZwA1Zo74`v9' );
define( 'NONCE_SALT',       '5TwbwfZ6ez~+U5=@Xm:ldo{=*n.5#O]S)fAb/3QHp?d3EneOuRu&GQw#AS.Dg hu' );

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
