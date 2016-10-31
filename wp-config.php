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
define('DB_NAME', 'ninoska');

/** MySQL database username */
define('DB_USER', 'ninoska');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         '1GnM#EkNTB 4!@WJZ]Of0`ri5j^%e?DZ`^iTxur|#`YcXMBT=}K <p/z)lu`3?h;');
define('SECURE_AUTH_KEY',  '{e.f[xHomol/D9]Gf0G2@_3+$#m,`kn!Y!MHl(zu2KXs*U--YnH0e};-<2EtAR.u');
define('LOGGED_IN_KEY',    'm.Qc(*ju?nUvoO.Za4R@ Y%cs !&i,C|q]K[1f_6F$&}H)qaXh-]GMtt$Zi]1HEv');
define('NONCE_KEY',        '?+)C>NmZ;<b]$<$D}u&><8/7)WzyPWS/q`P6LofTM*Ush^Xe,IwWXEh-^faOp|X[');
define('AUTH_SALT',        'JZ:k$Ee}w2JhuMiJ4R~uhM]8~<0n8wZ?9|8834Qu9u~jLU$3-/4fP`iDD*G@{UFM');
define('SECURE_AUTH_SALT', 'ieT;@V6`s?_G?jCr<H:|XjxQBt)&T$+tPE0yQ>nx+1n5JC[_/pWW;F$nwA:_zAB<');
define('LOGGED_IN_SALT',   ',K[9sZV/y( -2<C+xEYc#|BpNQ=/dRh#NwB<166th,05Cx%`5L95{o^&~V<s5+z/');
define('NONCE_SALT',       'G*.<>8V-BvVMXI,.w*?*M4`LOQ``{6 nB&r$^yR`xOA39#HsTPbDq?&C)r_>nQq9');

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
