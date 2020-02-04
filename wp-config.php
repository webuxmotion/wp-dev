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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_dev' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', '1111' );

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
define( 'AUTH_KEY',         'dqC E%w2)LF-h m_]u}A148Cvn(tELjPDR?dQbrM) XcXx[6R`IJywx&+g`5:hJH' );
define( 'SECURE_AUTH_KEY',  'K;d/_Ph<hGz3f_y%Ua}y35UTzzHpMXFE>Oa<hbz_,q!R|$BLdizdI}S&7,V`m5A0' );
define( 'LOGGED_IN_KEY',    'lUCVX<%}p1@x?]7B-th>4-v}nUS)85L3yx:99h+aWYck,#7uc mLx.+)Vo<<t1TV' );
define( 'NONCE_KEY',        'c5(e0NA3| 2zBSC/M_,5xkC0.(X~k6!d]*_b?hry_f#){kweU{wdu}5Npr..P)/+' );
define( 'AUTH_SALT',        'IvgP<!kbR531DT.=H`2T~uFCf=$z:eAlbkg^=tGiVBSe+x-Beb0/{x-ipZg$qAZ2' );
define( 'SECURE_AUTH_SALT', ']2)Oc*uiKj|f$?1n/o/D$%% ?[6OA_dn1`CKQg%|F8Va^q:#9G327yj$0sT1fy=S' );
define( 'LOGGED_IN_SALT',   'subl|j!6Ch&.G>-tWP1*p7_W-d_EkM6juN1KwYM9>.G)QTe&[UsEfCZ%<aYc}nX_' );
define( 'NONCE_SALT',       '(MO|)V(,lvqW-,JF;5O1A5*(*g5`p]z4c`HR&20uLVcCwZihE&a@WRbPtt+;`7E0' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
