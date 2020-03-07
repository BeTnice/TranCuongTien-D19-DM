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
define( 'DB_NAME', 'cuongtien' );

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
define( 'AUTH_KEY',         'j:AF~&,hfx:B`p39#Q0LV#Cug1woM!>BaTS&x6DyC?<7Tmnwpx3]0Zl(e0HA(]Ln' );
define( 'SECURE_AUTH_KEY',  'kZ{L#CG*=#Bm5#7N!AP#n8EsP,]#HkxJCQ)ttLn&Q=zui.zN- =lqf(xq/25rZ>N' );
define( 'LOGGED_IN_KEY',    'Fq{La=eYW;f}H%R0r#1]5V?M|3[`c|~^%{q|ql#)>b@C|O7nMFAa%Wl}}S5~4=]S' );
define( 'NONCE_KEY',        'V8#!p28{3MMoCON[+OA8]_k{2N!,L805x}g%>b0Hwm<KaIYcxZUIB5SLs7l(uD[$' );
define( 'AUTH_SALT',        ',Ylw$eEsA5#53ln#*~Y8Wl0i5]kw^Jwa17l|7G..1+8o.kI/1dQKH9kL[jPb{B-M' );
define( 'SECURE_AUTH_SALT', 'g@>BADrEy%3%6P3%zgBP*#[yy&*L~Ju)3yBe07Yi,ea^#5QilIc`vTK;N?X; SR]' );
define( 'LOGGED_IN_SALT',   'y$ISYq[-n?rl<rcY;5 vMd:5  2EtW/=7C|7G;e-%eTzp457s+tN_)D_Z=*%_3%K' );
define( 'NONCE_SALT',       'gL@r`L[<lM}[cz&HUc@ AzP|xTPF=~<fQwXG|ckK6RAW,?vDY&ltY;,o}]@GHF q' );

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
