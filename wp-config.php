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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'negZ`-W=7xWEf#/{}TN5mJolc7_mFwpO052H|(_v{)-HUA/Z]gHMt?[?|&)Y>qAj');
define('SECURE_AUTH_KEY',  '0^t-9OnJ|6l?1t_*&,PpC|`QFFw*$h<SRd&.|o-OQI-7#xm_kP_a2!qD=mIQ?NPT');
define('LOGGED_IN_KEY',    'ha%GOpQI`9c)~l/G-k9*8@u(,f%NCFRKV-J2ccRzy)Q;v iqz+}3v-,jQqNaXmW=');
define('NONCE_KEY',        '4p0pa4bq=,H33k)yfJ78LuSA/<^8ZTbT4[OtNRbI+G[K8BM )YA/^;a%K$YZ$@yU');
define('AUTH_SALT',        'hO{HM(E&Z>YX|HooKt3d)](a-hlHfV-C||wx]TKz1|fJAv.Z$MsrtU!gXxQ:,zL%');
define('SECURE_AUTH_SALT', 'Jk1mdG*Q_t-Fc#<I|.PLxEM)KngpLGU(Lj^=iQMZg1VGj-/NE*#VO^|7e^e4DK3#');
define('LOGGED_IN_SALT',   'a` &Yw!X}3-*%EtQ!zC@I>fa.0yn&oXos-@q7gBS*+p@Kx+Z16]{JycN0h+~G)r|');
define('NONCE_SALT',       '^Zj2!i5y !ADQ>-<XIE|6S%&88KZq2U|#dLP28)1qC:@c5>i a-|!Z65bYF)aHIE');

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
