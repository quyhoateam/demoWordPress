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
define('AUTH_KEY',         '.n[bte;]Z4wzECOs`2@XQXPpj:;V&f$|qE{&yL+7YCe51E3vC)U:Ls`3)^iu;#-x');
define('SECURE_AUTH_KEY',  '_&2Wyg$;q(L :;rG$thBbN1K/Qp#b,aMUvs`6]un?6=u%3~4]q-sg?<7dGgD&S.T');
define('LOGGED_IN_KEY',    '`E$d# ![q9B3j>n2VHwNY4~%QRQP&S|Gu{ezl4qxnJsVPnU@j)c5:?|N02PF:eF@');
define('NONCE_KEY',        'pLpEe)d9dpc+*!c@$EGv_ds=.UNlFMn2^vd<hpp^ZxGC79=h$-_o^ZXZ|4]`%bCP');
define('AUTH_SALT',        'ey {4g-n?9-hNBae:ZP8V5u4=<UqW(dSYGe4)lJjo=+S5~b1~%kco9Owe[:h:LA_');
define('SECURE_AUTH_SALT', '1=N0:!Q!5cx#.cRnR}T..pD-p,ZVEW.,vt9d$DFws0I`%Y}[@fMo3L,i4qKPQnL7');
define('LOGGED_IN_SALT',   'y{17p4VO2&F!xfHgZIHFF7jxTs<8gYG&@eVjM:9=d+zhZ$N8xce.6{4DOG*Wjrv9');
define('NONCE_SALT',       'mkuF*ALYsL)2c{gmacju$hAX]%_%TqTOwijJ1B,X <.G%Eq_u%m.Jl^:=`+~Ocy|');

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
