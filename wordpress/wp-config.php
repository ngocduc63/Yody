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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yody' );

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
define( 'AUTH_KEY',         'q[Lf,C${9#_W-UxMSR7E!@R[4rH70-YCqw4+(#7<Jo4!Umbc@-<c>/Pr!~Rs&3)%' );
define( 'SECURE_AUTH_KEY',  ';G*KN4#~eJ=0a_*j@D Mw(!]q&)%fG ~m6wtQ.HfxnV@bs3^/k&v,K:T+$`(&JFZ' );
define( 'LOGGED_IN_KEY',    '/WmiGM=BA$ e?D(-}ZrdpO@ O>YfT&b$:n.+MU8>o&XtRotVC,^8VL#D-/3hjl}~' );
define( 'NONCE_KEY',        '5jc{3;u#*E&}5wF]qcy?S:Hf.WkJx@w+q9D*#,dj8Mm-!9C=:b1B6{qYx_4ny!`D' );
define( 'AUTH_SALT',        'v6DZefD;gkyw$K9n1EK024535B7]YkJyMf(</^UZE2W5e&P$}8Dv++]N;eMMDx?9' );
define( 'SECURE_AUTH_SALT', 'Hd2UKs6r;dhN}<ae>OO`ct>~9S`i5l_JkVP6MFyBg 0~~xHHTjz5)d(_rQ69b!/8' );
define( 'LOGGED_IN_SALT',   '0,QC. hpICtVAYgP{Y8[c i.e@O79!.Tr*}k3*y:_WpPNl[[nmYARo[{ g%lb}9k' );
define( 'NONCE_SALT',       '@0F7[OQM_T1O-XDE/y.&$9o?Pj?6.JOoB5VOku|I~px,RX+MnaV<?ZFfLhr$R7_4' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
