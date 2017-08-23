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
define('DB_NAME', 'prodeff');

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
define('AUTH_KEY',         'KXP4~t^{)Cv6DbTrD0PN7J)Eg4R>.#FY{_QG}(L{H7tX2U_n!,okl%)A>OBb#mVd');
define('SECURE_AUTH_KEY',  '+?j_fdXl9a-<=X4!2/nu3ZUY|__bBW%|wVHNw&03_ P/~;e2*9>TFu4v-ddQv&1C');
define('LOGGED_IN_KEY',    'y.{LjB2=w1o7LcZC2}tVQ[ 7C3(3D6=Q/CX]oS<=o1>pleMGbx%7uo=7%<k<[`76');
define('NONCE_KEY',        ';-z;{B,:ijVHP#r2@:+5O^[bx.l^&`[l)TMc9n6j~X%=%&nj]8,(r7vv5F<t Err');
define('AUTH_SALT',        ';z^9%JGY`a^P@y!]ZKU=C%]]YvmV2V%ka)q]o@d*24^(EE|<t2}lPVIg<be*.W6g');
define('SECURE_AUTH_SALT', '@:qIk7T+mz!AB()}zyv1`1g ,^]J:;|)-4gvdP!w2#`FPTy&nUv$L4$^w?]|m}5}');
define('LOGGED_IN_SALT',   'Ji7*.{#6<2VN.3o~$ou$Mci,n>I&I>)r&y3{Re)4/Z4@Q+JsE9g;|4(f7V$tv2RL');
define('NONCE_SALT',       '?-1XO-2AnP;Pd@e/3U(r2s/X[{k9kb.Ujavq_yDjP!X?p34bEAI?1Z;|avI$kTAL');

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
