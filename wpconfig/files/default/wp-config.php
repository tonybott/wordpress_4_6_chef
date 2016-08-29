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
 
define('WP_REDIS_HOST', 'wordpress.xrkhgu.0001.use1.cache.amazonaws.com');

define('WP_HOME','http://d2c36iw6t9vxwc.cloudfront.net');
define('WP_SITEURL','http://d2c36iw6t9vxwc.cloudfront.net');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');
/** MySQL database username */
define('DB_USER', 'wordpress');
/** MySQL database password */
define('DB_PASSWORD', 'wordpress');
/** MySQL hostname */
define('DB_HOST', 'wordpress.cqvglnwirn65.us-east-1.rds.amazonaws.com');
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
define('AUTH_KEY',         'xUV{e6VN%TevpZKa.ri&s]:DI402aI8!V<Q5=N(GF|:bc~VDQ41+|O)S9-MK6iJU');
define('SECURE_AUTH_KEY',  '>Jr.V`_7XM)H~86TXE.7#.udj0;mIMGB#M4onuE.>^(NDH;^l<O0ktayRB1x<>-4');
define('LOGGED_IN_KEY',    '.4cV){Og.g&E--+_B+A&x6)wRY^fg*Y*chSJ~b60D`+bmyvr#S)hDuDW74eC iPm');
define('NONCE_KEY',        'a:FU[eHA;u[MK@Vb~M@&s{eBJZ$(3F(3(0i)hE2xlO^<5k7xoi~mfy|VKaXfiWL&');
define('AUTH_SALT',        'p|d03n;UL+115WMI(JH5TYpuj8S :%@{xJxL2.<wm#e,@p61&xre(pmwd;m#qJ$&');
define('SECURE_AUTH_SALT', '^dqphX|+gb]b/p6ZAN.)id4S.pHda|mh`xAe<bA`%?0SNmobL|e$+(_2G OAI(k;');
define('LOGGED_IN_SALT',   'S{N)8?US|`3HXq6Ou-23HFOuE:UK}&LSQ ,gDth$)3k }|$!5fxR [G4FC|Pa`wZ');
define('NONCE_SALT',       'g<(`94TW`|I`W{Ed|`(g0r~9=FN>uzzaGcf[T$D|u4/}AWDbPNX5fD+iy3[Gji7!');
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
