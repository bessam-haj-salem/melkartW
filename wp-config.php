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
define( 'DB_NAME', 'sql7368725' );

/** MySQL database username */
define( 'DB_USER', 'sql7368725' );

/** MySQL database password */
define( 'DB_PASSWORD', '8NesErdDBx');

/** MySQL hostname */
define( 'DB_HOST', 'sql7.freesqldatabase.com' );

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
define( 'AUTH_KEY',         't#X@tH.],j5TIyX>DkOC[zw*n0+73-AN;k/(!JqK&B5AA}>uFf<HT!rzX[`}/>28' );
define( 'SECURE_AUTH_KEY',  '1CJ:B: .(~Ubr#BbeO`8O0-yDZV>pZ~TXv&K),_`nJwm5>Q Jn8jd;7Pt8d 9Jhh' );
define( 'LOGGED_IN_KEY',    '[rQ:(_3K0T$b_jml0x%6VQdC:Ypt!z0S1 zZpdl.+khp{+CI/B^D.?fK,rn78_%{' );
define( 'NONCE_KEY',        '[!*|$#xR<,@]H3u_{Y_fxR0#3wTJz5=%r6Ng)wsAl03O9g>h0JX1cB3wl^}v*yG~' );
define( 'AUTH_SALT',        'm6zyrTeOaqQ9yN?dy~ |%.u|2uOP,Sj?q71gtf1u/cv,024YomQw-`^9lSF3G% w' );
define( 'SECURE_AUTH_SALT', ')B#PKe(za 6I|BoS2dRMYAD`mV]0Mf+f&3IWx>d>~E0w*&$wqdXYv%-N[.D~Ibl5' );
define( 'LOGGED_IN_SALT',   'nprbHC`<}$u0yljcAImF0,Nr&BS&ZRAC:x:g{00XV=&CiJpPsN*Y)Y8G/mLx3ws7' );
define( 'NONCE_SALT',       '{J<o7,PR%5>&w>x&B$1(c-o7cl$h1GxK:O=lwo#_w14fY6/,-J#xiSG(JCP7DYv:' );

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
define('FS_METHOD', 'direct');


