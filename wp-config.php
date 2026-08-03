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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '[70LmWylfBJ}CLEhQZ==!2 5,mc+y<E~O[HwOp E8 .ulq/Jhj{&q H8 h`<vVy=' );
define( 'SECURE_AUTH_KEY',   '3I%!BmBGJBhY%S0MuR~MAw#9zBce|v%X{#=xrmY5or$-PD9p&zvk`A8b]L7O@.f8' );
define( 'LOGGED_IN_KEY',     'WEi=YKauJFAfRpul8R<p:phpsx<<;G#ew;qd`:xE=N~S}uP@q fWkmXG|^j.G=l5' );
define( 'NONCE_KEY',         '98ZLjhJAcN0+Y Aq2d(bNyWv:tB|U3Q]W_0_i2/38FOTK$w_7u ~>X_R>T)T ?/K' );
define( 'AUTH_SALT',         '%^<Q7bCo/|l.`Uq}:_K0WX)#|Cj<%>-np_LpJ``Ocl#a_{ZI9@$Fa(ag}l>^{MH|' );
define( 'SECURE_AUTH_SALT',  'SzI<,gI`(:f$,A_y{-b0K*!LS;VTJCxNi|NU3]Y&LJo3kP=H8WuiK(icA )5/]Hx' );
define( 'LOGGED_IN_SALT',    'QvlmOyw^_,:<kNk0EaMF[m_ ssa8w|f6QU:mzjkMXnlBvKAo7X6KCr54+%1NBOpV' );
define( 'NONCE_SALT',        'OEzd<P^j:7,0/,k=ks^NU.TKEX&QNes^}]A^$JamRX1}2zS#Qn4LT3U6f|=gOQ(4' );
define( 'WP_CACHE_KEY_SALT', '7/tzJQaT6-@Q(noW1?Z#&{k}v#;MV#{Z=MT$As ->+y=%]btv497Q^X%(),$u|p8' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
