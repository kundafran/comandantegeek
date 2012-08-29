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
define('DB_NAME', 'socialwin_blogdes');

/** MySQL database username */
define('DB_USER', 'socialwi_admin');

/** MySQL database password */
define('DB_PASSWORD', 'Velez12$');

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
define('AUTH_KEY',         'B -4u9I<~g/:yK??hhY}4K8y{3>[|@Qh1)Z)Cz9MUM0n=:XNa!<yR_e[L/lx2pOj');
define('SECURE_AUTH_KEY',  '.b3wAjcIyAr8>y.6%WLE:;C,52jj$<](~HFNke0j}v_>_MN~jmM~wwb?Iu7am=*|');
define('LOGGED_IN_KEY',    'B]1khSMlg?|ou`6{?6YvEg[<I: ?f~ l?Q,)I|*H-!|%[tso,HoP1]||JKVs#7E ');
define('NONCE_KEY',        '2-zLNz%ikQ/ziy&0`=;0`LdO&63]$XO h5CF@Q_r@LUU=Cj0<(=n{Hy/#n!LI+bl');
define('AUTH_SALT',        '3}<ea,V>B(v+!v1A:p4t1wt@2n-,m_g *,[),1m^qf;fIqYKcNR$(}0)&ZohZQs^');
define('SECURE_AUTH_SALT', 'k4FIIdu.9i-m`YCHv vJBPx%:wcxAa)q(-x@nb,:R(SOb[F?dLB0Q(1HL5)G`w<R');
define('LOGGED_IN_SALT',   'VUjk&<C%G##t!}R`5698[9XJt*/2wzG!9}GjB]2r23`0!w53UJt & _~FA7>xyZl');
define('NONCE_SALT',       'exz(:o^b!:Ot0fJ`uis0!)/#<m(PXj9$+N~laG@}L;~tZ<W-y708!YD6?K2hdv2]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
