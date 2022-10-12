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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         '9$#QG%bM/Xs>7I_=Ws4oP(#0lJ7WwaPx&{q<4Y5C8(Z3=^|mhvVA7n~A,2|56?b?' );
define( 'SECURE_AUTH_KEY',  'b{RL1pTK8;_C1K5B&n8YW7V(M${t&D1=JyG:5LLSO2StTDF1Or(5DiYD|XuWe+9w' );
define( 'LOGGED_IN_KEY',    'eCj?a~=e<}7Fwh^f>nI)#ZMRmo),v}If(fe +3,?-sA6&q([IZ|*G]!%mM m?=G}' );
define( 'NONCE_KEY',        'ye?PA*M:Cs3SV1&9#Vmr.>vA*|4/RZM:xJu-Lx]XKT_YX{8d`w}=0kZ(6cJ6>gVA' );
define( 'AUTH_SALT',        'r&vebv28d^9p<+%5+%KTu H`*J<U{x+z<v,<w~L:oKUxJDL B)ddgbY%!Ws{+*1P' );
define( 'SECURE_AUTH_SALT', ';@x/6 ypu43d&.ymilZztKm>0@mo`MD?A|(Jb5{nhvopsn^f0xc0V*}!S)Bh2>?T' );
define( 'LOGGED_IN_SALT',   ' `-Ew JIN`I](-eP%XCnUx]{`@ePMfdv% }FAa-_EmO(?i1;T*JHY&_99>:39SR^' );
define( 'NONCE_SALT',       '1VRkz(f):xN1Gs2Rg|i,L9#*=<K`Q.A(OMS4$!i@LINU6u!LYK%10I8Orcs!)]S(' );

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


		// wordpress securing
// define('WP_CONTENT_DIR',
//  $_SERVER['DOCUMENT_ROOT'].'\anamul\wdpf51_WP\wp-content');

//  define('WP_CONTENT_URL',
//  'http://localhost/anamul/wdpf51_WP/wp_test/wp-content');


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';





 