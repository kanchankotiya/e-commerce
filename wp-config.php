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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '$L1hJ>+,c+#j;l9!M[Cur+Y0W +2F5P}SQ!dlwPYsg7a5R]I>U*lHBY7[%QRvvm0' );
define( 'SECURE_AUTH_KEY',  '@q2wwfjym+9%Z`ZU|N^Ezaa++:#CW8x7Z)(J mp8k*{e+5-&zIv.s>c.B3iw|7|3' );
define( 'LOGGED_IN_KEY',    'W+3fyHAy^ID>1{9RzM21HN<S#kQ32U/jQ|:`ryKhAJx=+Ubm5=F{WH#ALT;ETlVp' );
define( 'NONCE_KEY',        'HfJ+58PV#,;eR:{MT-BV1P:bgQ4>7nXN]Y)?GGRMU{q:IWy&pDi6nC?~FjB*:!fW' );
define( 'AUTH_SALT',        '~=1;1^K}.St9geLoS[H*0Oih|<%-+(_I+tL}t>(WM7pan #Mr yP5fJkI1j0R:$a' );
define( 'SECURE_AUTH_SALT', 'S0[ Mqd |Wt,x}}uT{3i`)Pc3AI`#g5e19:4 x!*iLEA>]]oMJ??updGgmf`:Jr=' );
define( 'LOGGED_IN_SALT',   'TGEf:cF=T/I5TPGhoUOB|J6ijt{P{0J3GVJl$6P_30l7pn=S;/[.`17ePK5Q4dcb' );
define( 'NONCE_SALT',       'dR(@XB.mgq87-wDy#]l8;Iwlg{oHzNqlR-gi8-tuaU;{DI`tz!2h=f}3+eT#hZqo' );

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
