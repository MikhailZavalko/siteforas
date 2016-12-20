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
define('DB_NAME', 'foras-site-done');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'hY g#`s]C3}1Dbv1dO_uMwIQgKx;LY9r16Q^k@K_u?aI|B}=XXWm>(f-8^[kwXlG');
define('SECURE_AUTH_KEY',  '@6hjg&O:Vn{QFQ_v(Lv /xry(_YIS_4uF)qlkuR8?W2.95O(c+!L~kd!%@DMdEog');
define('LOGGED_IN_KEY',    ',@>&XEFb>ekARi~+Ss~~Gt}p5TzO{{IDOTA1kX%twqiV)t,[QpC(usMtXt?JpH[0');
define('NONCE_KEY',        '&T@k{r)vnzqf[~fqC<*o.5@r%/2Y`j099~;;s<p?;3,LY|$I.?a3p?=Oqy8: ?&[');
define('AUTH_SALT',        'F/NMBzphl:dTFn}g2|?pK$RSau@x?u>cO+$CT]=SauNIte$ qA7f/tMH+wqhaJu@');
define('SECURE_AUTH_SALT', '43Se+[ D$fxT,;((E^;/gPu*ht5{tHD*<p]w`:zaET]bdS@B,}eqyr5mfbg=6oV+');
define('LOGGED_IN_SALT',   'X#]KU;+HLu:%F{7K^(5jiC<C3BZ0:.vm2m[?U<+H)+`$]:pL[L4!L<r#tX1Zk?~c');
define('NONCE_SALT',       '+(EDFYtPDI.}rY8Z8r/,a$HTx0_3cV93{=tsqOfPJ -!/*1#V*(>f5U:}`u5/fPo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'frs_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
