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
define('DB_NAME', 'affirmations');

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
define('AUTH_KEY',         '><F32b#V=h5[GRR`oTl+wPDh(~]Ca$A(>dh+z+54h8]&RZ~@tA5ZfRd][lp?tLq(');
define('SECURE_AUTH_KEY',  '-C5_%n4#bL6@xZ@(8IT#e=~;`7Anx$;AiWfO4Ug/G0(pe6htRgtrP@>t&qHwg*_}');
define('LOGGED_IN_KEY',    'F$rI21Y9QWm!<KJF.6KlA?/DZQY`n$:H#zWex?7=6$-ATZ4u_XG1:;C|T^$$5!^r');
define('NONCE_KEY',        '.` >Kgrz}V9,CT2:VtHt|a;~pQ?D(.gazr5>p<(T|cgsAy((30-yR6qn)0M}a@<K');
define('AUTH_SALT',        '2}rS8j8LQ=R^OV]K6[|-Axx]dP=3ns{x x%iiSc-bO``Jv|>Fw]L2lt?eC^zm%Kw');
define('SECURE_AUTH_SALT', 'v{GYg9%j>oDQTVYJ}m[d|x.x;=;&S9oP`)-OkdTY@D:*jBCymz%YZ>n`LN,lH`Ph');
define('LOGGED_IN_SALT',   's:XaT)&mf wg1fsGY@ezRm%&ob;ilL#|:SKJwG_.i^S} iF8:^h/tW:avbQ ^|m!');
define('NONCE_SALT',       '$:?l@E/x)e(K_1.AF 3,K_Xl]4kwPoj),Z@.lxgnS/yal,4<}/P_+Q2~u6a;;jl!');

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
