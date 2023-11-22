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
define( 'DB_NAME', 'demowp' );

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
define( 'AUTH_KEY',         'bxm%T/pJW`58l![Pju^3A6C2wNfF=*jL>Eb+Uc$ewCz_^{Rl3TS&3`$ISp7U$tvs' );
define( 'SECURE_AUTH_KEY',  ',+XL3J1^tEXE^1KC.q)H,A{69AZf2r5vc9F7>:fLl@!vU=Gq*!r~zZ&b`d5Q(D$0' );
define( 'LOGGED_IN_KEY',    '=Zf@l-;[EJ_ch&%/vz2V(l4Ok[5qLapUI9xD]MtF3i%=lrjK6IJt1|UDZJID {<1' );
define( 'NONCE_KEY',        '?L8oNVpds7ed).;nrxLTL83p~LYZ{7L,Xt-Ur<FhsA5&S,#m.n]g#3)J3?E(K>#s' );
define( 'AUTH_SALT',        'XKvamqc5kj;jnpnWeV}.AsF[G{OcGoDQ]4cpi1?Bj/fN-V+:P=dZ1q%I7-`JgG|N' );
define( 'SECURE_AUTH_SALT', 'kmt6zJ=((@<ph `pYN,Q=`E=e@Kh7y9]_TDjw;^/0bL;coZl+d_:OI*cj2oQP/1P' );
define( 'LOGGED_IN_SALT',   'kY25xdIu|`Cjn&T)3M5$YUTtssA/M=)4w,|`R2+PD.F}gG1 O rB_uE[B?:3C&te' );
define( 'NONCE_SALT',       'MFf|qx[E`61*.N#j/I<F0qiVh&T1+HPH=vt^Zw5~3{r4+Wd 6x$y31Xx2W{z_k,5' );

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
