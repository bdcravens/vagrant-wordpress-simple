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
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vagrant');

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
define('AUTH_KEY',         '@l H#@r8r|mbaEAvmw6]TluKKpGhAWz++y?g8v67/F*&:BGQoI5%O%AXLJ5@*I!o');
define('SECURE_AUTH_KEY',  '!n;)7w3JUL>O@=c70vmw5{mG_xT~4,[|jf3P_n=)f_-8QhvqN!%i?|&Cl)r24c+V');
define('LOGGED_IN_KEY',    '--?uM=RLqxUMOE!ty$vP;!LZcZHL~X#-pB+3t~UXRxWHhJ,ZqtW:^,.,C-pa!(hT');
define('NONCE_KEY',        '6fWa+G;&A.HD~$o[!mz^c~W$@?myi_f-%+,&q4>feboA#z~L3*9rN0Sri9M-rP0~');
define('AUTH_SALT',        'F-H2q+pML;INdBx+!tK#Tz#-(&Az(n9MO-?gE/&^+MN~& )%5b,;1]Wh,y3u*XfM');
define('SECURE_AUTH_SALT', ']1X`uXu)K=Jy~8~IDfFNefbduS4t;RHA8>#M}7-`bDKl4]^+lVa,/-nR],BzT5>>');
define('LOGGED_IN_SALT',   'wsmhizh 3nY%5+-4HJSgbo_}||x3*d)/-U?SL@x/]H %zw1[HNB=ighjDnKpz+g~');
define('NONCE_SALT',       'RLev6WT6JoTn|V+|[?Z5C^2:6Ury#5EAPpE0}-$@FQ|p*(RNj=,+s%I ~|6xDk>3');

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
