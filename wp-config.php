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
define('DB_NAME', 'Fairsource.co.uk');

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
define('AUTH_KEY',         '*$Z,LD-p~tqsV<l~X0XSXLq$$NvV8CD %I.G84!J95l:h~$MDx.XOc8aEdoS,(8v');
define('SECURE_AUTH_KEY',  'ho0jzYwIn~@`guB!_~|jkW/dcmWWgWkpPBX.61oVr{4pR)-v7:F>)pS s=D2I0z}');
define('LOGGED_IN_KEY',    'm.mX<ihg<AQ|1}v/$@3Cgh?VkQU ~68|mdLfE^w4ESP9~}XhW.7-MmqT.S]xdrA>');
define('NONCE_KEY',        'i`V>F89z4wY2[|Bk&p<aqpdkiOdS 1.Ax|tC[#3r3TKvC@(M6D!M(V!S]p`:a,>H');
define('AUTH_SALT',        'sLjsF~LIhtBuylzh%HmFl!B>OoN_?R[A2.P[YP%IiuWC?&mg75Ru;cL@Qo^/$GDG');
define('SECURE_AUTH_SALT', '@nS(&~IG*r^jo@9]r-*:!O<IVMnj[qqL2AGmNEwwp+=gS`%,iewxEjciqZr||bV-');
define('LOGGED_IN_SALT',   '4=OF-2Yw#TX.Q{,<_@MtvQA*.pCfYa7/&&8a0aR53;q=iW8ez.HhResDuit~Sq$s');
define('NONCE_SALT',       'd-2FB>hT/IQ{nh]8/]dvAgMn-:tl>Xk&=B!t@t?dzI*@i:GG7P^aC@+6z3wLw.F}');

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
