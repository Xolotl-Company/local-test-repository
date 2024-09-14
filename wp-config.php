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
define( 'AUTH_KEY',          '8$,x7. eUFuuZBos^f#SW(0XBmFl!p0rM&nsFfOlbsYicomf ^?39_I]Qr$c%yc+' );
define( 'SECURE_AUTH_KEY',   ' WxF()!<v*p}.?*gvK9cM}LY1M>QrH_P`2HP6[G>2_#fRT]HOMXc6sJf~Zw^U6A9' );
define( 'LOGGED_IN_KEY',     ',g@aC#-9X0H`tFjH6cB^h @.2N|28D.J/Wn|1ln:VCP.k=69O$/!_>8f<2XC1cF/' );
define( 'NONCE_KEY',         'A*s43-~u4?jw#<JjWFY,JeG%.&hFE6~67(~`)P Dg~M%ELyApy`YXwNAX|p*fV=+' );
define( 'AUTH_SALT',         '|sgn_ir$:9>dZMO.OLUU6i2k7SD&]W]R]%s=*kz?2$Vn,dTcRf0Jgk|.1;_hTp`!' );
define( 'SECURE_AUTH_SALT',  'na)pW?X!5O)TLhusn!*0BvVkVgX%%k(RFS&g3}O+/S#l7l8$5U)!aJ%JMoxLo=U)' );
define( 'LOGGED_IN_SALT',    ')1Wxhi>S3V4sa6#[|k!]VpHQvsl,-z<-[y%$ZGkq?CJ9^7|Kc7%{CxJYMGb!VP*6' );
define( 'NONCE_SALT',        'M0.]:Z d!-ys%gNLu6KYtr:?Ink$n3;<Wj{f~Y}Qoszfjr{h8pU3S>jJD;jimp@_' );
define( 'WP_CACHE_KEY_SALT', '7k0Au?H<KH$c%G|0fm?p2Hg&@)s)#uS#j.~_zf`6rhr5lKjmGOl:[y]uKPw);}4W' );


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
