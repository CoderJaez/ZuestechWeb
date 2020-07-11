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
define( 'DB_NAME', 'perzeus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'chummy123' );

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
define( 'AUTH_KEY',         '@)GpA8r^[4r.rrJ<k]vt b.{%f~`%zVv.qp6C>&q@PQ,APBc0gvv62A{aZrc*#n#' );
define( 'SECURE_AUTH_KEY',  '= AsL`C_U]na}1qzr_<xOQdSW]9S=shN^fgB1It,JQE7r & WAm.L(C&=!R$(w;9' );
define( 'LOGGED_IN_KEY',    '5Iyp=-b-*$.*d)wb}|IhE>eNZ=057|29 W~.CUT@$B;0A9)IUOT.NI>;Pxl1808&' );
define( 'NONCE_KEY',        'if/IP#-53D,5RiB-ZCoWr.<?O+o&m6LT6_0xCJuK+(xB&bfDx4#WZU`^96c;|  +' );
define( 'AUTH_SALT',        ')L]{,D)cY,s!X7#[1k T;`>)pQ&Y7A}Sn8=6x0{+W<z)C.gw#nqXkkRBK+zP8hx?' );
define( 'SECURE_AUTH_SALT', 'tCy%pxw`v#^%x-<& sD1*5]rzmtanXLFK+.Ywf7?;yXSaTJ=W]ZtEf|~Zo2,:2[J' );
define( 'LOGGED_IN_SALT',   'xVM^o`DL65fEVtHK lp;xj{(- 64Wtn{SztEST&lryCJ`,&HPkF(yrDxhhqO;+=r' );
define( 'NONCE_SALT',       '[{,zkDXkWs;zqq!spKpm![z/ <_ltAmn=vK+LDI80;OVWntg&v%xque6AG{h|Z&w' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'z_';

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
