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
define('DB_NAME', 'danangfood');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '.#zP,#|R^H}ORzaloP@fX6eN/a{Bpk{+m~._-m<YBoeWoMtcxmO*UG:Fb$^-0D[ ');
define('SECURE_AUTH_KEY',  'l=J+$<+AumyfTe~-#ULlZ$XNY@MirZg{~QF.%@IkZZeLO;FA)aTG:qDdVp[(}WRR');
define('LOGGED_IN_KEY',    'l[>0#!Oqx $j}=t$3G<%6tB6L#}t$YsMD+V*lUWdsT!<^R2]*LJde}_rg*2v]dN;');
define('NONCE_KEY',        'b(DCmu/[yu8F!x%~Mt=~FXn[%J2%fQ9NX?ef}t#P@K`0m Pjyf%v)T2a% QhjsJA');
define('AUTH_SALT',        'cP1O~TW@-?Ga&ws.>*d}/$[W0fP?T<(9%zqPbuR@6Cn)yni~utZjnW& w{q/`@iw');
define('SECURE_AUTH_SALT', 'H39qt>n^3sWe)E7%&m]E$ZNI+^tWR:qnW6:HG_o!gWLo,/*=+9WLwQuX9:=TB}Sj');
define('LOGGED_IN_SALT',   '|6jsprc}Z.s6] Pb,.LlnzMr!OQ +xV+w`%II{Dv?2>i9Dh!j3p%9fXd!$We9%96');
define('NONCE_SALT',       'uG^ndez<tX}h_wCr64U@:+&&g^O[sC.e9v8=d5)KtD^}w,q_Pfg<HrOrh0b_mYwP');

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
