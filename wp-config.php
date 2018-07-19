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
define('DB_NAME', 'local_idm250');

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
define('AUTH_KEY',         'nc9FY$Ptp},QUzUC4Zx*Bnujat5TzuivE0LKPU!R@H4k.Cf3,X}@$@%h?ZqBPKly');
define('SECURE_AUTH_KEY',  'e[q)qym0uk{^ /3h{#B;0sgBzksHp;kOY_rioX?|P^8u-771A|>R_,zXI.WiJ~W3');
define('LOGGED_IN_KEY',    'OXPGf50IepeS[ZX5M87PyY*FpGka#pd0Hl$M1.jB-]%p`}dRNEMG]OR3XHbcPLr/');
define('NONCE_KEY',        'OYuf_d.rP?DG!+cNt}0+} $u:^m^ve*K=0v(lR^*@|Ie66SU/<cMG5PKC7&z5ob.');
define('AUTH_SALT',        'iRCG9@4KHs>3or<.<?%g%C-k80Ia{U<9fH,*$}pO#i`>^`o=!KFVR>5mT]*O5$R%');
define('SECURE_AUTH_SALT', 'm,;mXww(p#]rNUaw@h}RVLp`emVYT:L]a9 %vV?>e5ZMcADOwrK6k8Wm aQ Ar5<');
define('LOGGED_IN_SALT',   '@s=XA}~Kwjj^:csx,.-j/<5v[$!`(2b|sIyE!-S4=&kB=|R`1ft]G,{iedh+iWdy');
define('NONCE_SALT',       'u-B<me`ST]Y!Ahv05c4MS1uQ:|urbjjUwYe/K(b}o41X|R%JI_aUA(K:bC+6h8>C');

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
