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
define( 'DB_NAME', 'perez' );

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
define( 'AUTH_KEY',         'ty6}`d?L<GC+0H|F_:7w/05[u+C%zcK)!eP!0xu~cKq];d]6(.GC*JZ_pG&^FKo>' );
define( 'SECURE_AUTH_KEY',  '^Aj[CWONGH[p(IXq-nF=0Wa=NOW)dTVV#v&Y[&YsZx5tU}JkD~clQWTdBX3@s.mv' );
define( 'LOGGED_IN_KEY',    '&tX)J66r@Kn{,x;a$Z?>$k@yFJZ]=qpG1l_rF-(sNo`zx^OodOem/V|=*SUI4<G4' );
define( 'NONCE_KEY',        'SR 7g[z2TXR~jQwft;)uz;BNXIMBe?:_Fd3WD9hd*=hA`Pt@Ve2Cy4m~y..s.6JX' );
define( 'AUTH_SALT',        'qitZbP-zsEmo:)+a,[SZ#>W<^LN Tir)+/(QmkNW]G@[.q 0CP45&ZaOHvwv1]%p' );
define( 'SECURE_AUTH_SALT', 'mf,38f))t<DA.Q*GkX%~o/>sQJmSkoF,I>:fn#ye.#F|FNh8I&s%4UOP`{qPkA#8' );
define( 'LOGGED_IN_SALT',   '@5MyQsBN;wgocz,V3IHO:0 a7W2/PPL[N%@:`8o8P+2cC;4xcH%t^{bw^p-iQ]uP' );
define( 'NONCE_SALT',       'wa;iapi@pprf_BelzJ,$H1_@ 0o#JrNV~;1vOw)Z&H^I[gCMFSU.[}?8sr68TFU>' );

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
