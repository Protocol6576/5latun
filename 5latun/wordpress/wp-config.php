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
define( 'DB_NAME', '5latun' );

/** MySQL database username */
define( 'DB_USER', 'Admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'giveme5' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '2W*>DY_o(dyGU!G3C#w(gt3z-BH{*5_Mk!m}MmVH.k)W.lz-5!VaZF<csZ<eoc7@' );
define( 'SECURE_AUTH_KEY',  'BN5^{`&7S-;LHP.L~s&dD{-=c^V@%ha8#-Mf0!oleT~s2p/hi1-_M`b2Boew?uAL' );
define( 'LOGGED_IN_KEY',    '[~eohIa|qPxBSAnlt4ek1!eZ`iFF}i2Vp4ewsgpd|HHkqf-JZ!x({(h5/Pqu/#$*' );
define( 'NONCE_KEY',        'FR}dop[:GUYSa#&d.<F4R(fUHJWT>I4:_0&q0L3v+(*od=wV^TRAS I{FK]WfQ#9' );
define( 'AUTH_SALT',        '$u<ka^mCAQE4^UPYmV:_Dp%cLDY_M%EnB=Tl2j-49qicv-S@287*D[`V1C1$gfj%' );
define( 'SECURE_AUTH_SALT', 'i%+7mxWKJZ}m`3XZC8!*~uwsXavv}^$Lbq2GKeQ^P<@_z2NR%*m[ylAu76MKUFHL' );
define( 'LOGGED_IN_SALT',   ':hnW`Df`I+[N9e5))hHSm9EMIUW?HM:iipr@RfU8:&UElsu7fd{I/I6d-`n`CP7-' );
define( 'NONCE_SALT',       'Ldb4jk^ 1o>PZ>R=ClZLq1vT&u9A:PXJMU~-[{9u;A=?57ZRNlv_y1YVY3iR>y;c' );

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
