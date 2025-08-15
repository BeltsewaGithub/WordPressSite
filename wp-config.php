<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpbaza' );

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
define( 'AUTH_KEY',         'j$q%QgOoC|&6a$JikxXotfITgdUw62M><UW8fjh!ks!9&{Ri$B@TOtiHK$>7;aD0' );
define( 'SECURE_AUTH_KEY',  '+(l|S5<L|bgViQ/!YrvH:x 8|tt IR[>H(X{Ao>r$Q__p:]r(BC5W#2T_0ip>Y/0' );
define( 'LOGGED_IN_KEY',    'Y;ok86/8;sui#,LV<I4kI6MYzj7 XH$:_iaE^rW+q.)~&a1x8~:4l]FRPo)B*/Jx' );
define( 'NONCE_KEY',        'R1<.ZdRuW;I4{^=|uBX0-C/-esA$qC0Kebns^GV@u9}+i(/W[,p/5{Y;;,u7TTQT' );
define( 'AUTH_SALT',        '}noBN)Pr36JAEv?3rs^vm:Fli]1Tv7XzT=|Mg0OQRh.:(U[UOIkc_qXoNCw%U*d0' );
define( 'SECURE_AUTH_SALT', '3])V#Fg%J!mnb1hUVR,1yo~o9IV[ML(Jf!QR4n:b)gdJd#*d>)=:Bp4XU{4h@Ea?' );
define( 'LOGGED_IN_SALT',   '7A-!a{KgFn?%e1/>Eug ?-qVHz8Pd7mf`)Jh&e&czqTdL`XdTAWH8dSw#=5FL3k7' );
define( 'NONCE_SALT',       'h`cS:~4@I,R_9!x6[4PZ:USrd5^bU3dV9.aS%vw!/8? /?:sf^k/~S6}@jqa8,N9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
