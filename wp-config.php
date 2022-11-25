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
define( 'DB_NAME', 'wordPress_test' );

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

define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         'e`;r*^U)ED^ @,*rgDP5O?ON[IU^:zbcfO^$1n<Uk^Nk<0`<!-s2}LOUDjsk^T|O' );
define( 'SECURE_AUTH_KEY',  'xnI*[[J%7fe;TT~j7z&2-::ifZh#{D{~*BvJOcu+Vqbfhp ]Je{.?2!X}vFYt$9>' );
define( 'LOGGED_IN_KEY',    'ZT8YMEWNih5FMJNp|5A0~_w)v+R9Sl!`q,jPfeqE(*-7U9|TeSEtC&!zv`!a7/qw' );
define( 'NONCE_KEY',        '8l{$8tLX>l#T~w|c9x<Q7!wy.IExJ-{@[*WUF]KMP5X/vqss}4}K:_H6g/{$Mm~8' );
define( 'AUTH_SALT',        '_e4y1za{2/w@zTtE]AYB2 #Dqr&pRR[O{OpKq6RU@82PLQ>Fn20}6KGAy83XJJ,o' );
define( 'SECURE_AUTH_SALT', 'MrQwdSs4$p*CoiLr:MM|_E@YYPa/j5=+IIz{i~+A}D?],S6cR)e1WySH23flM$|m' );
define( 'LOGGED_IN_SALT',   '/gJE1i0<!:dB)UJ|3T8FgINp(&%X}(sh:SK]/@$8qn:J+L&a~#Lkb36$Rqm5u-s-' );
define( 'NONCE_SALT',       'Ne+T<0CRzs3Qnx:pGZ^Ru~}xHo)OrmK(U#ZfJ`vq_/[*yXY(yx_O{Y2HuweF{t*(' );

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

