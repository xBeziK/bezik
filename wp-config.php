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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '6^_)/s@_^A4NR]*Q{8_%~HfWG.~ll@i:]&b4rSS.HX0Sc</hXScK{hT6vd4TV;9F' );
define( 'SECURE_AUTH_KEY',  '$y`tm}jW:.{s2dC()v#_J}gSF1rTFf9FbHBq[W*vw!Ysp_7`spR-Y<.BBzi!s,tm' );
define( 'LOGGED_IN_KEY',    'y)fG1*cRQiyF1YfY7S>,0M*Agm^[w{9lhsChe<0KHLQZ+DOg!`RciP&W6F^Z(YiF' );
define( 'NONCE_KEY',        '<ePW3(-!cxj+sSELR&99xYDPBQPNGD5I+:41S<Kr`}.OE=hvh=v$e8]dr[5fu2h$' );
define( 'AUTH_SALT',        '*oDL5_/joWY:tmD)akg*=zTVpim qu}-I7m>KSurp! %vgORj8VpFMNNp9aq/)ir' );
define( 'SECURE_AUTH_SALT', 'ketcS]K md51#?x/Nfp3d)bB:zu>aGRH9.+P60]B!1ikE%=R9<ZVn6a^rOG,^Vhs' );
define( 'LOGGED_IN_SALT',   'Hh}l7tPz$>LJB6a(Xi54bTg)597e76oTlXoCYqDfvovRoNLwJt>N}@^rCHB5^KD5' );
define( 'NONCE_SALT',       ',{p1,&]^!/wnG-)lsd,,yha,!;|Oh`%tj-hV#kh},7P]De=0|8:kpMl(*&/f=Yh|' );

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
