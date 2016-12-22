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
define('AUTH_KEY',         '~8RBR+-1d/|uT=z_DSBqck,2$#uh4i9/y7al4m9Y4p)8`g@K[/?#`@_kZ|g3G6k4');
define('SECURE_AUTH_KEY',  ' _,<<26jl{43A=Lq+<YJia+hH`9P{og3uxHd`~RLL;_n6Vtf3=8Lkfv^<s&jjB`)');
define('LOGGED_IN_KEY',    'Cq_DfaXgSwg@.oDIXIv9#f[_7KKqTWHP#y?bcn_T)X)yR`@LX7?p2KN?!bq,?8iA');
define('NONCE_KEY',        'q dBGU^PWfJE_teS,;z,jg[+|{o%59AV86wqu$d! D;:s^e[9^!P#-I6I6+7T{Pn');
define('AUTH_SALT',        'N>0eXJ=$}3,$JyTl#4h[Anesj@~~f.@nj`P^8/9PvYMFJ[AUo&*yk1/}qpU|,|Y8');
define('SECURE_AUTH_SALT', 'j<ggOUmhB/u|qtmFA#[eZ.Bcsf$/XQW@wI):UCPqy29n3JN#qt!m euWrM</a^Zo');
define('LOGGED_IN_SALT',   'JqI<md^h8q529cdbgMW@~iQdw36gbK(AQ#Mw^DCUyy}+$7]&*Q(DS2&DWTzQa]b>');
define('NONCE_SALT',       'dc4snR&^z3Fl>(YPko@tnykQ{Ro(q~ojQPF;_l#b]#$Lpp.{AR@rC7o:9+63>ftl');

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
