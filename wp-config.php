<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'uks77111matth');

/** MySQL database username */
define('DB_USER', 'uks77111mattuser');

/** MySQL database password */
define('DB_PASSWORD', 'MattHandley71');

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
define('AUTH_KEY',         'k=&>Crif<)u%vmlGJ+<xn>JY<#tcW).7)7U_-ZUD+kg!RY574[gPdJGASOD;po;N');
define('SECURE_AUTH_KEY',  'V[J7c22xj|I3?_G YI?B:wm#Om+Qhh-d=!M&u/F%%:4e4{!~#p_1xSU1$}3)hcE8');
define('LOGGED_IN_KEY',    '}:>giX2$|$Pz(8UhW@%fz0qzmO&!Fn=@]EOsi5L^.qbi<I%5=^1LNo}[l4[uyj[e');
define('NONCE_KEY',        ']3LYr`g(Xcd?gYwdI3Gm|!{Tp/a+Di)x_?&@AgKy`,C+26nDTlW1Cp`&GgS5}Rjb');
define('AUTH_SALT',        'q8`p^[W^{,DwPL]G%<0%D$7~9kK7(1wurd!u}+JwU}+jT&;P7;W[5)~-v43#:`]A');
define('SECURE_AUTH_SALT', 'oAe~g75jD:Lx&D+L_mN,++jS5}>`mNFwdVc <+</qd1#4tEjKxZIo?&f3Z`[1_+/');
define('LOGGED_IN_SALT',   'z+s<h9&^Bt(YY[T9nYS-,%[|}5gYHqo*n|p`m(r^TDz(eJniD;(X~#l1]0jx RW.');
define('NONCE_SALT',       'Zes7jW3q6G~^PY&UW#JQ`^|O#m#+|h|}7DNe.Kjht -iHy.E7vG_#KUG9|nL5_Jq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
