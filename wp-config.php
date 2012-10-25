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
if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
}
else {
 die("Your heroku DATABASE_URL does not appear to be correctly specified.");
}

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
define('AUTH_KEY',         'd/NHf_Q1(|xsdUhUHZ-q-n~1F78|Pe6A+yVzR&0(JREJb-; Z6+Rzq}!Py0w`fG-');
define('SECURE_AUTH_KEY',  'Ksbh61-/8cz<-WdD)caZ:`7-K.tslgd{_M)]K.~9|81+[:;@?/*>dVJO8Fr;nc+;');
define('LOGGED_IN_KEY',    '3YrePOxZT]}CJ~PCWKi-<bWHy%7>ZigS-Tfp!<5k6TdJ3z @bhqLcZv~|L?-HGHa');
define('NONCE_KEY',        'KUR(Sa~{<^(?$@EA)D3E!pN:+Ama0bhLB30dDoM:vzkGum3xFt`MyjAQE>{)1G#M');
define('AUTH_SALT',        '(8a~eN^^E&1$Cl`CgB&mZSkoJCdupD5%v$E4IY6qxMf?|dW#z *?zAYMaOcMG%-M');
define('SECURE_AUTH_SALT', 'ZN,tLu)Rj4X)A(-FwmDP$&U-Kp(~VXU:itH|Wut9.ck,p$9zj=0lPy4Lnv`e7#/6');
define('LOGGED_IN_SALT',   'c9edudC1qu.zC=aj,Mmd+n]?r7*[%8]n*-3O81f[W6{)LGb-??~rhC7@}[K0IWoD');
define('NONCE_SALT',       '?p!^a&ixJQ&+N]gQ#^gnPW{.|5pqFBS<0nnD|[,F|NLK7+o8.0i;mJr*S+oT#,|e');


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

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );
