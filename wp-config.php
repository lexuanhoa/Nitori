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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'abc123');

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
define('AUTH_KEY',         'X4%~afwC)|p&N7-hc8W=*u@S;e(l>{M7rfLrA{UcvkPFx*|?a4+g%U*mBH:WaaHr');
define('SECURE_AUTH_KEY',  'd*Q>rB+#qos8`TeiAU|5 {-Ulo~=%]Ay_]M+}/,Oa5ur~#kGv6>!n#g*<W5Ti]Xw');
define('LOGGED_IN_KEY',    '<}UQiv{<Y(Aw>#sKPX9,H>g~?G,/%E{RA_(0d|1TnZuYK:N-.rr=-OByNY0WB=PU');
define('NONCE_KEY',        'MR2)aC=O*[Glu}umSb/09;i%|q#`x`W$(Bla!1,NhJ,z95G+p{Jm_L_lleHOcaUv');
define('AUTH_SALT',        'Y/6+N=Wqgi`Y$2NBD7JsmdnP{N,~ZYe_]T#u@w-SnIpcf*65L/Kj^,7Bs+n[RoEi');
define('SECURE_AUTH_SALT', '*;Gy{V_U8`$jUoRGiFFf7c3R@[BI2+j6AA|joRB]F@`{DzCLQ_)&U_?P.8TUAYtA');
define('LOGGED_IN_SALT',   '7LyjQ.IsER|?Fo:~.XI.wc3]@.sGK/6WB%1yF3JfwV=3oJ~-]i-jH8GKI{]y(ho-');
define('NONCE_SALT',       '8Mk8{>hF[tN5j{[X?rH.|i90zT|7>2Ms]z!Tt;dP7NX`Jvc_]KWKjg,otCcY,N1S');

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
