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
define( 'DB_NAME', 'rimbank' );

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
define( 'AUTH_KEY',         'ffyNFG^b1yKA?A3I`pi6~A|KX(jm^RWo?YTXeho Sj+@`X_3/?$UgwJ8IInKG]FW' );
define( 'SECURE_AUTH_KEY',  'h&J^; xY(G*+wusi?C$ehbeEqK,` jEPmS`Hk{F.T? [uqM?i32gB!R2=1r7Vn$J' );
define( 'LOGGED_IN_KEY',    'KQdE7$j;8( $YNJ]>TqRp)U6}*oLp]fdn/GU[aarewSpKllKNax+P1NbS|b10@-;' );
define( 'NONCE_KEY',        'q+9G2l]fgH~~2%=W[!Nh^{3#Vgx5T?3SIRT6CR:?kpkIMw-HQEP4x<QGW*WM|`5*' );
define( 'AUTH_SALT',        'V=Rb*M7+OqH~>uT7Y!hBs+2ZBGflIzl]$r17*DTZ#av/C.6#jaIe+S4 `QS!b )o' );
define( 'SECURE_AUTH_SALT', 'ej;8xMBB=oxGyn7;6b++V=k9M]$H-(1,)LhC]m~[mZUzadc0:Rb>MY14vA@ot zI' );
define( 'LOGGED_IN_SALT',   'f l9w{c#:dzB(,($/$P%Z?yXcmD6mqR31rk).nibf=^gXwU;e@K*Y~I:pQ/3Q+(k' );
define( 'NONCE_SALT',       'oOVp/8>)=Wkcgcni<#sh%G}m7:rbrkVs0Z)4.Kx:TF&vhq(YN5Z;7PW~yznT:my-' );

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
