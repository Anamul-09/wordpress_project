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
define( 'DB_NAME', 'wp_project2' );

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
define( 'AUTH_KEY',         'Bhcpo&N;GFIn9sz}b9l7M2(Cu9zr>jOEMcf=B]|a-}cWYP&/My.Hi(EjkWZvi+ln' );
define( 'SECURE_AUTH_KEY',  '|9> 3BwxPs&m+{SL&}34!b(0/+7o/1n|g+DZjHgPFSp>-5g{`e-vYC6fGRq$>|c7' );
define( 'LOGGED_IN_KEY',    '~p3ZtYR*?72-v<>%)av~B+pn8,m^ZREn[s8>O~QUoLWn;+~W);r,^LaAu$9<fHpd' );
define( 'NONCE_KEY',        '|rJ> x}]~DDWUI3S&e]xma->c?<dR<%3vHnDO2Z4 t?u*F .5Z8xgRmCI:0wj{qH' );
define( 'AUTH_SALT',        '4r0{n_v;-`?LrunudynPc8FY= y@jEa]94ZJ@/&RxXtM)h0>fA ($7+yWT8n&*c!' );
define( 'SECURE_AUTH_SALT', 'c9%8G(Z3Xo9pkOI&oC`!}-9.?E/d&-8K)Gw;KzLBj=5b~y$[zYA=5qJo}?`0F=_3' );
define( 'LOGGED_IN_SALT',   'm0#&C,%L_K$ssX 5@Jc=G+4>Luk,Vd$uqfV,kp-@5UcsyaUcUl@&.9*PPin{#[kF' );
define( 'NONCE_SALT',       'b_A&/Has;U9bOxKb`V!oya4h27NOdB%rdOxGT:e&Z[sxvR0;wF+*{ob)5`y&2`)b' );

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
