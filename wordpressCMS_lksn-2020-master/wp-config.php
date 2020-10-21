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
define( 'DB_NAME', 'db_cms' );

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
define( 'AUTH_KEY',         'gNieLDg;K;6LcubE:&?8,g>d2zw0>c~w`7zU{7_{P+G`js~QGORp9eM~qgG/5{X[' );
define( 'SECURE_AUTH_KEY',  'dPJo311}2%TD<!qLz.|f5jZT-3H)yM5`kTr4-:-8(y^o72W&$nc~^n:Iq;G(nu5P' );
define( 'LOGGED_IN_KEY',    '2k3I3kt@(#N0T1WSiERVL^QXI GS|/%<l4kH|t0B8Ji9VX|<.KkWE/$k-E#~&8&j' );
define( 'NONCE_KEY',        ')0)K{j3dN8qxUuP(h>l:>_B^TG3W|k~CHj+7B}uZ1%1L-htc`sgO:j%kCHIAafoK' );
define( 'AUTH_SALT',        'JvfVt6xzlIz|:,%90[Tt)%a2wG*dpX_I/P@ORJgb]N>!,tgey$~Q5q6p(|Y~|x~W' );
define( 'SECURE_AUTH_SALT', '_t&WdKHRd#?))t1Ot;:jbuqvGPuIWy07I:2>)bER7d<ZOJX5YUy5$,0f9FI7gA|=' );
define( 'LOGGED_IN_SALT',   'OUaIAa$K <fVXxfD4q.o2VH*2qQ=u*;[U>+#k;C)%U<@[3_FkrG5hDWVxy=#q`=!' );
define( 'NONCE_SALT',       ' >S#~*;sE=Qx({4toW;hCW[U`ak>egeg[Et;TQ9@]VW^5Y-DJ1$l*Zj64,!Iw#Ap' );

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
