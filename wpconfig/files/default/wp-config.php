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

define('WP_REDIS_HOST', 'wordpress.oolfcl.0001.usw2.cache.amazonaws.com');
 
define('WP_HOME','');
define('WP_SITEURL','');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.czxbv2qci2yn.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         'Uu* 530)B[w+]9(>%),{;UJp9}u>WpkiruStG{+E7!u `9])&G|m@ikzxvhdp5r7');
define('SECURE_AUTH_KEY',  'n&#9g0wN9V(YO*%UpyPQh0QmS< pJhH06)&`cK/Wzk-Q_5RW!$TWbP7WZysg48Ay');
define('LOGGED_IN_KEY',    'EPF,fU16~NV[/:?tjOO,m,!ufo!lkJ#]sd`mg+@wB~rP.3$ m0$$M<e*;!c9i72D');
define('NONCE_KEY',        '}2H^-y3zd:K`80.(2);)88_t1C}ZsZH<h[&pF<tqA29F4wAEuO>Onb`vItJNo2(3');
define('AUTH_SALT',        '#=v9>OnVj8ICD-s-7U%5#u6MaA_,p|6CYC2_FrwZ&3HOsv!Bm`{abhry>u}`^=b$');
define('SECURE_AUTH_SALT', '+5/,BcI [i1U.3T |X4W} &8n&yX@-YM&12rA-8Tw<f~_Lqj?AZuXy}~+AA@uUC+');
define('LOGGED_IN_SALT',   'l>fb2me|IgD[Ev2$hfyoB(n:~Twl9jDME/er}JO[HO9Sy&1 _SBio+w,+o2OQFR+');
define('NONCE_SALT',       '],`C?31N>Yitn:ERyJ0#E.l}hL &lVVIht:-SG):~$5#x4H.tgRZiSj$Rlh/z8*M');

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
