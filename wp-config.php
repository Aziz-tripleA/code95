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
define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'code95' );

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
define( 'AUTH_KEY',         'dHtaGM>`~yWw;$*{FcC`J`bdNG:EEp@N1[p>q}nUf~^$dAT{y`U_`l]vz5G2xGfg' );
define( 'SECURE_AUTH_KEY',  '*8L|B2nLJEr!3LgVH~Jsqk/ u w@xTi#$k0Jv=Lof+ip&Wd)Ik4Y|r*|PWC=4XWO' );
define( 'LOGGED_IN_KEY',    '*x@)hef{wz5y;9HJG|-(nGu!qW]`EuJ2WI iS.W(7+~qL P[3xaz]q`;F3(|gJeu' );
define( 'NONCE_KEY',        '#iri.R*(EX@M<MvkX,2?Oe.gFMj`j,.6s_P={nnFi9JRWYjZs*,kTh5zL;&hA6;Z' );
define( 'AUTH_SALT',        'Zdc,w{(d4`$$Eidk2D;Lp~%p8=BteJc{/d{N;]Cb ke[ZAwEu3g?Pm?;?.*1][v}' );
define( 'SECURE_AUTH_SALT', ',@4ioURCLw/6ZXw,G5a@0M9]q;fDl1Ao|DJg9X>,.K9jqE4ipC_q=--4U&~xYma~' );
define( 'LOGGED_IN_SALT',   'cREAXdiPMxH/7Xua9+d$pMy]3iD~QFZ-8il~7GQczqTs?N:o?:$z&XpF7l#)XM}M' );
define( 'NONCE_SALT',       '@!XVT+HUp MsybnJ_9+Np{T4OLgyy>nk64HPtvc=tR  VUmfKMOwNwpRVPN7AuQW' );

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
