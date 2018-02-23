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
define('DB_NAME', 'wp_cr_12');

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
define('AUTH_KEY',         'wcr`!RfC>FS+zb~fOMp||U0Mx}*&Ki(9U_IitO>]#[b0)E/>C@>+K^kM@e|IG^}#');
define('SECURE_AUTH_KEY',  'RZ!m#XZaLtKIMJMA f~rpB%=d5,p)Q@aB>V?E6Bn@Eu}4j(G%M23^W2g,3V%empX');
define('LOGGED_IN_KEY',    '2Kb]%MejH@j#1keL[(j$RUA,H?Y/` rgaIyu@i^/maEq^J{7C#[e6DK_S<y7F7EB');
define('NONCE_KEY',        'T[x5$)yNI!.h]v1?!Sixlu3%H+E(Q$^uwlPszoxRgYx%;)oLFzI>yeV<AWaeWRL<');
define('AUTH_SALT',        '0]=wAYmOn,Aw>e&e2+a`f=FHG;OCdLHLDw0?3y0zvgNuNL@ J.4OAT0tz)n|,nlk');
define('SECURE_AUTH_SALT', 'KIe)vNcmC9_s3QSK^MKh=XfaZnx0I[Rva&o>7e |,6Z5jM|XIAwa)uz)&@r+#9Dc');
define('LOGGED_IN_SALT',   '5GcI<j6ZnpNjQ$,)$b!`Jm)&L{8UIJJq*I)uc~eXdpW;7eD.Q@HfJZ-N3:0y[#,4');
define('NONCE_SALT',       '<]wBND#]XT6_+q&Vr)5;H8n,YI^ -*c6S:v<X1AZ~:1>~O@y@EQqjiz_ kDvTDw1');

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
