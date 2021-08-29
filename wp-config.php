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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'byxarala' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rgqVhH7dISf6z0jre7AJFNYwwAekZa85pw5m0Nvk3hDFp2virLFKCjGUfimgnajd' );
define( 'SECURE_AUTH_KEY',  'pGhUGKdJfkUkJme9VSY4hmyTmgCeRyni8Wd0Tv0rZGfo8OWGNTTToWOXAtvfMETk' );
define( 'LOGGED_IN_KEY',    't3fRv2S9eJahxenJyRkEDz4qlYnlA4itRisYaZc5SKKxJrYBWnjfI4YIP7Gkh0ge' );
define( 'NONCE_KEY',        'bZ2djepLhhhaKucObZKEWgk6FqJ3nByaRlM8mf77NWG8GmwUQRH8hqTyXogdu8nG' );
define( 'AUTH_SALT',        '7i9jFHOAqpJh1h9eoYJ4W2y9vcxjQ5Q0Yl3oY9xRO5UYT8fSksnwoWGdFyZVuhxE' );
define( 'SECURE_AUTH_SALT', '86gDd6K3IwlazILvXaoAnqyKQnGjG99ijMUdLRyXQhIym0BdBC1lfxxX8ZAZxCSu' );
define( 'LOGGED_IN_SALT',   'DgIzFf8ki9nJLF6IAUjGyIEPwtgEMqOsG56kbI1J55bP0n40UIva30t2b3JhvM8B' );
define( 'NONCE_SALT',       'v113JONdKXaML2uOJ8B2DEnWIHtOlstoo0YAjQpYflI7by7yvZo2G9WE8ZSY4Lfw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
