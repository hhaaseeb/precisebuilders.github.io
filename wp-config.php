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
define( 'DB_NAME', 'precisebuilders' );

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
define( 'AUTH_KEY',         'Uf,~VtS2cujUy}G&8PltCht=[ziIPT!>|Z=i7ZQN.v,Kaj~5(DID[5BLOIwTWU2=' );
define( 'SECURE_AUTH_KEY',  'DyI``k./n^ ks1yfr=FX.x2z@@{fz[JcE9cN/c7Iys~-1)Ix(CpIcZ`,&xslTB|U' );
define( 'LOGGED_IN_KEY',    ']y4.%Iw+X8irx`dnbcYRaKwT3!:e6c;|[:2wCdgj%M+4{J~7 6x:Nxaho*?dqA2B' );
define( 'NONCE_KEY',        '<V,]fr:SU3 /2H@ou)K/Gk)(#Tm=v{K(*3hmdvhC8!]oQhI@;w]bE7V<1mM7T*C<' );
define( 'AUTH_SALT',        'oYTUjXZXOXqL&G,OjA=6qiIX3zG=[n6&iXF:wBA$279IdgX;`r,YsqlxnFjxlt56' );
define( 'SECURE_AUTH_SALT', '*&a]p9k.RIe7DY+_Z-gi#ul/{gT|qfUJkaz1Nv7~Q8Y@??:=>xe|xGz534c)!WKs' );
define( 'LOGGED_IN_SALT',   '(nG@WM.vUEaR&=e42m%zSA~YZyP*bxejm~/I;<N~|N YIx~{/9x@T2sW&#;;S1n)' );
define( 'NONCE_SALT',       'om6 a{F}sHeLX}.?l{SYq;$9p%y;peN].:w#a=ypC&5vGGp./.hTp[n{Dp/*]kE|' );

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
