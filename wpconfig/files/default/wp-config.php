<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
define('WP_REDIS_HOST', '');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         'K GefGjDsV!|3(I8xQ7:O|^9^ipW69~hCZ`7KBcr_tGSL$l<Lr#/5Mr[7A+eQ%_d');
define('SECURE_AUTH_KEY',  'a/%^VyI`nTYsl sFD GtVAvdH-}!)EGX{Rc+lS{*yZ!Zs<DKcTA21ecrKFW$U!2>');
define('LOGGED_IN_KEY',    ',2A5uGVW,zC#: 8)4r^3&_S}eCe^C55m@SB&NZwAY7GMoT}4h#TgBm+EN0QyQ*J0');
define('NONCE_KEY',        '!l76*i=Yv{QX+|*Ls(Z1Rq_DFdlQrUd8-U.m^ORJ`)$17<6+>v_mx{n!l+/pAD){');
define('AUTH_SALT',        'x:Uy|@xDK74[-NF4_U~=K8{Mx.^dDU:MN]}r8<y^Bo.gV<3nTU7CD#|1z>/:F>gc');
define('SECURE_AUTH_SALT', 'IKWK2UWS)hc@hek,?@PQJhCG:XwI{o+VPW2(3nlT[UCa[_VO+1/hc`fz+EHai.?0');
define('LOGGED_IN_SALT',   '=noTyPpYPfM+RBMSEh@( Qh@u>|0e0$hXHNtg4zp*-t.g(E2[0os2fwDGTKU&=s6');
define('NONCE_SALT',       'dy{9lbbC6F,wnzc+L66PS%Cfhpg*ZRTGl|7keR/>]C`ac<Tha|1~}YQ+A:T*CH*t');

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

/*After EC2 setup  modified by adding multisite-subdirectory. */

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'administrator.net');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
