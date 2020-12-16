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
define( 'DB_NAME', 'tecnisa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'M`<Q!2Ue5p0yy?$e`B[;oo_Vh,dGGRcHI:5MT~2n!dW7wr__)o60Wl9=ha7%t.j)' );
define( 'SECURE_AUTH_KEY',  '{WWdo<%hr$UB<v;&yCs^rYC+@_cy4{/<9?;Z9Lw&B~<yt1WP=VhUpLHLk;)c!,/:' );
define( 'LOGGED_IN_KEY',    '/.iP_W.qT.+nTA_6-G~Qq~uF~vI=L1..s9nZpuiWJX[3Q8I`^F^$CjY|}(=O1a:T' );
define( 'NONCE_KEY',        '(G~!qU&B/gyPLQYV}vb*ZB~Uhc)#16f6P6/3cj/8c/T1)B!u9-kC|kC}DrG3Vs4/' );
define( 'AUTH_SALT',        '[fg v$WQrB`DQ,wLhr`6vk&Ac$zFH@Q./ME^X{lPa7!x/b+ 8j=qFS![1Cp.j7a;' );
define( 'SECURE_AUTH_SALT', 'B]muRE#_VmwZKE,77<N*70X(+Ot`FF(Y+_#o79e?0DIURLU=j_@tH}slyYQW6$od' );
define( 'LOGGED_IN_SALT',   'In(M#.ef;[a<9V(7U&kB|%+BEa/dSYl_)TI3^#Q+|vB`Ln5.X[=o`;CFJa`Js7|T' );
define( 'NONCE_SALT',       'Biu U~O6dak*-;esG8{A0_BdH2BXl]%5Jn#!]92.kqBytjrQ[RhA1EfFba%QWu9O' );

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
