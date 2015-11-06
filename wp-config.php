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
define('DB_NAME', 'wpnetsoft');

/** MySQL database username */
define('DB_USER', 'wpnetsoft');

/** MySQL database password */
define('DB_PASSWORD', 'WPsharesystems2015!');

/** MySQL hostname */
define('DB_HOST', 'wpnetsoft.db.11569157.hostedresource.com');

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
define('AUTH_KEY',         'AS-&$GL;hKIM8it,gbvCFp/PB38O$$Wz.XUM-.u8xDY(.RWzD7Z)&p~k$(Iy3FGm');
define('SECURE_AUTH_KEY',  '!DsT36}>G305kH/_y?X|[PO5M]~1s4`t[nNx07PK%8Y^s5#p%SE`?X|~LC(X^>Ie');
define('LOGGED_IN_KEY',    'Xv|A|*3IlMGFU. $b#Mw~sX{jx6!M)Fx@FH!f]-|; ,SS@!-4:)3PYiN9.oYNE-+');
define('NONCE_KEY',        '!(-+K#-zFe6>n0E ihg8AQYy?H^cZ5X?,B=w_<KHG}d>Hb>HXYXyWVzR1}m?0<oZ');
define('AUTH_SALT',        'y8<PJT#&P}LXc4b5c`k|BD8yX!7iq>2O#tEwr<q*25SqM>et@LBc)]LuNm0{T#jV');
define('SECURE_AUTH_SALT', 'OOT#yEde^!I_zUt;lB@nYCl}Fz8Z)jV#RigF9gXqS{^yq{-QRWV>i)-]wzr+<pKV');
define('LOGGED_IN_SALT',   '&wb:bg$`<Ly]fXQL|XtQ*r%nA|qZP uNI){P+x-KD;o2<ysEBk 1}wX8|4(#`Lu-');
define('NONCE_SALT',       '-(c5{Psl>x%lgMaWUm|raoj,+TI;MIkdGN`~S}?@JsZhErV-tAcxcM6H@AMVc|0^');

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
