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
define('FS_METHOD', 'direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'secretaria' );

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
define( 'AUTH_KEY',         'B&DgZJ:eBzI2zOVo_R~ZYD~K.j}8zr.|rReLWxN3/7fkfT6F &g%}|}o;1.ARsOA' );
define( 'SECURE_AUTH_KEY',  '-j$0@a<i]md8TP1jHUit2>S,> u!2XO =m1_`2D08.331M 09&|2l*RZU@OSeW03' );
define( 'LOGGED_IN_KEY',    'R`mO)ZmU<dYKz`=kT36nG$Ex~0(~7D`=^F95OK}j(EpfVj542%d!P<l>,$x>YVK@' );
define( 'NONCE_KEY',        'm~HuJTNNB0~|7Y#Rt&|=)thJPWk7V=Rdl-i*Qdoo:?.=/W,^h5dQsN&;Lvg@9|h%' );
define( 'AUTH_SALT',        ':6zvPb>jJyy6B}^{To3c%.1N*GL.z(59dtAl3&|MrIOkaBFQ56vaW]C7Xhqhpfdb' );
define( 'SECURE_AUTH_SALT', '7r~P4fuT{2dU;tbu=]KY9+bz!C72Ozp1 rhFA&d^;.)HWPt{e5tmJj;$(#@0dwx(' );
define( 'LOGGED_IN_SALT',   '%wI~iY2Z#>|:8{=~s;b_-2V&X;4+*>Hb`dD-!Q9<O_`W_Y$-ZD.sM3.{ybp8pmy~' );
define( 'NONCE_SALT',       'KTkb@W=54mNMM`%+RDw6FH#KCPOo/nHpT3UKdDH.3P9ZX3)Q58#/Wnh&^prbIunQ' );

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
