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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\wamp64\www\wordpress\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'team03');

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
define('AUTH_KEY',         'c#FV:5[^&?~-In SDB3uNvDtjC%mKX=jftwwD#aOwrr7>a UMIFN5!bJAF_GSEUx');
define('SECURE_AUTH_KEY',  '?rz3aXCsm~LZG`!G1d)3MfxpHr}%hAApO@jSWCUn=;lO8!Wi.p#z6n0#2e;?I!<j');
define('LOGGED_IN_KEY',    '1?Au$XB>s1w]F{z R)`9|n5J0D,MCV^S206sv_&u6$N&B>|9?DK[d{4h$:k`i#tG');
define('NONCE_KEY',        'BIl@$/N!h#6_/GDu;E+>(zk[%UY0zl._%uFv!BpY:GIV6AtO-[gOZ4QqObC~^LcL');
define('AUTH_SALT',        'G(e003_7pZAI}?>nvZA[Mr~eBv!^l2$9$wql_:R!!n:z_]UXE]FN$qyik`R,1(S.');
define('SECURE_AUTH_SALT', 'ST-|qp127>IsB,Q=tJb)rmD3T7j^+8:MVMPKa,zb>_8HMODWs10W/nMdV!>^D?T_');
define('LOGGED_IN_SALT',   '<t4$B!+TS90:M]*|(Yitwo3w?#`E_`nD+n{51Pi8`t%K=cB~HuRB~HlDO4Hb$uH3');
define('NONCE_SALT',       'wb<+!S/Wul}5./wly:Mf[,k:B~$IURYk&9Q|au>!ox4[J),n63Dyxq}T8=V4_yW8');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'team03';

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
