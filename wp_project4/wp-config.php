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
define( 'DB_NAME', 'wp_project4' );

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
define( 'AUTH_KEY',         '2ottEoc}zR)1-aZ^55Yv+[pg j]5@!<TV-5Zy;OL-cNT]!T]-w,7KkS^c@+}imk1' );
define( 'SECURE_AUTH_KEY',  '6.sk,esqBlfbi%a%?e9JI~YM`JZ6%&87IdlQ!KY%Hvw5&^Y Dp8p<]:K3;)=#)&j' );
define( 'LOGGED_IN_KEY',    '/#0sN;T|oLt:/IP^!yvc^B3x)9oeruJwHz,7Q} mRPnH<&>Dz^HEPBQV>%^u%J}r' );
define( 'NONCE_KEY',        '|dB3YyiS:n%G+5TU-wm17O;4$4uv2d4R}VP0ff*o{HH{SJ&TV>_0S#*<pq%oqu~y' );
define( 'AUTH_SALT',        'lb{R=Y[x&MS!?LK4+&$HeEs(E4S)0.;)PSW=#piIi,y:igVX-xXRg9$qE5F#ta&o' );
define( 'SECURE_AUTH_SALT', 'o?V &{,-~mV*p:)@-C;&h@ag+Q*@gTcOVy+fihlbwH[I=KoPw+!&;c}PR^@_20gc' );
define( 'LOGGED_IN_SALT',   '.Dw`PKLRL2X=vv#<TMfnCKMU2n]94<MNe05=(ZNEDD^!|e59/QUf_o4Y.$Kf$^X5' );
define( 'NONCE_SALT',       'u(o[4-FZM{X8T0GVbTLn-pfr6vn#k (9~`l-Zt@~&hbsQ~)}3zx#lT>K(W${rnv8' );

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


define( 'WP_ALLOW_MULTISITE', true );

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/anamul/wdpf51_WP/wp_project4/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
