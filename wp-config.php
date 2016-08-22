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
define('DB_NAME', 'wp_dynamo');

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
define('AUTH_KEY',         'IW3S87pL@X=7Rok;ItJD?MF9k9,yfRVOq1mRs.i&4CnsD&Tj A^MGqlwO8mB-EmC');
define('SECURE_AUTH_KEY',  'is@zjkpk5`$<~+*-}vI(B*2BbR.kJ WaaFITa))1(p<kM]>seIq./%&FIf;<5Akv');
define('LOGGED_IN_KEY',    'T4n@Q8k IybjIlZ6KD2`1%KI)DU;D+4:Di9^[qAp`/{Jf:jGKa;e<96WM|.PSg[R');
define('NONCE_KEY',        'QY3Hhkw.dYhpxjMZCHpF=rwZlJpR;/FJ+5/3AgU~PayKO z>7|a$$~a+!Q.;:yZ%');
define('AUTH_SALT',        ',/X~&O?[e_^>[|{/I].E<WnI7C7fr9^IH`^V8>fO_XA54.q0ryt;R8ug:+^~u^OK');
define('SECURE_AUTH_SALT', 'P^HgZ>U<c!fzqKL)3.7m#+[G)/1tDd]rGw_jY1HO_G}H64f LOl*,]?9s)(--S2j');
define('LOGGED_IN_SALT',   ']L5mTc~K&i$E^ocV.xpjj[3M:aUE7P$XB]pDswq_>2+lpzkeRu&`kI[<,Wg}/zDx');
define('NONCE_SALT',       '2Z:.F=*P5LTF*=99e3QLhJb9|D#6y3rtjuEnq%E}44X5o&@pdHfww1P)N)2zccqC');

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
