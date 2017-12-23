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
define('DB_NAME', 'filmlibrary');

/** MySQL database username */
define('DB_USER', 'dbuser');

/** MySQL database password */
define('DB_PASSWORD', 'dbpassword');

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
define('AUTH_KEY',         'no3&4Za^t~>b%4>w~Mv|f.Y%ySdg`&q=>3OD@F@o_ie_T@t,6/^sG6]1NeL+30*b');
define('SECURE_AUTH_KEY',  '$%rQm0|K+E]9e]fZ/NtW20Y%s94L_m:jB_S2f_pj,SU}l4?`c(pE}sKB.3;g,DXu');
define('LOGGED_IN_KEY',    'mYqsCWN+S(Y/NW{7@},1<bV;:ZT1)IQ/hAQ/R|Ng$U6=)^5;R$Vwm8J]&4hU,29=');
define('NONCE_KEY',        ']kI%%rP0eYE ,u!w@dTQmXMyGD86H2U7rOVhG|B<V#J,@$s2&[/*a4[r{N/iSW5M');
define('AUTH_SALT',        '*HpSR?fmwgBL^86qS*^lbvC_BKY mSU$Fe1G&a[Qc=tbF?xcY-{@R##}XrVO69;C');
define('SECURE_AUTH_SALT', 'emLY+OF&gBjN*vP!T3|/,nW==Pjfg5(Gba1&s&n58rPq>d!0^xthqbn-JPd#tPxf');
define('LOGGED_IN_SALT',   'lf`<WACe4P]kpO!Yi[8?wL#%JM$4r)#U9.@q,<3xF#;B%c|s_<s;_CG0|t~_ZMn@');
define('NONCE_SALT',       '/]ZwL`H58E{`i8c2`U%w/F=DoT5nO}/%wAT&1tS6K&eUU@Pax%4THG8Fp&G}6B;z');

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

