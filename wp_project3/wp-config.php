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
define( 'DB_NAME', 'wdpf51_project3' );

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
define( 'AUTH_KEY',         'w+~6wF+L+|{DBFd8w0p[shBY&]6$>STAo)*7F=q[~#P Ljq$P<>[7QfO<}h?}~>x' );
define( 'SECURE_AUTH_KEY',  'C*ik>;o_({d4{kOAi=cA=e,I]9[:Pv:d]cG`S`5YG&V:%GXEs7@~uBG;?b8WwSt6' );
define( 'LOGGED_IN_KEY',    '+^`</Gf>P5-5ZN?Z)fDNJ%OrgSw7),Ae39N#~%jg=M^`ca[RGN+}61DkXomH~Mgx' );
define( 'NONCE_KEY',        '3wVG/w/n+T_)`S6,svFiddntU%p&A_i@BkyV, 1aJZ=4~~(U0+Sx(W^H~8;#K|OE' );
define( 'AUTH_SALT',        '8iU5OYmC@O(pfz%6q(X7ykw/5L97cWHso6>E],#W 36|I~8T%7X@a `<gj-:bVs:' );
define( 'SECURE_AUTH_SALT', 'FEj<|:U5d|;If|fHqu[kN3{fPEkcCW.Vn4f|JwawQMn<f1>nP /ywIM#E[/ag47k' );
define( 'LOGGED_IN_SALT',   '4$9tY8bXy:j{+/QCU3u* 2aai6YjMkv>2x@M&b,;15#G A1ZPa/f?MO#Ig-qXsi>' );
define( 'NONCE_SALT',       'ePN)DtmnfghTMHXqS(tyz60Ug>6/,CMxlI)ysXtZ{gu];6 o=tw:hyp7:?62lK:=' );

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
define('WP_CONTENT_DIR',
 $_SERVER['DOCUMENT_ROOT'].'\anamul\wdpf51_WP\wp-content');

 define('WP_CONTENT_URL',
 'http://localhost/anamul/wdpf51_WP/wp-content');

 define('WP_PLUGIN_DIR',
 $_SERVER['DOCUMENT_ROOT'].'\anamul\wdpf51_WP\plugins');

 define('WP_PLUGIN_URL',
 'http://localhost/anamul/wdpf51_WP/plugins');


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
