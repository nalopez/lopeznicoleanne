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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lopeznicoleanne' );

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
define( 'AUTH_KEY',         ';P/jMNl7ZX(cBMj&]`w>VRbGg,j+}E# #~6l0c30[|m5 Z_)HcQp@Fc z0{7*3/K' );
define( 'SECURE_AUTH_KEY',  '}g?I;&/WX~@Am6%1L%^RA[j9w.0Rd8;i}cR,%y0I?=Ex#*Ghu4*]^zIj^.F4U{$]' );
define( 'LOGGED_IN_KEY',    '.ujle#0s/7Ji<M~X#=g|ye?%@g+b+m24r*gv=+}c--utF4lw=dyc@p;HTbIVKhh-' );
define( 'NONCE_KEY',        '>Z_>{kM1bk1TM,y9kGP4ACV-F_W(gFkrpJX7;_0F*aDELpmh]A?K64(U(A_WP4F0' );
define( 'AUTH_SALT',        'w3zoboqZWI5uo4uUpbyBHI1v,F1JQL9Txs<,.FG<`;vOKpc;:h>i}`TcU~L_a&s5' );
define( 'SECURE_AUTH_SALT', '@U_+9&S#fb8jW!^hk;>JkE:euw?R+ukpIVQhQ5j)S?l,~P5R%LBRPPSBc/y;7y1n' );
define( 'LOGGED_IN_SALT',   '#qt73>UwO68MF^oWhqz~CkT.7R:y6?a%ARA6(JOxjYs^THVUuF5=@(sa&H)AT3Br' );
define( 'NONCE_SALT',       'w0>sV?*m+{bRAK,)4D/_wFk{aO$!!HC;b_p}1%xZo^ziEI$CzZ$eUN-UtA3T1yci' );

define('FS_METHOD','direct');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
