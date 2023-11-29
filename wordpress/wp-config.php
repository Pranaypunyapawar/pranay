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
define( 'DB_NAME', 'my_wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         ':+hU(Vh@wmW~C#+`uuN.w`vDBy(1(-Rm+m`.O, RRA-;7wcXP9.FFVUI(%R6 6nD');
define( 'SECURE_AUTH_KEY',  'NghdX|:$`PKcjcbsET_MSnM}d8j{1(H33|81U-^|VpnkgNm}+Fm#KkvrG?J@YM72');
define( 'LOGGED_IN_KEY',    'k#,`zVZP^z/jx 4d;R$;k_MaaPS$)IJ:3}7%Ukb}d=6|u[Hls||!e4]|vI$H;*K5');
define( 'NONCE_KEY',        'R#Cay@7Tm&}&Vt^) #0#{E|+qWN/BrelYO/g6lGG2*AFlFs-^|LX!!~5PGb!phsd');
define( 'AUTH_SALT',        'L:<$+O%xn?Pz.6cuwaydHt t2N#3^yig2PmDElveNJ9:)D}lZZRcTrKN;Ep3@s.j');
define( 'SECURE_AUTH_SALT', 'SN7*7?^6RIH6nn)_G0PAi-7I2`6tIy,`j&X1ze!Q4q?jHw@6nyC`w^Gy2*s0nPu+');
define( 'LOGGED_IN_SALT',   'yZa*K1o)|_}]JekHW/9sODg7:|&y+/{6trS+H,#<^0p5DK`jm&SpD]XzMeRR-YYF');
define( 'NONCE_SALT',       '>x[RN5A-+$EDpDuN}s?@c3eM0aTN&dYT_re,w3+/~WN$8`]UeUc|.FhJC.G},_VC');

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
