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
define( 'DB_NAME', 'wp_project5' );

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
define( 'AUTH_KEY',         'dK#I/ LSL*G17XAr9L3^hiGY)f6|,@p_v>c7!PW(<H>&~^s4b]t@P!d^P#3VHw F' );
define( 'SECURE_AUTH_KEY',  '0E$8sJY#m)sZT;7PLv$bSA.[]5e6^^Xb}PTFu|[Q+cT(&y`X9v[%bx1+o@o%pW/<' );
define( 'LOGGED_IN_KEY',    '*(0!Z~.ww$t&/>N$?grM7li!OHEpsd;_$NR.Im{O}:I5JDIR88W 8bk$-uIFPlXo' );
define( 'NONCE_KEY',        'm]r= Kz 7c#fOng[7j=)L<kqr~)M833,5[TTuntl{BX%sBmc%?W|=T+8dMz,fpvU' );
define( 'AUTH_SALT',        'P!?-=`adQm^Ru$iKnzDIc7v@<8M0?!C9&~RXA0aCL]>y:rO=F&dP3YTmI<<{B+j`' );
define( 'SECURE_AUTH_SALT', 'L stDa/p_Fy2IkB*`M +sgES^|@Z]09,!!?-5xJ_q_DGFh`W;kU9M^5?LQ*$z2>o' );
define( 'LOGGED_IN_SALT',   '`H%* GF6f+u3;`L4{]#i%k,3fA+[+HRyeqrf;.Q%9FDM7%0`(kRY3eh5%4|l!zPn' );
define( 'NONCE_SALT',       'nEgX~k:z#I}ui*e:g:=4vCuf]K[U4>d(7S[S6s}.sLG};Z/xjJ1dn:2W;M]#0/>|' );

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
