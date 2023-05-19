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
define( 'DB_NAME', 'kashan' );

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
define( 'AUTH_KEY',         'tqg?xDc?}Hu)wNpxX-3PY|G_v-(<i7Jv]r)oY}LP>{bh3/K@]Poo;rZ=LlJ%nf]I' );
define( 'SECURE_AUTH_KEY',  'FCVnLWG &jkho(P~r:@6fmOa><tu%J,}h9{:Dn^hvzBnn63~B>B>W$2UF[6BZo/V' );
define( 'LOGGED_IN_KEY',    '>*7ES9;1n3; PXbLVK]M!{4r`?-nSr^t{=Qp*d1{T)${3`t-g-99aPPa9B%p#g0;' );
define( 'NONCE_KEY',        'tdcBxT )^=vn)XdXmIaAK;FD+ynwGl],h%?3~nvDZy}otN2x$.q^TT-L3eRngG?4' );
define( 'AUTH_SALT',        '5&<7*GJ)4eF),DF)=w|W{)#kO#WP95;OYF&C[RK.GEwV}d:2!zCc*=J6I) WzG[y' );
define( 'SECURE_AUTH_SALT', '(Q:2 {?M_)xUNCm5x-LQ3MH]DEN~td:hz9tXEvQ0ueu#?y;DRX:c$pQ/y{[,5L*Y' );
define( 'LOGGED_IN_SALT',   'f/QxA!K*p eBwV7U%~;Hu=eJVJWByuuy8j,x7<wM_p>s-z`!g#Y`7I4xwcQm:Ax&' );
define( 'NONCE_SALT',       'Y=4A5LzsmqC<o!zf}2cHy<r;ZTG{(fE>BB&204E#7Gb{*.*?^;L0B tIwJ/Ex+oo' );

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
