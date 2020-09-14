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
define( 'AUTH_KEY',         '{oxt}IE7h(GIz,Qi?:[k|[eC=<CqPfT$/jh|MIe>(%l/UkCy/ftHDsM,1&FIdY7 ' );
define( 'SECURE_AUTH_KEY',  'D-|{4&LA!Vk|}>OXh}p7:Q.+4uMsCyX.t//TF}Iu!jUsV%,S};AtE-)m5 a%L;8+' );
define( 'LOGGED_IN_KEY',    '[^O[@M,Te77][W5[2e}1Uwa)z=@ }2>x4Om?kx#T@*|{+9GdlC-!%m E7OHlCocl' );
define( 'NONCE_KEY',        'ytf&_bH<O|9g1PbK%6.a5,EyVh,r1S&g6:,XL90|%}jgQ@/UWaaE2>9fDG$I|=mE' );
define( 'AUTH_SALT',        '!KIA2zb0,21soPHq0wO|ZN ?+`bWK1.^hu{algOg%/&=`uNm{,QDhz]t.lW./kuV' );
define( 'SECURE_AUTH_SALT', 'OuM}J=CG>UT%v+2Tz`l9+KPu{x`sTFm-v7IaI!pP0w/Dwu)?aq>b-cN7[tXU5rIl' );
define( 'LOGGED_IN_SALT',   ')&u#;=35-s {@juoyi/@$Jq8X+qaZim<TZeXMHsJG!5hwI3J|,t?]g>k890awGZ{' );
define( 'NONCE_SALT',       'QCE9&T.sHw/n@myEEdTXR7K5tLDoL<oZQi_80|Ex9Uw(!LBtJ_G<#7:fxPROD->e' );

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
