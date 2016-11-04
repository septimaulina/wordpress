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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'j5JkT:IxiRWBRFrJ#{MYoBJy6kmgq|}eE-/=B@I3PkXv7dyIl`)qJ>clU?mrc21V');
define('SECURE_AUTH_KEY',  'nkfNr:Q3qdu|O5pt1nEftIN)NE5_>EDR?a>o~OZr1[fo^0*HAr.9_r)[:Bm)Th=(');
define('LOGGED_IN_KEY',    'M!dz5`HEj@oY*=NBe!V# ])ige1^^4q=Q_$SnJrZzSJrT/;6n2GrCfNdnN3xSsHY');
define('NONCE_KEY',        '8#f+3&AcR~h}7^KcaOl]me6rO}f,adL1SKX94G)n>u-,.fxT2Cu?(ID2y&nn$jkl');
define('AUTH_SALT',        ';xwXU9 =l9Uzgx|P@4pqu$raIwjA.>N=0R!MqqT]KN&,fJe-(bP3sURs`>`mwr,(');
define('SECURE_AUTH_SALT', 'S7t@}g{KNe9xu{Y4WV6u(o]/%sn}}Z?4}PWNYC}>xPHt5Qm-=.#cx..1iOom81ZC');
define('LOGGED_IN_SALT',   'vjTUqkW;,~dd(Kc }-7%UllF8SRafBPeiy`F1h*C$`A#gFlAKBoI6JF#o0r|2UK^');
define('NONCE_SALT',       'hhsk)~MCRU*+hj%;`49=d^% B[=K6muS#$rXL>`aP&X=GS/XpB3A_`>FF +r#7=2');

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
