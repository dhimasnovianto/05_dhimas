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
define( 'DB_NAME', 'dhimas05' );

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
define( 'AUTH_KEY',         'wb=Mbcs.>:jyWVicJK|}QPWtIX7?0Q&P?YLo+C6N)AqR;qJr}1j7G1Hpp.PBa-_i' );
define( 'SECURE_AUTH_KEY',  'UlJN(ao>KUPV= nUat[qZ1- L{N|_VO^Iux}>Nc<38;chG]p-wHGXmDif&<,vX[r' );
define( 'LOGGED_IN_KEY',    ';T7MS( eJ-7]0UL3|x=fmSSt|z0,{t$G<^M^[Mprc<mjQLSFa~-}x4Lu}$*K/hVV' );
define( 'NONCE_KEY',        '^(rY._xR>7u aBUm518{|em ,c1&t,0qrF5wkdNe]c<N0aXEAFT8jx=D,z3d9c1&' );
define( 'AUTH_SALT',        '$>V-^F#Hhx7Rw-$A={1}@FU4?}}CoaL,8M{By8UtCh:g]e7Ms&RPTCm3i>ySG>ut' );
define( 'SECURE_AUTH_SALT', 'cAp6=uM1RvI| p~,lmE=*cxq-QdUt{M;8=)<g[DgKXNQLq(@3Bx~z{fP$};jGfSI' );
define( 'LOGGED_IN_SALT',   'MmNACRxiye/hUoHx5QpE<6DM1+Mw  4fn$OpT~[f/ Bz>>8}s]<@1:hp_P,SKeuQ' );
define( 'NONCE_SALT',       'y{{{|teIw&Z}4,mnF]M0R>*m~ >fiHCPV<Cgvx@1vZ8CBSuSCU?jVhch^/+.k1,!' );

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
