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
define('DB_NAME', 'JCU_Alumni');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L1y,+<Dj08cG4!krqMURQB=8XuCptT`q;uc{TT(OEfOoF@)(@P%|9(k`I#3:B)+v');
define('SECURE_AUTH_KEY',  '2#%D=)&O:ZZ<S.y%FF%Jf-]-0?$1xO@23 E6Xh|(V-]c&gvm?4R0X![vAVOEXBjw');
define('LOGGED_IN_KEY',    't`l,DskZk4Th1w31rCr<>]Y<J>KR4=I{.585!V+%-/8PU&T n7fy,.kLE{p@O7kB');
define('NONCE_KEY',        '^gcr!gHQr4$9h2qt `M.H^Q08phnJ,[kna)-a~oiT]3+*gaA_q0I9Q3vpn?+?H6A');
define('AUTH_SALT',        'R*2&M%RZ.kgzl*{zEsPxhbvq8RfD34zG[.F@G&w|ipS/>pO}t#X]B0pbp.A_gj/[');
define('SECURE_AUTH_SALT', '$9eMi_bIE>Q|VxA5 &Bv_zd=Q=7 ((*la:|PJ?;wNQ!eMSRA^A6TXCIVU4RAv@iu');
define('LOGGED_IN_SALT',   'ROb-U8NBLOK6%$Y,GvvE<>Ey;4(>xrx,6yz4<ljO]_DRhJcoYfr^^4DhLV}Cvt>+');
define('NONCE_SALT',       '`2J9(;m)1=|?D+Q8qethSCs.yu^%W8Qbr5N[MSrVlHmOOd`T7}OTC7 *vzp<V,K]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
