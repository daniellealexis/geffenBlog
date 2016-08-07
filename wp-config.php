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
define('DB_NAME', 'geffenWP');

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
define('AUTH_KEY',         '!X;/*FuGRwudq%&w19j7zC6GuE,NcHw(P@B&[sJb}[G|.iY)Me3fWR%HtBV^n]tq');
define('SECURE_AUTH_KEY',  '-M~+*V)7qwBhbI;`_6y#!@fr{e1<;!FFA58B]SeL3Q^7%/+y@NV#f/_GQ{2f<!wm');
define('LOGGED_IN_KEY',    'F$4XND48!*99hq#^0#X57Kxv`=?63Mmex>8=T&/P6L`%]X<5TolA|%}Hp{hx)!vi');
define('NONCE_KEY',        '}Y^jpxOcPD.uY*oGD<-&_gx0I5V1o9s/6v}b3%|,i*W_}^G^30/+UpKEG+*uL0o;');
define('AUTH_SALT',        'kSlkw7QrvIVi`P(j:,Srcjbr,iptC*IE5Bw=i:]5$F4vUF,lThWC.YF+y*3.<vCt');
define('SECURE_AUTH_SALT', 'RwI=~}`(=M-uR{IdqdVl85eOY:P8.dm~h>Kb`A,?/y06dSAj= %ygFk6,-12:?;n');
define('LOGGED_IN_SALT',   'jlw8N#HaWs8dRJx$-(zHK4^6S~6U~[%+<^DVZmJL!cLZN`Ssn;XM^Hr+8Q/NNv`s');
define('NONCE_SALT',       'ISmJ:Z4iz$).k#1B>))ahwO^bN!Q 48wG$ysjBW{~L^l!z,cr,xC5Sx?0XVoj >(');

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
