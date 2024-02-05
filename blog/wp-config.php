<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i8584539_wp2' );

/** Database username */
define( 'DB_USER', 'i8584539_wp2' );

/** Database password */
define( 'DB_PASSWORD', 'I.a1vtg8e0bcVv2vwmB63' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dAHo0aNvG4HJAh4nwu9tBTfCBbjOfBJ3UL6rcuSnpZ2VXUpBcr1xz6MYOxAGk9bC');
define('SECURE_AUTH_KEY',  'pJWsexEMrSuK1fomBsGvHZKlmlgNvIDvvQggGpKR6cjK5tk0sjxOrwkxMASiy3Yl');
define('LOGGED_IN_KEY',    'hXnXVntqxBu3ZrnsfITRXsMqe1VOkIK4dXhpVUs8Yd2f3khymJCyz1QuyTq3owy7');
define('NONCE_KEY',        'MVV704dltVBvTJKK9zLmWIdxbwN3wqvvROnZv7DlHx5FVQmRteEkfNiKLRtRt8Bd');
define('AUTH_SALT',        'G8LTCRTf4l6EwDJ73G4Q9NEIXQ87233OqV1YGAPwjiYsW2dnA30jeMSPmb0wXuia');
define('SECURE_AUTH_SALT', 'mGWU0uP8aJSEbNBwwvuCb8vSGLGK0Y70AzvoMCdiJmHZmC4h1LgmD8iX5RjNKzxa');
define('LOGGED_IN_SALT',   '9OAxAYZYDMTpDcyLQXizon04C0hpzbcLdCpDXYkKdCUdWoxopJpBJxNZAQQsUu0W');
define('NONCE_SALT',       '4Ki9sWW9qkc9dFxvQJ9Jz1IQj2ez2LPFK64GX0eBARzwVeZLsoG8QAGjuV3DZeCs');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';