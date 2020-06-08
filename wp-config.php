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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carbonfields' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5;l9[yG{tUvuJaHXkY/-qU/8n-.S~gsy[I(io}{T?wYcGojTA*%M#gU6{@5_,ob ' );
define( 'SECURE_AUTH_KEY',  'p3VCdG`^:jeDW~z BA6@<*ome2dKZ$|R=fsr-/qF2u[o.[esEcgA%Hr.$UNb<#`Q' );
define( 'LOGGED_IN_KEY',    '?hAf_)ZP0@fu:%oiBY(+:^^7.#~4&/G,1EmhN5ccOr:Ghs@UE3SKm#_ !_Z~gYq-' );
define( 'NONCE_KEY',        ':t)%~p]n qc]_lmYa]v4Vn)2g,h@K@uNV:^@tftHJrb-{& F(>kcAtWDw5uzZ>j4' );
define( 'AUTH_SALT',        'S3H)(XhFh{R|fvu8E Dd8S~[Ur.<U{HHqxInb QF#xc;kz#=]T,c~[vHw%Oh)0#t' );
define( 'SECURE_AUTH_SALT', ';G3iY!yp>xFKQ}fmB%[35z3?!|L2P.e=GK[c*^;<_ 67oHw[Ars%698CD5q|U:69' );
define( 'LOGGED_IN_SALT',   'E1w-?WBKn)-UD$-O349MX~PLytLvJ<dNer2W}x$X?d&}I;^?.C5Ja>m7?H+rkAIN' );
define( 'NONCE_SALT',       'B~2>{R$$bL5RjE{c4AMxm&U1majw.2D__ddm2id72z>B4c4LJ.oct/6+qJ2&riX2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
