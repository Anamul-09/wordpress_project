<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_project1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X|[6~SR&(_kln5=I/+jAU+OYuirXdt3^3;e*6n/pfP%eJp :uuq]v(>S(.]`bU 5');
define('SECURE_AUTH_KEY',  'kEK::?Zg)CL_.-r5Yr{uNFU/j5/ve8aFUvC$R]SFbz?ea0A|`?P_e6gj*eG~r1F1');
define('LOGGED_IN_KEY',    'Apt+XD`haYki/nJyC0bXrsEwuea)NSI{g-BKjhX-lx$I4?D^Ar,06OS,=5SHh/(,');
define('NONCE_KEY',        'MOzy*U$K_]IWp_YF;kHDrNdn06=xu(-a3t<1/jic;)m.d~LR%#`|CTRbwjp~X]4K');
define('AUTH_SALT',        '7t rh(:s9n|E1Qd-u2(La{}uWx6m2/+AjBV9R@tQ</`7lMaa#>o;:f}qu_V;g2H2');
define('SECURE_AUTH_SALT', '&>#3(jYkg5R}6?_j-%rfnY`szH *h79sox%}3voU5^2Kx|0Nd-WbL]6-&eu5%TCs');
define('LOGGED_IN_SALT',   '72Mist^4 tuHq&`JTMOG!<XxPj0>t{Qz$a`uC9/SB{;kO@BCk`Er)[g4$tHfqpbD');
define('NONCE_SALT',       'YNF>.|RVH]7EilE*N=`2>WA-Ds[Uq7Xb)LN%]VI)~%[PmJ$llj 5;FB^*XDX!%h_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
