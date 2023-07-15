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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '`$58O0W~@H0@-/,(pTj~g%U57%qC2y=Kqacvu K#RCD~*p]?zpA4u$f->(gx3MJ3' );
define( 'SECURE_AUTH_KEY',  'k4bEp>76UE.UnKXkmTMdtA<soPud31qi{hs^`V*#h<7C&$*ksql(W C>7KwqM|1s' );
define( 'LOGGED_IN_KEY',    '#2 rOeqj~1}~,sY*3wBIgvz5zN!<KrTy:u0,:[;ae)K,Er[0t;n4xjYWZMMu7PSt' );
define( 'NONCE_KEY',        '>|s(v*J3CC*2iif5e5!sLDR+ #+gQoGXzWvJyv~82h&wo4|quTTpF&LDb0IOO=vt' );
define( 'AUTH_SALT',        '|WWYo-(qu{-c[:?XrfJ@E<Z/h~VfiHwJ0@dW6/SD+]2(v@?*>9[jd@?JaH,PRIQL' );
define( 'SECURE_AUTH_SALT', 'oLVvU;}=-u#.4js?7kD29AyJf(n6F8T>Og7^E%0D*~yZ5I*09]r{mJ=SyL`Ws^v$' );
define( 'LOGGED_IN_SALT',   'h>HpeQT<GQ%Az1$<!4N<trEtO}Z7VPEnE~|~RN2W5KBn}R668!Id.hj(,NhkFm#r' );
define( 'NONCE_SALT',       'v6QVXD;+;577k}*H>()J3i~qVNWgO+HDo]~poNTk$rl_r&ezn*0RL9~vu2h_|W@ ' );

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
