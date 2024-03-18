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
define( 'DB_NAME', 'abino' );

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
define( 'AUTH_KEY',         'A-Jdp-6uj_#3?(&WM~S0qg28/2s:oqp!D)?O?&X#!|:@:Sbikl& <EV~@UAx+IW,' );
define( 'SECURE_AUTH_KEY',  'r3soP_= !`!Uci})G_NN]4tJ<-c#)N),/pz+Q@FQV6<|b:-Zy-3yBhh}2bF^N/_N' );
define( 'LOGGED_IN_KEY',    'v[}./^G?J-zZ)vE$Psv,@2dXw,LAw~qJN4*#B1QDC8-FO Phg-^N&?e.W]tJB3&V' );
define( 'NONCE_KEY',        'xi 7V]9(t&?}S4p0<af8QgGzFG!5Za=:t^JOd7{#7%USZrT<sDx7~PeuQ-iQND4U' );
define( 'AUTH_SALT',        '1C8X#.ZG3,VV y5[]Mg[s/7o,lzpkff-r! 8swZw202+VZ,V8j`Ub!1K=|/Mo_i<' );
define( 'SECURE_AUTH_SALT', 'HA-WCmB<K0E)%_B1fn8t*>=l2R?KTAv-MS>jqIPiKBFf5T]uMW^kfU?67LkbG44o' );
define( 'LOGGED_IN_SALT',   'ps3NClOmb34U/+NG@@P<<>8i0KG*im!=^Pl1(}Ehg(>X/{E[p2;&nO)gT:=Y{T|o' );
define( 'NONCE_SALT',       'L@u<DJePCh?joTPox@);Rpv80O^EpLj%VjhX.blP&ds 5+)e[nbDhk^@oklU(_L>' );

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
