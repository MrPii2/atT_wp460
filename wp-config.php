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
define('DB_NAME', 'wordpress460');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '3/)pkSuQe#]jW].:w[=mIB-f)<rytB2`]~8Gf}m<.b72$&)9wi&#,Ty3Kc&3~Z1(');
define('SECURE_AUTH_KEY',  'Mbd(KDi&JBS1[im(~Zd@k2=?7WKrDRRx<EFlx?5}*&wIrAZy53{7M#>C<b3sD>J0');
define('LOGGED_IN_KEY',    'i-#OB)B()b/1CGANY-TG7KrNf9I9!Btjv:d]0-}e{%SA3sxm-L[%XuWkwbq75~i?');
define('NONCE_KEY',        '*NPV4OoCBHOV {wQ|d7SE`1N:m_2ro7Qq1N,ED~k=P@^deB>|m0/:^&^#^?5=mWQ');
define('AUTH_SALT',        '^)p+}?=Ek;+tYby8B3;2&@q)3uhA2x<_SU-LSx1t9kM4`q&TNI.jj_m2/D05rQP0');
define('SECURE_AUTH_SALT', '!0 W*t{D;/wRt.mG+:JS)jCg.ku]_{tnFr/fGxY!<!4TZ]3:vH2].KiARiEF6[zj');
define('LOGGED_IN_SALT',   'MK+:.2 5O;rKVkHTd<?-(K88}_HpW1PJkq%NMFfYM!:synXG2.iM7jPIA<-zln`q');
define('NONCE_SALT',       '6)xcD3Pp_?%$@SD?k%EPP:7x3^^2k]4Va)R@9}/DUp]@wh-}kP6bne_bzYA|u<S7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp460_';

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
