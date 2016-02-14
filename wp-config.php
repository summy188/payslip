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
define('DB_NAME', 'payslip');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '%Rs4@4@z3xLU(eev>3x>6Jz}k&[aHH6$>H}hJm+S0bR%C%t|}36h<&Kzi=+-m, P');
define('SECURE_AUTH_KEY',  'dL+;{sBzGq?%NVoU9+[aqn%RK0pJ|VGUP>aH1]KTeRa-*k$.tV=E2t5Z6/Wm]Gtw');
define('LOGGED_IN_KEY',    '8H+Wr#m1+6*Lf22G+!6skjgq1}+L{3V_x{)<HuD08C@jB%.wRF=Do/~(NUgb.P$R');
define('NONCE_KEY',        'xe@vx{4+=[Bf(A~kGt50PM)&d.BwOMPCoOd@k!*i&TI#|!j7|kL@V,*W`)SB(O(O');
define('AUTH_SALT',        'o2,PAiR|uRypK`I -NuCu:l)x/SPWl`sCE7[jv~pyiUPYVVQ+e^+~|TOpb_IA!]<');
define('SECURE_AUTH_SALT', 'p?RJo6D+*^zzCPDm>0FRoGY=+{%/M[0Sk^MIA!kgJRWS!kdbO{9YgE()D0ru,|gh');
define('LOGGED_IN_SALT',   ';x{7Usm-Z^5|F(1C0;,nj@^2pCo`wZ.rFD/|x?K+Ma#xG}r7/DWZ|sl< yhIp[zt');
define('NONCE_SALT',       'y^IS~^RK3;Ov*^./n:DX9QE <JyH{T>XPvkg}S,ktr|?~YzL0&6r>nM4@l|>O8v@');

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
