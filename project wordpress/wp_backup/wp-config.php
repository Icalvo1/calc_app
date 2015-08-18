<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home4/hexiuss/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
/** The name of the database for WordPress */
define('DB_NAME', 'localsitewp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'b5b7b7s2');

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
define('AUTH_KEY',         '/49teji(4x::R#Fbvs5w\`Hb/zgZuu|Rm#F45RS>4;C/N6xzKNeO>Mr9r8eiCALIPeebXkkeB');
define('SECURE_AUTH_KEY',  'FaOq(@K6BK\`;?dN-#em7AgT2PhAdf*QUCYzQ0L5g5aF)t:a:k2K4SPr20HwJ3$vLbBrZG=');
define('LOGGED_IN_KEY',    'E/rNfZaxAmc:t(3<BbyQbk\`TyOa$)WRW9t5b34)u=D(nqU78!CE|/jMqV4w$3JiUe:PckLm\`A');
define('NONCE_KEY',        'XGT1Odr~>|rR00tD(7cwaKD=#fI~|OIJR@VRiU1$$7n$DywPm_S|VM!96-)8DQN3UnO1/(');
define('AUTH_SALT',        '\`z/n:5iJX@V?kolfizFV/2g_P*)Sy<h2Mv\`m1qN!2~v29EqjZdvc:t?\`^lML!Q<Y');
define('SECURE_AUTH_SALT', 'OM-7@!*yY$#cZ:7ACkf0I/jT|@p:q4H2P2OF4|w171kex:V3XeNo^SSL_4Bv>*!/KHZ|RWP7#U_6k;UAo');
define('LOGGED_IN_SALT',   '#*pMtb;n>X5iwu:g\`4-Y?|4>$n0P)=obXARROg?Jl-ha->jk\`VqM3QVT5G7rdBM-u~2Wg|');
define('NONCE_SALT',       '?xe4(ffTh|?g7U!JTd>b|Swsf=nO4JD>Z2_LwF7(dwPJ>y;uhja7QOVR9G~B662gV@8(pFh-Tn');


/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
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
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
