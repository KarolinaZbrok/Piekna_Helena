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
define('DB_NAME', 'PieknaHelena');

/** MySQL database username */
define('DB_USER', 'PieknaHelena');

/** MySQL database password */
define('DB_PASSWORD', 'PieknaHelena');

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
define('DB_NAME', 'PieknaHelena');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'karolina40');

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
define('AUTH_KEY',         '$GO>yt$:q]2Z9owM&K9&ek!Mt+8A- *f}4klSI+ZsemZ^Ga_GSMZG!|s+RTF.3=z');
define('SECURE_AUTH_KEY',  '[*:dnsUT9x_@Q~$4 3 6|ak;T&I`-KaIyR;f`>}&Kpw9iB[T_;`!BDJ0)P(.p T~');
define('LOGGED_IN_KEY',    'yplXFO:A`wcunDduQ!:zTOsy9wVo3RM$kSO&^=$Kky.]IG+BtGXbh2PS&jQ~yyDY');
define('NONCE_KEY',        'KdN7)8tz YnJKVy3DB>:yTNK7d&, p=V<j[638.0or*Ac-.`HBY+rh(UNPKw)^bH');
define('AUTH_SALT',        'I$KTaVIm@}/Wg9O[DW/Jh4a%7S/}XKhk<~A+Py{D1V,roR-m3dw6VPqx?lV}`0%G');
define('SECURE_AUTH_SALT', '|InNE-oQ1-:Qk!YL0$A {<]U)!GkX`Pco]pH/UtKVB[b:`LZ~%jb#<YLxMB}0}sp');
define('LOGGED_IN_SALT',   '|YlUZW?or1WxTbl3D9Gx2~VgE0{hR)f?&FueYW&[cLs+,0cl!$:tU[>emUIB8T5D');
define('NONCE_SALT',       'A0X{B~Q>RfWf4ug%?kov;b[98m#8Yg`80=gBAmdl|t4J1exIhE){8.kw&l{qk.2*');

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


