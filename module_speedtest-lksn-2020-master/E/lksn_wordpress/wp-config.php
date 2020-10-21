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
define( 'DB_NAME', 'wordpresslks' );

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
define( 'AUTH_KEY',         'Oj0uY.azmxg]@?>hL/,a>>atwe)0AJCg?vXve@/y ;>[m>O8@Nr:V:4<J|hl{It5' );
define( 'SECURE_AUTH_KEY',  ': |,j5@=nt~r2glf(]SLo. (0=NZW}WW>#Vla9OwC7M3M.^3r1 .cIpAJB]*bm)0' );
define( 'LOGGED_IN_KEY',    '.ZzCE9PeSW9.0#?@8EQE~HLb?7/q0ss&7EFA,GmiC>6LN!a$%E&8w#efUNo@1&xT' );
define( 'NONCE_KEY',        'yJ_b^:O7sT/f5>`8n4m#|HY<$l+H|-(:A1^y~?YRW_:fkt(M%FJzb9c];Z`lx5Y0' );
define( 'AUTH_SALT',        'B(qEOwt]L4HDn-yrZDN0309_Zgz#P8cFNx]O]FPc@@t@CX@p&o~>90P=t3HbE1i9' );
define( 'SECURE_AUTH_SALT', 'F;#!|^oO{Uxd 4TO=0i;pG&32KR62L)btjPt~N96Vpii|pcA0S#j?TD*~/%WtUMS' );
define( 'LOGGED_IN_SALT',   '<RBGfKwsl8|4ul?&B;U)Q9SA,!(ockJx]LJV/g/KTgCVBH|xAM+ <06wi3tmd>rP' );
define( 'NONCE_SALT',       '@Cg@V`epZ _Xzup<O|o*[N,35m-?6%yz.s@j|vD>^lm/aD V6Zc5zD#pFS)%yR.,' );

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
