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

/** The name of the database for WordPress */
define('DB_NAME', 'fairsource');
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
define('AUTH_KEY',         'zhuJrHCAlznY&Pl(SMiFxy/5@XN4CSRK%x;v*_9qAO-d;@I3cYM3-Y.SIY]pTP#4');
define('SECURE_AUTH_KEY',  '^!lwo_5C!(Ya |+D]&+EJ;]>QZ!b70iA+DFlA(4Vw.jb8,MJbfP-}2dT>-9Y1,eA');
define('LOGGED_IN_KEY',    'x|AZ/rK&mA|$.)G* .[U4X%H{-X1=`[0qz[)/:l|>(}Z8Z+M5vc!o4qm9^9f@&S/');
define('NONCE_KEY',        'S{&NX/Q6%%++4LFlAi fC$_blnie` T[]e<<b6tL[ &ihgDqF{@Y1Ritl{VFIm>[');
define('AUTH_SALT',        '.QOv7wwdRn??WdewOwdeDUX^B!~)z$IP{-1l[flmd-hg&e0v>YH!@hh[%odx`+r2');
define('SECURE_AUTH_SALT', 'jRAIY>X:78+]}d`UvxYdSZcY }n5%K`px4vaJ$@#6,R`!r0-u*C*|7!++Lr>gUR9');
define('LOGGED_IN_SALT',   'q(z.2-o{#X8zpSumh>Uv{aZUiJPrtvvzk+rmL4fTmlS.0m9DDe@IC)__s+[p(2cn');
define('NONCE_SALT',       '+U7`!l2Il=lVJC5@wQ-g./@D-N||q>NpW0AkS{p]r[L}03aF@u-G6y2mP=^}yR=i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fs_';

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
