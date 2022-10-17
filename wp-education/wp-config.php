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
define( 'DB_NAME', 'wp_education' );

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

define( 'WP_MEMORY_LIMIT', '128M' );


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
define( 'AUTH_KEY',         ':9*PBQtR[=c6xyk%}/,e3KA^+2(*b9VGL#BrhFXo%bP,#NZb*dO,Y/b.[X(z1c&E' );
define( 'SECURE_AUTH_KEY',  'LeW{PzZ9q3`t3SZ*>U5H>1l>Jkm_EQ1*YGp#%AASq*({}mht9iAxaFF?c33/^z=G' );
define( 'LOGGED_IN_KEY',    'yv8$qA:[?:M,.|NnEZ;u-mTWr^R;C$y~ff]v0}bNXd{1oC8nC83HE_<*D/s2V@2d' );
define( 'NONCE_KEY',        'ka7 K9V`yKK1iK@(Lc7I3Z):Yrq,bKop7Z[/>g>AGEXGNn3@8}$Z`V!chm}UB6OG' );
define( 'AUTH_SALT',        ',<#Ng6/s*:n(zc=4#viPHZMfy<,H)/j?W,{Zq8wBNgo5uDkY{o2A|b6y2c5rXXYe' );
define( 'SECURE_AUTH_SALT', ';;hgU,H@m}}B/9%~>[`qE[kjMD!T~{kF.%`>8%]sVV<e]yq:8li~[~Zgx.E@w]Z`' );
define( 'LOGGED_IN_SALT',   'n`8#UWHtcUyW1^%l1IO|VjD!WH_ZR|0)G%}o`&1z{iGHk)/7;L!IYq:&.{x)R`Fo' );
define( 'NONCE_SALT',       'uDjtM3l%S*CU7F)LI+FI%[A6J98l^M_zDdbgj%D?Ut^^/OZ!$h9%P{:`R%<i,VC/' );

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
