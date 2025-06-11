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
define( 'DB_NAME', 'singularlearning' );

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
define( 'AUTH_KEY',         '_r)+]|t.7_+*gKdNTC[->7t;,QqhT&p[yT#_}4 Z)Qf!}HygEBVZEaNjn0[96U*A' );
define( 'SECURE_AUTH_KEY',  '.O-:JsAb&&jJ`@24&nhBsMddUaRQ@E^G*=dwQNzG6ZKcgz@In;4xE~&GyS(GZa t' );
define( 'LOGGED_IN_KEY',    '~y};=i}I<|.OZ42ZP$~r=SpgMhdD%e<5f2r *k$<JvrA>Uoh5?NuZwF7Mqu(+<^:' );
define( 'NONCE_KEY',        'LddwR|$mVuj#u!jLntZ5E6FVSbttCs_o!WKwcrSNUL&1H-?350>So@d.*L/0mbbd' );
define( 'AUTH_SALT',        ' gi}T w;D<w=,m9B;c0AMT-@X;>f5HiEYDxxJlqMO_pta^ZvHja=B&NQLn>H/zI-' );
define( 'SECURE_AUTH_SALT', 'Ejg>ue5$}]Pageu^i$P:b6FN}#623`M)nXPT/,U_>Pa-MKH{axRQU#+(=;:x@xo.' );
define( 'LOGGED_IN_SALT',   '>k*eL1 >e=_[PI? /2?}=Ng*]hFwao~]d4mB|L>K`C=$KI}+dEMiSOop<@h(%CUi' );
define( 'NONCE_SALT',       '$rp9?)L7HJY ?afzKHX_ _q,*dj`{C6I$yB9@yeVoC<*UO2Vw#fI@Ds`;FJGjTG:' );

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
