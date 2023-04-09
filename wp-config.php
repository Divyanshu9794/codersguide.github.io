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
define( 'DB_NAME', 'coderguide' );

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
define( 'AUTH_KEY',         'eVk75M5d{@|@F|u5I`A;jL0iRDNt,7w`#IYJ21bqxVh,Sg E71tw(nS6mslTd,>%' );
define( 'SECURE_AUTH_KEY',  '(oVFAdw2GNlxU..!t<R{8i-PG]UH2@!<6pV!!#ijl+7ui_UEb.N}F[<Y:y~lk)@~' );
define( 'LOGGED_IN_KEY',    '_}tLVHzD_~eqd)^fe+r$..a=2ijo4pwecVbB$!{2twU5! l!v(h3a(:Ukab8:Iw(' );
define( 'NONCE_KEY',        'i0V^<`gYWTFOJD[)bxIAH.1^AxhVH4eG$J!F(&#g/K{J9ElB!<k,b@sw5 Mtdq4[' );
define( 'AUTH_SALT',        'EwM^51Aq5,CoSx0^s[$H8-)_3z^qP|}y%7jZe  q)!k7&3^7GVBazL3%^[k*YW~-' );
define( 'SECURE_AUTH_SALT', '/bgIV_h(7<U.2j|HtL[6^Y{k.#T|n/jn2kdS>*,`,b{v3bM^a*!s7kfG:V#gvR$a' );
define( 'LOGGED_IN_SALT',   'O`fx3iZ!w+v*e/h/Xml7na|ipuGlG_s:`i#<b5329+?;.|Azl+4J8A.8`^IE`/y)' );
define( 'NONCE_SALT',       'YIQ>z9=HCeN2-k7[=W*^yo($7Dpy-qWJKK15VzMhjhAsXIh97T#d,6&<4~aHzGOD' );

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
