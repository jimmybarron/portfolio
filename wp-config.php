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
define('DB_NAME', 'mrsavory_wp1');

/** MySQL database username */
define('DB_USER', 'mrsavory_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'U(ix24]]ogpuxFyT(*@68.^5');

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
define('AUTH_KEY',         'bsfnKqw1A4icqXXbVCe3ESlMe1xTfP5lXH4NqjWMvKJlhfh5pIvk18BF2ijroZT5');
define('SECURE_AUTH_KEY',  '80yT48Cove4Tk5kExg6QyeRGtVGXWD4i7AzivvslnYjBX6DMS6ryqYCVM2QjcQ0v');
define('LOGGED_IN_KEY',    'HtDuby1Vfmy3bIAfMQUCZ6isPDHwjk2CKgsiOAbAHQJJ9dAjckh3PaAxEbfnDV9H');
define('NONCE_KEY',        'xUCSGMMJCk4C1nF6Tl8P2BKFQDFS94o81t6Kdb4mwsmM4HnFd63zLH9nf1mCiNk8');
define('AUTH_SALT',        'VMkYiTeC4WyXNtP8omlaO9tCyZqFp8dla6FchP92Y3fFTns2tZIwO05iSyqKblmI');
define('SECURE_AUTH_SALT', 'ImWVZ1kDUYBPyg2zxQdLRgDoGuFxKXrNeSYrbjD7jL8FmZco7kOxA2fW7wOoE1O6');
define('LOGGED_IN_SALT',   'HLekdj3CQ8tO9cRj3arRLeWkkBafPj587h5JbnJzwzO13sTYQNA6T1nJwyqwhcAT');
define('NONCE_SALT',       '4ldCJsSeSqzY3xEWxvjYWTMlpVe3bSmeSblaJXeCj5Q8WJMUMslQ6qZMUn3hZLcf');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
