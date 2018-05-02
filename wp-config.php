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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         ',)MK9)(Sc;X|E+<Y3;)$!&E<47^PvA*2KG>*5B,A:%D[x&1Ot!:8(A,*G_zwxGWZ');
define('SECURE_AUTH_KEY',  ' /i$3{;R/C2&hm_&r|Z@7Ms&gFKE(Q(ZG]&+RYKO!Wv0T*FK,GS1+(x]AOx#8Erh');
define('LOGGED_IN_KEY',    'dWOYr8>9PeyTv<XB4pT6&GQ&6<-?=a|?&x=rLSUf2TXfc<j.au .e0cH @[>pVW6');
define('NONCE_KEY',        'o~`peUDQ>8N*[ $hmC3=wK^0i||X)X47x^f@C v#%,tZff{6bMP[40W8NK.#[R0b');
define('AUTH_SALT',        'X.87;XVX2jG`( >agD4c$X1!w$% qjUh ^%RKLeTrr._|;f^8MTW,VK4xY4X>Bve');
define('SECURE_AUTH_SALT', 'ww[Z`cSeveJIJ39M%lwi/ncAR]yWGJP?fip$s(vIo%{JKkx( uA3P`.j./r5s-b}');
define('LOGGED_IN_SALT',   'hpR-;2id#.d;*c^i]$vEB,|R?B!:rP&bj-9Jgt$Bd~*nAAcLnO5,OKH4v{U~>MQj');
define('NONCE_SALT',       'qzArwuZ]h$q/qUgq@VK{KfB~sk~*WVvRxZM&3vKCah2=So0}):4>.3 jT!d5O0i.');

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
