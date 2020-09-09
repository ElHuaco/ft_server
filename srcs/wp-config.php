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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'lE6UaxE(4e=Cuy[L.fs$pu<r>_Z%-bz=iTA^9jpbr}Fs{&HUiHVB,A6F+^mpyF>~' );
define( 'SECURE_AUTH_KEY',  '&4VeXy=P-S,gE!^npDRbWlljGH6##+!B#3UIllGltSGN3S-R~}jB?/B3!hu2{eEi' );
define( 'LOGGED_IN_KEY',    'kyH,.I7SEQ^U}y<AC/zPI/w4dk? bWku l{>e=4!I`.?x_LCmeu.,hBmbI&.ZDDt' );
define( 'NONCE_KEY',        '(BO%S},c-!-sM>xFC?lp~{C.Q]cSeE>O214-vJ;`T!<d%mD#th(nnfKnpaLC j.k' );
define( 'AUTH_SALT',        '8h[_G?!<Y2DL_|Sa#M_8i|bBgh^/q`fRR@PVcid#f9|5/m-ui4hy5YPUq#${f|T*' );
define( 'SECURE_AUTH_SALT', 'MqOMcdnkw-.(sAH}D~lg/%v{nSjy#ypQP~ %!M>9`4@JPdUR%U98o}o}lP|aQ#6m' );
define( 'LOGGED_IN_SALT',   'WD:dUCmPptC;A>`di~rrmTkG$@CXt*x2e]Q$lCEPRK@E4X~)&0 :8%uAI-_}8lE2' );
define( 'NONCE_SALT',       'v<]LcmUVTHY&l7k&@ScD8bNl/S]UftG^5Ag&k.bQv ~D<Sk/4.4TL:wrdONw1*<w' );

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

