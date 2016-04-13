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
define('DB_NAME', 'amoto');

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
define('AUTH_KEY',         'ihH]M*pgIYu.b#!<bh_:aqu}94Su|uW)[,aqjl()-A|bq1G0.rs7gd^vF9WAefgd');
define('SECURE_AUTH_KEY',  'qkBF{X|x-HepvOCuXTll[4g{nu3x1*@j)hH$|!c2#5bSFq.C<O14v.phN%Sj8[p&');
define('LOGGED_IN_KEY',    '-iPC-*LSAp.g IEhZ;-Q1#smjC:>;Of[`lW9-yqH+p3a)+T`lh4Q1`,bmp/_<9mP');
define('NONCE_KEY',        ';k|NDDm8#qo /+4+:7-.S3Tm|%pqNWs=az)!*e =P4kwv.R8^jfK/?c$Vz#^J?L1');
define('AUTH_SALT',        '|r&^h1?W_ok`OW1;;@*X/0GOh=r|3DV2{juXo2|4nF}JocCjW>dtV*?0=o=OPQ/4');
define('SECURE_AUTH_SALT', 's>]2i-qO2/*J^1*YK66:qnY@Z%|ZBD~d>c4oZj*V[2KI>}f|z-0Sf&($[a;n-0hf');
define('LOGGED_IN_SALT',   'JZP[+ZX2m1bO:^Xkh7m2)CG6]W5TkXFb+_CS_ogF])->8|h@&Xpvp8/(D7QDn|%y');
define('NONCE_SALT',       '*7Ap]vow+rf84C+-9ysgF*`D7VS57&FJpMCqb# T6B--N^+<p-^oZC]>bR{98?/B');

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
