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
define( 'DB_NAME', 'library-plugin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'w$I*-ExK 4./ ::KMs#z#0][-}Cb,X8W?9<cer=rc=Fs1y$cU|urdPfWg^4YC-?~' );
define( 'SECURE_AUTH_KEY',  'MH[HW2;E5ed+1SsGyZX}_IuNmn:m?y*YXzvv}e{H>2[k+dhHz:H5;4{zb&MY2F=n' );
define( 'LOGGED_IN_KEY',    'rl~<-iU&utW(&*yiF4)!5,dG-3R,ZD>_F)!e6n=?[0_APTv(Vetac02c[:$1s1b-' );
define( 'NONCE_KEY',        'dy> ^_;&70TMS$.:zmb%my5d_RPg-WZ=AvjneZI;-i$DAu<iTSR-KA|o6A+;xrZJ' );
define( 'AUTH_SALT',        'v^brv+Fcv8wo}SxrU.*`eK31wn!7)J+z~~y.GF1x6;WD/{@PiKyK~cZ2WFqAHTtp' );
define( 'SECURE_AUTH_SALT', '}dX[6oY<k]v<$x_]6gQ}ID+ULL/Y$,LksaUIO[96hI~h$MWnb*@*:e,K&gi0 X`J' );
define( 'LOGGED_IN_SALT',   'kXEOJ*UqOG`X/[#$;c#&,t0,oCowt{F.]22BDA=HgFcYi7>ZdCVv;*ZkPhyE?Mw(' );
define( 'NONCE_SALT',       '?)V|ctShQ{v)To&T)t*v(6@a}$gSfOe(X:X@oi!tJkO3u]$X@p,3i<^C,c&s<Aa7' );

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
