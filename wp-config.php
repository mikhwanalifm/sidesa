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
define( 'DB_NAME', 'db_desa' );

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
define( 'AUTH_KEY',         '=&e(#(+?)%j2K4lL#-~bV*#B1p|RMxNt%iL F[K<l8D|v<%hB=H2Ko0<(V7[+hzF' );
define( 'SECURE_AUTH_KEY',  'P633avUjfSJi,^9;CPv;I,.g[)P5BU~CCKb}hd|aH #ePfY!gSEP@FYa{Vks_Mw3' );
define( 'LOGGED_IN_KEY',    'oIQFl+6]<|<LQ~sxkpsXy#&B)ez2|9Ree5 3GZjE#`0FXQm>o%R04fs+>q;pf]Yp' );
define( 'NONCE_KEY',        'PuY15eRRYC=*-94i?(eifz,hy8A4Fe7A|Wm>>@]aj r.IPQe;rKJ53aQ9X%b:D]k' );
define( 'AUTH_SALT',        'IJ4/s9)iKinn&?RHsv+cE4(0kP:45~sl([*_*zC3`T$>4;9>Tcu0YoYjHIPx~w`$' );
define( 'SECURE_AUTH_SALT', 'QM)M23.MJ~yN =TN[F!qboNhA;[]fav[Piz#H :AGudB$8?g lTQ^@4?<-sfP=/F' );
define( 'LOGGED_IN_SALT',   '*p$PW)kB$LN/mpa}O.,K=?!wJ+,4Nh58M{lF9<x5V&jQkmjf]H39o%tG>aa:T;O]' );
define( 'NONCE_SALT',       'h]M?il(i=EmO;G!m<%ha4A&by5[2j)uD)/0k`E?[p[:2Ac#84&*4,%go7x{|y+<B' );

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
