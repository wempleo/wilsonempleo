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
define('DB_NAME', 'wilsonempleo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+:7Pi$Csp-I- g9+@Im0*sk/?<RrWFqLqYh>9Ofv|[+fh fkEY->S/]r<C&O?*a_');
define('SECURE_AUTH_KEY',  '(lmI2z++IbVB]@E`O:`48O(j4)$~|Bi<l{0}R=`TMK8+@tNVVcDmHrSAP=B,#q>=');
define('LOGGED_IN_KEY',    'z~rtZ/JGtW9%W>/+PuVH-RR#Pdr4TO!dPfBvD<yLa)UP].m(rIb7,D.prd[@-f(m');
define('NONCE_KEY',        '=g]-LVOsZMwJW{EA%H#cCJs)5|_+0 w-h.6=Y=Qj|npA291AW;O.B>ux;3m_:[gr');
define('AUTH_SALT',        't2S|>y<*<|REk}^]`n|.|9!0#O>czw)}]&lQK~ZJD(i<J^PR#o9_sM|q+sz.#+e3');
define('SECURE_AUTH_SALT', 'ZF!&>IzNkNvAsoEH+|FXS`V91SD2m>:G>7:a].a1zs(>-}0ELG@{C+Q|`G{!.Y-J');
define('LOGGED_IN_SALT',   'tp.F$^+[b.^!a[Egs=@.:03E=RNR>Tm+&[M>B69M-qX/A8?+=+}2}F%~<LqNga9=');
define('NONCE_SALT',       ';E7Qm]!Z?@g(|,[ 0B%5Yy:9p|r,Mh]vPQ!q*`EFrD%m_eXX:>P~9wWoTNZO-&(p');

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
