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
 
define('WP_REDIS_HOST', '__ELASTICACHE_NODE_ENDPOINT__');

define('WP_HOME','__CLOUDFRONT_DOMAIN__');
define('WP_SITEURL','__CLOUDFRONT_DOMAIN__');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', '__RDS_DATABASE_ENDPOINT');

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
define('AUTH_KEY',         'bs_B#?mY4>N$.,v0n@ry]R&z?vr@lyo~0_};1 D!8HUX_W/A0<:J+aCQ;?L:O5!H');
define('SECURE_AUTH_KEY',  'gIH)*2{/?$1.FQy[|!U5z;*wxZICN-|l4^Z)&*}*_9#jvbF1iiCAq|LF?U NIjME');
define('LOGGED_IN_KEY',    'KN)he-I_X}Gz4X/.mV3Gx|zsB(y8q;;+L|?L,45EYZq>}<~&*uU-q>0I`qL[uGb8');
define('NONCE_KEY',        'jc;D[mSIRaK[z.Y.eiVf5cVMm#aY_U~>Cs=[[{B#Atx$35SZK$;bVMajbk];&9rc');
define('AUTH_SALT',        ')+4G,$5P)2{DG&&tr[OR5p.#<tN+gZdQrwZt=iQ7B-wZE]ei+a<:^Qr7VT%[9e+w');
define('SECURE_AUTH_SALT', 'VNk.R%V>ycDk)Y&Dc2t{-+XoC/kg(!idc8jv-b+O+HU.K,A!uIixkcm{as_&3{qe');
define('LOGGED_IN_SALT',   '5~X}VcHVHnd$zlOZ)Wr0*]|G$>ST%!?HC!IA$V{w48u.^N5e_pBy3nC7ky05L/p?');
define('NONCE_SALT',       'j:QAV+FZ[- 5ftghr(20_O!Ri/J;4nLOaSNTP1[9EV90 >P-2m#4r9T4~fSj5M~4');

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
