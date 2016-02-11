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
define('DB_NAME', 'restourantdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '79497949');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         't+*`]2]Yr5KG(E;rMk8~KJ9?JUd~xLX2<+Mc&p+-W|m){<v7FQN|6lyPvPq4Kl- ');
define('SECURE_AUTH_KEY',  'Se,qV-Q4{8|i=k_r{y3{[^n1h{2|0AcS|>cwZ>-|i|++aN46>!<MOvUzMlBM5d||');
define('LOGGED_IN_KEY',    '`Ut-]?MY|4,+$s-3j~@23+OJdmILAwMx}Q#~9=I9xJ+V3j[U.Rb05U7<kpjL{+j.');
define('NONCE_KEY',        'ky0Y96n|^$HMA|3-F8K#)&yHp.j<-z){VIy[dDaY$ttLt0+IQh=D6>r#X}](wHXm');
define('AUTH_SALT',        '[+IHUxp!^$E2ynE%RC!r[,I&R7,l*^CK!=u!(8lfb[FeKtRc#xUI{kLMK12DHf)D');
define('SECURE_AUTH_SALT', 'djz:,Rjx*+}=Wuc)k1AHY]6X!!}(E+UpuaKx;zr@2Wz3>%)/$KC.7W=Coxf@m]3p');
define('LOGGED_IN_SALT',   '%s|rQ[xId>qMsS~Y-3c-|O]oe>j1BI7$zh.^v{CoErVaW@i1[wtAIvmd0I-?-XD@');
define('NONCE_SALT',       '[t^b2+iffCa~onOX9&mknZ:>r=iv`|NYHjc_$~F8P9z0C,xf],MgU1o~ BfSJ|ae');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
