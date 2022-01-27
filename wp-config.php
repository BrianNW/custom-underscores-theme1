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
define( 'DB_NAME', 'custom-underscores-theme-1db' );

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
define( 'AUTH_KEY',         '=26!6|;fChr#tU{[p.<1lC3/h&Q[!Z7^gm^[c]x]J(xf>N-s?_h`Nq@)(kC@ ]Y,' );
define( 'SECURE_AUTH_KEY',  ',0>](oQ-Xp-/by*Qdn`D333EMJzFMhM2RRaX46TLIeO>t<;wxg]:9F[nS^~*Z(|]' );
define( 'LOGGED_IN_KEY',    'V.L)o}(_`R&@ s%}gH@pBe$MG#O`<7v>s;tP]Z+E?G)Ka/!I.ZEm=LRZk{t]J|7_' );
define( 'NONCE_KEY',        'k{n4Z=Wx[w&$8f`D&JB u#z<Y=|vOAjXpP@*4oQGcm&Sxr[YU>7&5r@Lot1B,4$0' );
define( 'AUTH_SALT',        'f92cL7S#6k^^pGzY_H3U8WAH/aac~_Z0Y}F+m(;wJn:?PL2opj#JYR!bNM.eZRK%' );
define( 'SECURE_AUTH_SALT', 'm<;TMnXW!^E,@AU)a<!>v.A!>1V*K-fe94UjQsk[Eo(w>.r:e4%9Q^Tz~VC(*[}u' );
define( 'LOGGED_IN_SALT',   '7[PE>.(,Y&}@nck>u4MiK0KP/:)=nYvlrZn5;LD6}^>B$d[%FmX@isWcsaHu4TKg' );
define( 'NONCE_SALT',       '2?x6*;~BuKh6Z>#/#DKF/(~T%;xqM&Y[td?j~JW#$^Z38(O|]{wg(k!>dGSLL1g3' );

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
