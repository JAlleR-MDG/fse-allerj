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
define( 'DB_NAME', 'mdg_allerj' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         'd(WT_y73zDVRw(f5Ge5+&ir4:#zZ!?/<m$$,:!X>Z=&[2y:ELU<*ZWoOU[z.YYLb');
 define('SECURE_AUTH_KEY',  '#W^,L!iZMbQLb@{*Qiz$M$$Hm/N]J|=,11VpmZp]D`[X^;Y;])4kz=T&39>^ipVq');
 define('LOGGED_IN_KEY',    '+WH:lc4;m+l+]V1[hx0Wu{(T[>=&#aIW4%v<rH.>ju75]vYb:*,zp@xbXWstyi]6');
 define('NONCE_KEY',        '?, lTuF;{p:rd&E(!rQ0{d-Erc;.IJk8|z:a}+/rM<{Y7<6X^*}16Rl=8>Xq4V%H');
 define('AUTH_SALT',        '!lh:3_ac]>.d928gz[2:-Q#XBj3=@2*2/ECf]2B ^+R`^X:jj^,(`^WK+w{yD+(`');
 define('SECURE_AUTH_SALT', 'W9Yr8>^-i+xoHaawd&S~As~4bmyG~&-$0zJnaW-]#t-|c+V-u:lK*bYX350Bb1<J');
 define('LOGGED_IN_SALT',   'Wu6xpa<ok<Bg{v8>zeH;gV!Gn;Rnlvf1AU%=h6C9mai =1qhT^6.SFNgY9O@--1z');
 define('NONCE_SALT',       'W:-!;,H*!|$akep=%,VR{x=[&i8.0rftL$:8Izy5wUf[3}rkzr`}PnM<DCS3.?8z');

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
