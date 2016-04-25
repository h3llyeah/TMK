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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'student');

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
define('AUTH_KEY',         '2vPfEDbfSerZ3uQ#]6YclxHOsW5Me#^K]^Yv$d8~SWBZGkeSZ>/)| .J2c3VQZH#');
define('SECURE_AUTH_KEY',  'V|oG_EepzV:7{_]%aUb#RNs[:>tw&Bzbv!k.z^@Os9|c6|mjXRAT `7j70!aUVK~');
define('LOGGED_IN_KEY',    'M,?X|8oM.A+,P!6##a6ugj[!w3:C(QJwep}Ax,(=<,0#H}-`_<?nNKWJ3Jw-w-Hc');
define('NONCE_KEY',        '@P`azNWiQBtv-aDOy#^PMTS(rgrN!bO@[gd:3$A0no9B.ESI-{&nV;$7jtfS76_8');
define('AUTH_SALT',        'wxL8!_o4_?iI]E`MOuXQK}~3r.QLn0@L`(Wslg|9.1b!BmXu/d>voYj4=E];*+eT');
define('SECURE_AUTH_SALT', 'PW1g:Y;/>r|Teq*Sfm%,(IJiF?wb,{BfLPsF{k0%/gK:G`lvos>:?r0T!MrO?m||');
define('LOGGED_IN_SALT',   'I,3d;Hg$Y`gSfFF{+>E5:ZyD>MG;sOn{_> }rI<{q%U%~V#Dot`E=8VoC8JDf!5N');
define('NONCE_SALT',       'ZO$(,QGvG/d@j8=Fa:v.[1~nK4(X3[zpAQ|7%R|c{gKvmj!oFu`XXB0$4XCX,k.>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpphpkursus2016_';

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
