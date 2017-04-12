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
define('DB_NAME', 'jetro');

/** MySQL database username */
define('DB_USER', 'jetro');

/** MySQL database password */
define('DB_PASSWORD', '@$QZM#yykpjc5RUs7Z');

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
define('AUTH_KEY',         'q?m-;?6J( vrDZK6E<iC]*(}NuzZU4v1#F{X{MxE3rTu)J%GYb2MryM`Z)H=S{q~');
define('SECURE_AUTH_KEY',  '_VK/(D3o}moOpiZ?D0bRo5CK7uu{8vv_o4I,h){.8_{AAG9=P;,48$pjgxM(6:Dz');
define('LOGGED_IN_KEY',    'p{_Fd4r=V3L=&VW?>uC6,mv{K1,fz$L#i^2)^sjH&P>Nl`o|8{AZParH7ejyX;H[');
define('NONCE_KEY',        ']M^M0PLlboGUF$fDA<IN-I)FWn[f?~5`|uxn&M_IdYI(vJtSfp$=<R>[BL__5v^n');
define('AUTH_SALT',        'UWPO|r.*a-/onT4%xQ_$CFp*afD`1d^~%bCwp8pSyQ|qE$/$fhp*}LD?3-@3v*JF');
define('SECURE_AUTH_SALT', 'VO>L!ipQ(o/8=,;Y~B7T-QB,5Jw+TX}`B,eT`/xJZ]Y?wM GB~#W<{r |)Q^0ud^');
define('LOGGED_IN_SALT',   'qgzi3E?*)mci15{HGgoeo_Hnu[_lRZo*7@r$m}9a-0Cl%?7?I!8QF(?O3z#%!B*a');
define('NONCE_SALT',       '74BP1&84xQRtnhp(*Ikp8$eNo*aEaW4I]~R+}-q*/VR#EvUcvPg[B4@F}N)Yuh%F');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
