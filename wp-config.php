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
define( 'DB_NAME', 'upachalupa_db' );

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
define( 'AUTH_KEY',         'k$faW2XdKuc7s{>*+~eC9uRf6H}`/6a0RMRP.-]_2WE78eiT[3F}MVpP%TC{cpR?' );
define( 'SECURE_AUTH_KEY',  'pT{ufe(Y%V8 m$x%<:t2:Yc$pW B_4%o9|tK.TF@&Hp%=p9Q}Z{[:L=RJrSZ-*HR' );
define( 'LOGGED_IN_KEY',    '_7GCFFAa<xZkDAy3fK~F$Ks+!E Vzv).o$_+g/PD(YK8_)aQFOM_O$udmh]5E+-=' );
define( 'NONCE_KEY',        'R,G8w$/np=yf?w*b[TvDs8Y@HUd+!F(+N%i;*:]P^}hmWO3:MFRa:o=d}.EPF6)g' );
define( 'AUTH_SALT',        '=V6j V&mZ+KkoVks{=(<A*64LoUarPh3>6_#-Sq&:QyqpgeTp.DO]NzFb4>mwBl-' );
define( 'SECURE_AUTH_SALT', 'xNUYJ?=z$?v&MW/-_h@8KwCv[[G^ YMR/d@I`S9NJbrFk(O9|O=smT`1_^Bvy$5L' );
define( 'LOGGED_IN_SALT',   '|+7k? jHBFx$K3,Wl^01t*HE!n|[_U|Rbt&? VVgxr>[EGPi`rmX2NgrU0KZAGv^' );
define( 'NONCE_SALT',       'R&T79`{Z)uBNhA-BpES<=MUzn$WGC$Eh^(!iLnPv`Vz6?Qt,5y^JB|ILP4>tb -l' );

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
