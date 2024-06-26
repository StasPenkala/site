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
define( 'DB_NAME', 'Stassss_SQL' );

/** Database username */
define( 'DB_USER', 'Stassss_userok' );

/** Database password */
define( 'DB_PASSWORD', '27072007Stas' );

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
define( 'AUTH_KEY',         'a#Uib>^2I?6s2Pw=N(`$n60o%RW}B$7vAOTFv :#YwV#7#Y]Zal~qLE qu@CQK=5' );
define( 'SECURE_AUTH_KEY',  'L.V|#1W{J=t8G^6nB~dA$T#{!2@O. F6Te<3h:<R7_mK1bvXA8iBZ_OG |9{PlCE' );
define( 'LOGGED_IN_KEY',    'ymV(bqZ%z@}pXaZGNx<%9&#p,O/RrUhqpMm]0G6si{vT[wi%H}EZA~ZAamNg~`xL' );
define( 'NONCE_KEY',        '_a7(Q0+, `Zb_-HzBJ^_U*L1aiVAh{H>hBo&DWV.6pLL=W/Ca=l6WWn#!yksuln@' );
define( 'AUTH_SALT',        '[,#i{+:Gbt(#8>Z5XWOi?oj_p;O|3!)QMZsiEw*|KH)T,#t1{v$,Ky[X`hAE`_M-' );
define( 'SECURE_AUTH_SALT', '|p9) NEbZa@i{1kw%/n~t`8eDK,_U]-cQ8o9EykS&DbF=>N,z@^{b~ouN5-kbTK&' );
define( 'LOGGED_IN_SALT',   'Y,Jx2yIyey{</<qc>Q_}DPux+#H4&2>oZZEhqfnCsz!}p=G6xp%APUq#lQjkT$nD' );
define( 'NONCE_SALT',       'M}!/3vFLf4&I@hDI9F<qCP3Ll pgX_}xPoo}}T*.>it*;gWncn@j,ur5qUyF?FcZ' );

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
