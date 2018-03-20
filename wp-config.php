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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '_e~0qHw0-@VGYFwP,6Wq.7D|}AvpH;wKE<EsSeWQ.NeU<M,`g5C>L+5dn7}3s;&G');
define('SECURE_AUTH_KEY',  '3*7cywMQTymV}:<1kuy4AeU;#v/xfVje2};K-,k>>a6yVLTud?^u~R2[>gF;Xi<Q');
define('LOGGED_IN_KEY',    '/6S;5F]G=<,IJ(k]*K.bEz?/O@LoQ=y&YEsv+GilV`U$P!ydHmlTzOGj9TrUY/!Q');
define('NONCE_KEY',        'o<6jTuS4]w9tAcwr%y 4^QDmKtGS524.]GzyytET3AqR6r(=Z8Q}SRr5d9T^.`zs');
define('AUTH_SALT',        'oWKMa!+:pUES.$9Se>Ogv47c#>!aOQVd7)nh74s:(a.H#97k%uZDLMU/]HX#aA<k');
define('SECURE_AUTH_SALT', '>Ln7:3y]43[%[lp:;(~ax([y;Es5500dS332R~-]{V<<l-A_n=IUDOuiRUar!g^ ');
define('LOGGED_IN_SALT',   '!Q %(N)9#,g1(5$12Y@FTuDZrN*1AGnm%oyucn|Gh~Ub*/1<LAQ(aG{N~ul4s:y(');
define('NONCE_SALT',       '&UT^%;q]rLkr35KX8*D_G!&Y]&7&bIB>If_S5m=^yN?S|3k6j?n:; rw6q`Y2en/');

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
