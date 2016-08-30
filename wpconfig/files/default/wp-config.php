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

define('WP_HOME','http://wordpress-690307933.us-east-1.elb.amazonaws.com');
define('WP_SITEURL','http://wordpress-690307933.us-east-1.elb.amazonaws.com');
 
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
define('AUTH_KEY',         '9aht>0ffnHpods{,9Cxuh^O! Gw(rv7~-bTLALhl!QbSEuN1}[[AA+k,q/B42DlE');
define('SECURE_AUTH_KEY',  'gCg8=/x1%yITyk>j32$3P1Uaw#>KR_a]s!Ol3_eiCJ.G?]VQv)uIy@3=_1btO p]');
define('LOGGED_IN_KEY',    '}5A.JAm3Vc Xm9&3le:8T|bT&CF*)Y)KXsy[b11<O~uV*z2H7w<7c55m,MI}Kr#M');
define('NONCE_KEY',        '}$jk[Aj:l8$b7qF8%IfMqq/uRt?XtV&UrF=FZFdd<@G&eM7%Oam(Ue)3[/_IPCI$');
define('AUTH_SALT',        'jL[&1tWjx^)4<l),YhKwp_x3vlT6AVEBx$PN$i}KrwI}}m4QwC]WGht~1o8yxQ7,');
define('SECURE_AUTH_SALT', 'gY/5z&G-q5SE/b&lyB:Rn2CNX!f[IBC^=}b~Mo2#>=xD=eT|t-5a-Cm..8PwbtCR');
define('LOGGED_IN_SALT',   'rs6I#@It$oR4CEv~1XEtWL/71rq)3A2 QCfiw2ENqP)znf;6MZ]6Ap)XE`,rDK/l');
define('NONCE_SALT',       'P}X],_*P%r:%Xq1uewKZwu{GwaR;0TxR@F2e))=O3~5*bS0%h0s2aFAkt1 W5lA?');

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
