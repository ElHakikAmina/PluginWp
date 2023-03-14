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
define( 'DB_NAME', 'PluginWp' );

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
define( 'AUTH_KEY',         '?8}sO]-]9jL|1#Zh7Pix3RGObNaa3zC1FRbuy9cdbH154q2N!d52?nu2)I&2`nG~' );
define( 'SECURE_AUTH_KEY',  '}5;;<GwZ;q3RMbfPGJcQ4L~c;@Z{/9Cmk/)ZONSsis8cMER:M^]i @kRLv`/Uw%6' );
define( 'LOGGED_IN_KEY',    'PpH4tpOvys!j}9lS4Ma+5q]e{IUPaMb!)^0D0b1%t  I6u$[I/*QX:a[uE}+yMe.' );
define( 'NONCE_KEY',        '|>-4th@(gVLf+/S,}B=:[:&?`(}RAHcf#L`JaknW`$(#7mfoOo`u:lWmbQ^~c|i?' );
define( 'AUTH_SALT',        'F7kb3/LEqWFa{%6Hj{}.qOHm?P<vjZEJT{huD0&5%%!.SXTT>[^5e>KY4K)*k;8W' );
define( 'SECURE_AUTH_SALT', '0kD(B}!ta@=c>+r-XMH6><1{SC[@GjZ8)|QWROHkM&q-a8W[M~(v$9Ck<LEpzg:A' );
define( 'LOGGED_IN_SALT',   'B2Y#{n1,pMYWAv*w?%qluKye%.G==9@mhwo5NX:SEQ>`bGlE.;OJay,TJsx7gU6y' );
define( 'NONCE_SALT',       'g-0QV@6b^%!jh]XhGL8Ef1u-w9j?{CX^ZF:?H{:G,~)HS8z~V4@Yg^cQng>g(!!_' );

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
