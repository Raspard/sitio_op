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
define('DB_NAME', 'sitio_op');

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
define('AUTH_KEY',         'N3ybuYfYw+O]5+eK52u8w^oc*W)}6G{e&}C<OqeFeB}qNi^hv&L|Cb?AIJWg?q!D');
define('SECURE_AUTH_KEY',  'fn;m)K^REw0_oOB%k!2,oMN(-csB5oKqrAiuf_Kp0sO?&J(Qh]bf+?eLHSMh`{9+');
define('LOGGED_IN_KEY',    'qf}&YyX9Yo%{ >&JJ+=rrxk#I!; zRA`+-nUy@Cy8hYnDzrs!g_R3Cl(J0.VhikE');
define('NONCE_KEY',        '_r|oT]!(8(|@{g<(XUJbCpwr]IA.Tv-k1x=`j+5$:tlqnPGQ<UtWqvhM5w_X;&F9');
define('AUTH_SALT',        'nY[Kbv.Q)|A<[bC k:y2*AtX}yF{gvg!f=jmu<H,/L*;2xb<S_rx/T#1X~7-!AQ@');
define('SECURE_AUTH_SALT', ';hdl8JSX9?@6S2Lc#i,EA(]UP]6(Et6#z)V $xk1Y!%];^7dj~Y43K|_2I#t4dSX');
define('LOGGED_IN_SALT',   '}Z71o0iOWi=qG bo]]3~kZuYUP16Yk0)(QI]b7d3gO*xi:=Z*OlWU`2]B+r:jb<4');
define('NONCE_SALT',       'Y1zmA.ZFD+cUKdy[7CCL_Zsu{yiG4xgRUeI*RH?FOkRke)/:FdCjs&/QDBq6K|d/');

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
