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
define('DB_NAME', 'prodeff_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'samba1272$');

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
define('AUTH_KEY',         '?EiaQR;Da7CIU%X5>mUkxf-qsr16?7729c1PpL92<h#m}S#,>lE}Q4i7ycW_>0r?');
define('SECURE_AUTH_KEY',  ' Z/=)Gd)4X p(EyC)^C#b4[:s?DpL6iA~q74=zJ03+1qM`m7a!=ASsom[!X?0%o$');
define('LOGGED_IN_KEY',    'nnO}}z:fh>B_YD&-$N?R|ac.r]gox>Lv+Q^YbF)^&;E|D3xb,sm,CV}Q|]pu_LLf');
define('NONCE_KEY',        'r^DWw8E8$pFTHT:vR]=uIyU6[:~AwHlh9v#-L-<d5}d}lx9et&sEJA~S)/M|3the');
define('AUTH_SALT',        'Pd2P9G*fEYc4-,5,yJb.159Sn!Mo[32@P`3V@2Fvo)6&1BZh/ a?Va?{7ivs^Hc*');
define('SECURE_AUTH_SALT', 'GdP7[dFS|c*fbe~B`FW)LS;lhQYjZ HfPTJBA#DQ8,XfZc{v7RX=Pv$;3%Bv.D>:');
define('LOGGED_IN_SALT',   '@MG@@qR}/xg(ajbu^ru&GG/cB|I|N}okfY4Qs[#YWMW { D7]:-P!]z|6Wn4zvUA');
define('NONCE_SALT',       'zO%Zwr)CEV^%.-6X9O7rga9LA$UdtD_o>E7^v[VI2f*;q7S@r-{QC:7~w9SvC;6@');

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

ini_set('log_errors',TRUE);
ini_set('error_reporting', E_ALL);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
ini_set('display_errors', 'Off');
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'local.prodeff.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
