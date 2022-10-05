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
define( 'DB_NAME', 'runbangla24' );

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
define( 'AUTH_KEY',         'tqeR>_Bx#T8%q8=e!7eY={!1*icO[jd[l@Ww+*,ZqZsPPn(L([^m/r7mX]((&ng}' );
define( 'SECURE_AUTH_KEY',  'Px`H`AaaG6pY*8$[iUZ<jSdDKwm;O~-U+Ln;TGPgtC<Mg#B`oW3L3;{#AuVC?hwU' );
define( 'LOGGED_IN_KEY',    '1$%tvw2#kUxIVl7)q;vsB}00b+MBTGSXCPTk>w{~DE1tE:u1-SgiOS8lp:[5kM6^' );
define( 'NONCE_KEY',        'Qs>4wY[!,bSOKm*(!_5@62aV#P$Q&^c7[*Fg]*WPCj3Y0|Mcf8?FBN(FPsvrotNu' );
define( 'AUTH_SALT',        'rFuPJA;DS5Q?[nbJC~IReZ6LqA=wwqKQB,9k#m,agQ9MQ5(%7&8RJ/[a)AloU_4u' );
define( 'SECURE_AUTH_SALT', '?AtV]PY.#f$,jtOOG%-5v[x6&T2sbr~nXLRC/8%gUE,d#WX{fZ,Q:xL_2M#tqkQt' );
define( 'LOGGED_IN_SALT',   'CT7~%.7BLWKV7C;}&Qt7Z ~aNm?>ZBl>R<ky})/T <Z*`kYRWy2dNK?=TT1cF2E&' );
define( 'NONCE_SALT',       '?ni5{1q=Z_oN$)WVa|5RtOH;@V4#($T8lV&Sqk$S-;_CDZy5egu<[2>>%J x=3oG' );

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
