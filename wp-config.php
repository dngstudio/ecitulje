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
define( 'DB_NAME', 'ecitulje' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'GD!tq-&rPo2IXt)J]VEiE,kh:v9^L+7`@#8;{}-N81rBX|K-`HI;S]X_=9r=-=3-' );
define( 'SECURE_AUTH_KEY',  ':Hd]w]Rx/!e *^z`W!hVNh6^U @.B4Tdj5~sCwR!{7tu5=;XX$B22ks:hOts90x=' );
define( 'LOGGED_IN_KEY',    '<Y0i#4)%~5xvUs :M{t]UH&9DC.|5~i0-IGP2~KO6DX_kol)cHp;M~8)?5zcnx<,' );
define( 'NONCE_KEY',        'm$/{b:q@D~33*p%fiCK^CKU+m{_FMLAp|>-.gD%:IX5x#86|dt$dw))(JHVE1aAR' );
define( 'AUTH_SALT',        '8{NNxNJi|)[X6p=(`uf5UIyh|}!i#R~t/jTH]<l(P_r(tj|#?RJRDI@2;!QRvHe/' );
define( 'SECURE_AUTH_SALT', 'i2Hr&R6q51Y<96zuTrMPGG(U6<2e1D(l.ZSH0tKj!$5t;O5[&!6&-uU3^wG:/vfU' );
define( 'LOGGED_IN_SALT',   '-;IFBi`Y`t/Jw,8I[K)?+1*-i06rvf_Eu+drLwC8,&mHF=+wV61Wd{zDxKHfL jJ' );
define( 'NONCE_SALT',       '=!:68:J.t!9-/tg[W2~$Do|bYTDpWx6Z&yOK,YH(K=6Vh]H8;EcDgra32,#p;9kg' );

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
