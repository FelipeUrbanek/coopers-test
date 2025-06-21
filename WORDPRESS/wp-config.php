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
define( 'AUTH_KEY',          'bC|Jqd)x GKooqw}_6(]/)s[R[YmL9+<[DG(S@eYT!@LInCi&M`chYo#K#wbP9;+' );
define( 'SECURE_AUTH_KEY',   '5,`;i9GAEy!4;C7$kSoq*:ADts8@<qksF&r-u#`J*|O|LpaMw$qe<6er@g L>@}I' );
define( 'LOGGED_IN_KEY',     '_zresS!K;[,%;nS#S&wYdNCh!&TS>1)CcaVuz%kq%VMQ`KE?3~}PC!*66$$xM[fP' );
define( 'NONCE_KEY',         'p{;]9`k<>`/>!5k/[FTH!Z$wH> >sV+`/`Wf!u1E~7+ g+}rO%NwRg[Mz$Y5Ae$4' );
define( 'AUTH_SALT',         '5jW_CEpT 9mQW0`l;oFX.hjrU.|Na<)AY:$U|5Lldl&GT(eLS3!,.i95L?>pCD[F' );
define( 'SECURE_AUTH_SALT',  ')QhjdO,y%y;HZc=WRl5$v0v3Ol@:axPbG5]CX?*:D(TuzUYUPJ5]Sa4rJz|#v m_' );
define( 'LOGGED_IN_SALT',    '24w(CCQ_$H$W&c2jsNQXS8vbv}InGlTE<vuBg.o,NV4!gJOK/$a*b?+vHY1p9|Fy' );
define( 'NONCE_SALT',        '4BX~D[[u%FupDH(>~ou1,Twk|+>lKO6mQi:S&e)K[Bt.{HdikP9Bz,geBp~41j,U' );
define( 'WP_CACHE_KEY_SALT', '=Hn:iXd3CdsBAH}1g3MIL$Nx*&2u#S7;W;e,(=>r7MJh%rn-qF0Fr74KZN~xng4t' );


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
