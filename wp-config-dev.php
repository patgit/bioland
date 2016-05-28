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

define('WP_HOME','http://bioland.patrickler.de');
define('WP_SITEURL','http://bioland.patrickler.de');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'c15_wp_bioland');

/** MySQL database username */
define('DB_USER', 'c15_bioland');

/** MySQL database password */
define('DB_PASSWORD', '!bio4$Land!');

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
define('AUTH_KEY',         '.Z{[aMsv*C>qYz1*O1cxIm.v |;Wc<NKLcDWvZu>KV:vtKE_MQ`{Fv*Z,PlI7h.!');
define('SECURE_AUTH_KEY',  'oW^T*m:dQOcXAb>*R>tr^4^PY%ly8|A3Ct0?c]T Kd|:q^rPU9?Kdk%(M~}eYM*z');
define('LOGGED_IN_KEY',    '} 2F/1bCh<$98(a;+13.gh4CoA`Rr5cb)l)EB59ww`Dxz}S~}u^~lFm.)R2Pw3d+');
define('NONCE_KEY',        'dPSfptv}xT7_!:ak|:C}?g<6/>sl.?(25_:b>7|(n?.A>!{5@8:kw4$[U5|=<zKh');
define('AUTH_SALT',        'LVY.^xg~3HYurK!=_J]{DE~:nHZU,MFs6F+G/_|Ryc_sPVi^qL}RIxCLa+;LMXIK');
define('SECURE_AUTH_SALT', 'n0_i(M_1SS?>,[eX5:n:RH:)Z| Bw^r[S]Vx@J<o.IrW(2t+QB%:9u&khP). -E[');
define('LOGGED_IN_SALT',   'qPcR2aMO_rxfE@R|00C<L%3_N6lI!w&{}tEwEjjF[?c~Z5T>HQRI&,ltmERtb2uq');
define('NONCE_SALT',       'AAO-/nlmstmC!7N;{3[_Z0HX~s?FABmX7vX-(WM:pB0^%$.7e_(!gEBi.73<0j[A');

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
