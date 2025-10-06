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
define( 'DB_NAME', 'tamquochuyentuong' );

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
define( 'AUTH_KEY',         'uW@ALvR}~ yhP.@w,K-P:L:i#6h2^vC4ja$e&[k%{3`/tl#91m.#iz3Z*.19=w67' );
define( 'SECURE_AUTH_KEY',  'a>ETk+DkS(,@J^#.<f~.gu#wRG@HSl35Nc{-%{**u%850t<Ap><m<R*3No%UWN!n' );
define( 'LOGGED_IN_KEY',    'YM_3|l`urE*qH]B5xocgX]vA #~&~Q[pqHw;XkLPh_QR-P_Ym/-caD$z$NYGy7h}' );
define( 'NONCE_KEY',        ';BDFE[1%ur.IooHMrm(5c<u.XY!?ZqzD@f~tMykPe|N+ZOM;9dk7t}(FL@, jZ]5' );
define( 'AUTH_SALT',        'LKXt1MH|l)h&l N.d6V~iBydkm.VXx YyYIy4Z{W*so%;_kcvd$6^;1`~+#]dcex' );
define( 'SECURE_AUTH_SALT', '_jaTPgGh%;=eAc}k}vq]zR0Yc7$-t8Su4hU0%jvH-iSS`8-ScI#d}^BwfSI/7UNl' );
define( 'LOGGED_IN_SALT',   '@tVqC[Ta:d1NOe6%e49=nQM4%[V_DbBw+-YqRl4a(:HFk$f=Ng7aru8<iwj*{2$;' );
define( 'NONCE_SALT',       'p!Wo?YNH_K[v32tR3.aN)(b?C*v*/nfg5>L=IW=E:~~x+5t<Q63~~o_?AEgBf?E[' );

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
