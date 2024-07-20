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
define( 'DB_NAME', 'security_convoy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '0&Y9^-CZ?=@HHw o$Y~U>zb{h~JyUx!6K8)J6VH>nWv>TWk5}T`%`U!sTaL:I1:E' );
define( 'SECURE_AUTH_KEY',  '3W=E(lZ*Lm{Mz/2xBzL;[r URs^g}hfnB$XVnT$C=e`/le_%H)t}te{CvU=5HC%.' );
define( 'LOGGED_IN_KEY',    '`bLcGd,^8Ke4!G#?][RI&D0og7f;uuObjqPs2<$l~,3Cg_>vS[8fg>,IX/zW5k q' );
define( 'NONCE_KEY',        'N&I@FlxoWVH5[&0#Pl(bV$?EwA_7~Y(M6y#/AgcwRDFL9Z7eUVq~d0^#B&F|HO(#' );
define( 'AUTH_SALT',        'v#VYoL6V+z.N9f :Bd4@<6TMVeBHI9Pl@!aX&ah><@Y1-fVU@]UQwP R11vb}/_@' );
define( 'SECURE_AUTH_SALT', 'xHexpLL*uHab.XPFzv.8,zp!_q&rUv`sT VU]1jZ/Jn2elMob%/ Hb!2V %6Y2sk' );
define( 'LOGGED_IN_SALT',   '4d#+b3BpX2lUrI1-E-|}Ydz>aZ9(al(dB&8KerQ>G`|&8>,Dzxz=}E4l-(:xY@<1' );
define( 'NONCE_SALT',       'Jq;b7>aHa7W[g= y|x<dPhbyu[mn8C9?7Vx0N=E,VyP+U>NLaMh4?tK09Rx?_BX?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yusebsdsm_';

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

/** Завантаження плагінів та оновлень без FTP. */
define('FS_METHOD', 'direct');

/* Вимкнення редактора файлів у адмінці WP */
define('DISALLOW_FILE_EDIT', true);
