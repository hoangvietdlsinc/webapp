<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db01' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_dba' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hunterpro21041988' );

/** MySQL hostname */
define( 'DB_HOST', 'myrds.cgazrtrmczg6.ap-southeast-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fOP5gQ1VR.EywEmF}cqr5WQP(~{T45{GJ?*mR~8glh}q/o9k{l~AJb5iO@#181 +' );
define( 'SECURE_AUTH_KEY',  'x@YlXNyFU{Qi` j<T;Yv+0gM</6,JYndW:S)}J@W&G+:=}[k+8G8<cW4mEF.|?Sf' );
define( 'LOGGED_IN_KEY',    '?sC+mdr1{i2:BLH;I8j=Ze:4o0t:vpDWyVj5z126Rg}<{1 z Fm[OBGn6D7:Bl{=' );
define( 'NONCE_KEY',        'x]ariW,B-X[]io`KG<M}UF?t{PAX2uw&LG8h9z+5S(Z4(G|YS09&k<,EV]=$;g[a' );
define( 'AUTH_SALT',        '$8KPp5bJ^i{W`5FgFf 9E`bYnIIw#6M%RhJvR8kIf?TBl0R8[O:n`jYruQ,my>SP' );
define( 'SECURE_AUTH_SALT', 'PdS&pFKauAI7A#]&%jb9e;#/|sKR{X=.V%bVfg>}<my_&W)pVOc><[Ss^x%C$+2/' );
define( 'LOGGED_IN_SALT',   '3$F;9pl-6/*,8;UOF{_y-M,Df.ZaBNLR 6Nv oon}oQ>pYo|S|5TUY;$2_BjNkTv' );
define( 'NONCE_SALT',       'I>Y,GCsg>0JhAnfTBbUV*7-XJ}UC8s,e>!vmaN,LAwlNuZ=iTF~;C,ev_d<I v_m' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
