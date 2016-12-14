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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/proyectb/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'proyectb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '9MX@#g@~)o[%^G?ld-$<>QdDlm DXcsR{?+NfrF{k.Gz*d0lJ-3+O$wq=p O$/7Q');
define('SECURE_AUTH_KEY',  'c3]N=~1MI*}6>>4m>5Bs/x&|_5YV4t@6([q%Uy2W8uuAN3>6p(]E@/>#IQy`PJdS');
define('LOGGED_IN_KEY',    'X&QtSgPW25=(8i$oHW;.-ApRAMDP|>wLwB5yu ]ZnJ2?zbOQ1|fhaymcCE7[*L#B');
define('NONCE_KEY',        'xCj2L&ef s9gTFS<H+PKk<WDiNIi>?tj4m9qP&22x`1|06M60vr3,vyUF`/s|o*:');
define('AUTH_SALT',        '2t2Ny{jZ/jvxqx/eF:yC[[J~5*jr1J}j4{v7]YPF9mL^0ycA+{8w{R+}_lf0ZqV]');
define('SECURE_AUTH_SALT', 'l-tw<H+WlmO8uc&L+Y`{w/4)J;k727m4Q8*<}s3+PhCQv1W=,=M>3{,zC9>EU>Xj');
define('LOGGED_IN_SALT',   '@.+/61*Km{od;z4F0-T3pe:$F,2YOPoIVU .0u]mrh./hx-Bf9_:H?/]C xYHLM8');
define('NONCE_SALT',       ',fn%0)Y%3P`WE!Jia,;UDXvh+d6W6LeyW_&9^nb#}h(TACUhog7X-YT{uG`EL,wX');

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
