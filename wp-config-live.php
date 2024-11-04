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
define( 'DB_NAME', "db_tapestry_crafts" );

/** Database username */
define( 'DB_USER', "db_tapestry_user" );

/** Database password */
define( 'DB_PASSWORD', "Tut0rB00ks?" );

/** Database hostname */
define( 'DB_HOST', "mysql-200-123.mysql.prositehosting.net" );

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
define('AUTH_KEY',         'T(K|Ck-d5I{Qt(8Ow5Y)nJ1n.N_)F7UY*=2O+w>kN^.sz]`ew+>3t*)|SkSVu3og');
define('SECURE_AUTH_KEY',  'Nx0Y?5qaH>-V[e(R3nUYe-Z;gl#GK9&Fn]x|]JT|h6?~3]s1L]%Ewj83u+Gl+D|R');
define('LOGGED_IN_KEY',    'GluzpLenE:Hy5){wJ_LRo(c1I(X4T@&#X]p%Tp6gLUdjN#?sDBT&K#lwt$>~ZW,S');
define('NONCE_KEY',        'I-2H{NN`E$#>GfyCT +I|v(Sg-E0R+4G-=&6k{y?SA+%?F(M)0!k.>Q|(gH!`MA?');
define('AUTH_SALT',        'nQT[^10r-xDz[JdM])53)hK>g-KlDaN9uqV+U;Akr2J|2fJ>6%wF7|#^Bc^.4z) ');
define('SECURE_AUTH_SALT', '.0WE#)V20Yi O$OTuPWU1~9-/uw&BH./[oG2l=$qzWp(r}Tois^;I$YfwPT.Q6pg');
define('LOGGED_IN_SALT',   '5&|Y/GCLtXW+&[)`F@F4)Trsk`?C9w/))9)%HezErI2:-X-M^DZYNt]atq8&}kx|');
define('NONCE_SALT',       '-Q1Y#x|t)8nBVds /| CT/{c(V3|_kH*nI!SorJnPThkpUOg2];?m)N|9p!4sX@R');

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
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
