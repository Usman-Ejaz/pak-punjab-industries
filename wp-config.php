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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Usman@232' );

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
define( 'AUTH_KEY',         'k(Rcp4uvn;cgVyY||Bcp]CLO7THT;4}#4^PL pJ^pvdDBd_f.YJIz><9v_Wt%DAG' );
define( 'SECURE_AUTH_KEY',  'n,sY?Y]V%=YMYnFS(1uGTvNo.-RO>^[ts`FY1F*{IgG34|V;)r,>-_FrTPM[nw*k' );
define( 'LOGGED_IN_KEY',    'aFd%KK/1vq!rHLC!nM4<tKRi8Psu)+VP$WGtRXJ(2ydyg+53?w3V>T6b R>>kL|C' );
define( 'NONCE_KEY',        '/WwW|V$6OMfG}3%2ILNh&?l!)?{wp%}9@|LQY2 ySejO?DF.Qh9^2)N-rs,mCgSu' );
define( 'AUTH_SALT',        'nU6,,$Y4][SHy{ZK9<^ThZHa,(+8=+1uG!kYY++gD+`C$U]b?Y@@vU#^BjyO>,NP' );
define( 'SECURE_AUTH_SALT', 'db$ngs5j|c&Zw1?Gy(Wz2H-`YzT)){[]2$srsV:K)Q1-5`vqfnU>q/+1tr^EOtJG' );
define( 'LOGGED_IN_SALT',   ',L>sY.1oR{C.YT4UbJjv /o[om8F/lNhOE`P.^u$a;Q/,z*wVZKK4n{A&j()|E9`' );
define( 'NONCE_SALT',       ')~aj3lXxPs{1w%d+h%3s~*wnLON)uvwvqK[J7Wt|s8xBgj(? V)!<$tPil=L=R<o' );

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
