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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'vzNLhl=4;OQ4@jw._n)J<z3@q<m Gw@0!70bG!T[Y3oWxJG9B+4ab2M2~4z?hddq' );
define( 'SECURE_AUTH_KEY',   '4hy^^*%eq fFmL%?{5h)?2UjWya(L|rd2k=1h0F>rZFK$vDGd{*lIwu*~UqNe;=t' );
define( 'LOGGED_IN_KEY',     'P07Hp>4.84Ae_kE:E$s2D3be=k!Jf,6$C(WsEz*u*bCCAszDP: z/-jx D-HQNUL' );
define( 'NONCE_KEY',         'vIBM%poDanj<l:;Yl/0#G7@`?E%XyZU2nxg,JdCJ*lu[&2PJ:gylx?Q>i-zTTgQi' );
define( 'AUTH_SALT',         '+qJBCW&z7 1x5tr03n*[.yP/|4;+AVJ4X1ZY}-#)<0@[KO3i{:KjGmWL;QM$P|#i' );
define( 'SECURE_AUTH_SALT',  'ed leNL(YPfLd,/m.0E<BZ*eECZ[!dkd/nb5H!MitwkmjRz(UQb)6<<x}OPZEcT0' );
define( 'LOGGED_IN_SALT',    '`H|NBy?XnTef<?m]x!cU8(qF+O6JAhHR,1>]3H1L.i6G$OT_g[=T)#8AX5UuK4!t' );
define( 'NONCE_SALT',        'sUpD,q+h*KXtw/Wh8mDWyaF<M]0BVt0!}/+7ug5UINe {: lT8AF=FFnvrLBS4r?' );
define( 'WP_CACHE_KEY_SALT', 'zvw^}70KLn9W118?C#IDx0@2J;${3?:B)od>RL-<dokcZ+.[beJx$=G/P4pQTU!A' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
