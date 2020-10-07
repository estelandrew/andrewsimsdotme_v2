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

//update this later for local
if (strstr($_SERVER['SERVER_NAME'], 'andrewsims.me')) {
	define( 'DB_NAME', 'dbgdgu3h83v5af' );
	define( 'DB_USER', 'uc8vmvbpscwgw' );
	define( 'DB_PASSWORD', '@Boxcar01!' );
	define( 'DB_HOST', '127.0.0.1' );	
} else {
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
}


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Hxx3wLWH1cIKsmzQ+/bPDfayJOGQrD3H3hCqeyjN7bdqKbWehOZAxRYlAzyGk/8GMawPfccQ5drOkxSQwk77dw==');
define('SECURE_AUTH_KEY',  '2K9V6e3xJ02eeT+dJK/QpJvFgWHIl44lrebaIcAMYuvtakjzd48+o51jzYyg+7w4hLiET0flE2RR3yOH0Dslhw==');
define('LOGGED_IN_KEY',    '4SsNXSK9J10kwWycpS7ts9ic142m6YYF6JUR38fIgrCYyHgv2kKvNrzmihkNGVVCjgcPMOeHCTWXWV00lT6Pbg==');
define('NONCE_KEY',        'ZhP3/yMZNNmP74mJbbYt/M3iXIXelQOBQ6pnfmAOhI1TtXUIDlX7eXcUOpfcFhmIzwaar2Zg4sBR3Q5e8Kn4og==');
define('AUTH_SALT',        'hN3PYz0ANipzPDS10cocET+ThezjXr15aAVVd84iSm95z/+Ei66sEevYuceeYBaZTwP0iPDLj7H1MZCeiI+c5Q==');
define('SECURE_AUTH_SALT', 'NuAHIFLfdUFG2vwFoTVP+mgR7WU0GvXolTvlTMylfsA1eurs3lQaolo6JiROiiWgFnxJHb0D7eRD8XVyi+7oTA==');
define('LOGGED_IN_SALT',   'oUEXBwEnQzXcinxMTTQC2T+GizhHFnex5z1z3kvrfXAcmD284IV7sQrhoeR2ZvoXgpCvQWaWLiiaDCkfv+1KNA==');
define('NONCE_SALT',       'XVfAiQ/jfINVxeBDrloPPFh1buDqeuny2ToiEaO4bAWQo2pL1BwsHnHe6B1JdKl3hsf+rbQiVSvEjWAXdrXhjg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
