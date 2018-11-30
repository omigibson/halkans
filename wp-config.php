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
define('DB_NAME', 'halkans');

/** MySQL database username */
define('DB_USER', 'halkans');

/** MySQL database password */
define('DB_PASSWORD', 'NyWebb2018');

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
define('AUTH_KEY',         'Lia<>[xhGih/NaB7s1!$Y_jKGv}pj}1` W$d~O>4UL|mDyJzNV5$$1VysGGko~vA');
define('SECURE_AUTH_KEY',  '.1juyqm<m6xgBvS$j@IX! !?W!-zkP_QJ(q+$Ei7O%67c4 4Xff=~?.~$I,8t{V>');
define('LOGGED_IN_KEY',    'Cfi$m@MH-]I@y&zf9w!>*++o}#qzK_05~$1)?w5gjN2!R( fp4]|s4[69|fAF5>t');
define('NONCE_KEY',        '2_`P-v0;#t4TB<x@h_G8`PPBAXCQ>vz>zo^$Ugb|eG5KyH4e-lg.vIY_.ON_> &?');
define('AUTH_SALT',        'gIsav@C-eH!XQiV<E<DloXRz#qMcRu,T(-U;W!Fn;xys$igXufDr$r-QyrdKSw0{');
define('SECURE_AUTH_SALT', '3!Zmn3Z-VmC0tY}e~Z{fy8rjg]~T2;<SX!4]-b5:|2SN-T|S=M --^=&Pdg,Ye$-');
define('LOGGED_IN_SALT',   'Ry-^nyrEx=lR-.qZ,E;3| hQ;l*yekCkR<Bg{2soQE#5>gCj[-.+8}-W[aF+|S8:');
define('NONCE_SALT',       '2CbH/*+Z^-;~R=8?X$TlUyz/VoG7/PLV$cY4/@lB4?P>!yD-fVTCW#O?6.S{Q-*9');

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
