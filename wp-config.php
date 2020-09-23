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
define( 'DB_NAME', 'learn_theme' );

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
define( 'AUTH_KEY',         ';V~!*3sK}Y<nhx}LNr9oBG}55S6`,0~IB/biknQ,:,:8vP6MgHH;E7]O=@kLC(S3' );
define( 'SECURE_AUTH_KEY',  ')C[oDYWV&q~8l3g+Ty=6t6+.jVN5Hl1eSmf(F)exMwX(;54`g4q=>(9bDvWWi`Sz' );
define( 'LOGGED_IN_KEY',    'qi9o06YI+#2 286x:aNq%vIo%G_/:{n[}MeH5BYNSgY{njyu-C8r%d_t?jOtU}Jl' );
define( 'NONCE_KEY',        'MTaCHz@Zf:LD)n(R=OJ.!L(eyB6HM}TJOi&w{yE-#xb{TX ydr vo:NJC#[:UYdb' );
define( 'AUTH_SALT',        '05,Cjvavr})&-CS: UYl&/RA<Uzj+uKqE{ YxqB-,ck1}B2@:dc~P 8TF.8ib^;D' );
define( 'SECURE_AUTH_SALT', 'q_Uz]#IYR5[m(-~pdBM$<Y.A 4NjLPkx +UqG/@]%v84/*R@(QB3-zRT<owg{`t|' );
define( 'LOGGED_IN_SALT',   '&j)y[R!`m0zW>Q+u>S#H&s+p|gv8!48+7iNkBge4Z!5R(M<@ v= >=8l9%HZ&}?U' );
define( 'NONCE_SALT',       '~XJ{-le?hFUp*VwT8.~M<*5r70)5<Z[VbSiAd/LfR3[!1]n}7^UO%O-fuSQFv&sj' );

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
