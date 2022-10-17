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
define( 'DB_NAME', 'wp_jobcarear' );

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
define( 'AUTH_KEY',         'ZR _EdmS;}3?%nZ?zX%Pn.ny+,2wx#8g#I=DA%eJsF ; y@0AAb<koIz1pDnId9x' );
define( 'SECURE_AUTH_KEY',  'r+B#@bzgQL)ro(m395JMND@/=k?02aThc*FdBB77rPNgf7.hmJbM_702IJ`sE>MS' );
define( 'LOGGED_IN_KEY',    'N`K}Bl=f</m9/660.:(SXtWXw}g6#{ifSSlCP=S|?XPHrP5I6>X(7cdg,1g@LIt{' );
define( 'NONCE_KEY',        '>T,g5&<wsp=:fH}1XcmJ2STW0d2Nw+wVj|ob9*^12W,cG]il8$bqK:b#xX2VZU)/' );
define( 'AUTH_SALT',        'z?4.67Hnc/r9#13g9$>|Z^60RG&TtG72NsfkhVG-@:!FW^NNOP1Pl;UFyJE/ZV/`' );
define( 'SECURE_AUTH_SALT', 'pgo/|!,{id(;YN^ 58?1`=HJVK;Xo:recT&xCb*M(n4o9v S,1j9):365Z8;qxbv' );
define( 'LOGGED_IN_SALT',   '-(2sTE3RLqY4q5Z:~UtZWg:HWQ^c4-_Pc-Z*lsw!0P0XkxQI:.>,^A&%[YbHRO2i' );
define( 'NONCE_SALT',       '*:4Rl0dy-6Ldp&f[S~aIdD86bP=ega{oAJwyj=aPvF5f{>Y&vjH5#L){j.tzIb5*' );

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
