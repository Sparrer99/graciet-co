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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'fNppA11t1nHei5NmYoJl8zmnQ08W0T5Hn59TKrUT8/H8G+aGYWgA9YHNGlOuSdWnMxRboIz/hiqzSGh3IP1nQw==');
define('SECURE_AUTH_KEY',  'yT9M3Hc7ONui+fwn8N/bfalHQ5bvoyoxx/dVrba/f+bDK0u9vI473d8+IDaugVtvMTrYhWcd9yaIIUwZDMPMfw==');
define('LOGGED_IN_KEY',    'YNxhdOyTrNTBBkH4/Q3qlVDFrfphWbOXO35pxuOKX6Y3AvtIownulp8LyYFXXWO1wULOVDRJOxoBztXd479VbA==');
define('NONCE_KEY',        'L2opepuz7ACyNITGJ98CH9weG0V0eFh5YfAOYlSoz8KZ8YdUq540DSPSwf3+MTJtX3nCJS/f5PhEkV4rRFtuBQ==');
define('AUTH_SALT',        'IX5KnZd4k7GUUTQp2Wc4MEX0+3OlOh+xzLSUlQOaNSjBUMwX6fRYdzeiZvqQQwYZtmZ21q1nW3QXMxdKjGFk2g==');
define('SECURE_AUTH_SALT', 'KIpFrn4NvPucgH2szIHBBa+PiQobxJirUd2PIX89zynjHgHZyEVIj3JVHCTIYrxQ2Z/u5UhQfwt8KiyNByaoAw==');
define('LOGGED_IN_SALT',   'uwYlpEIuG857FB6IrtVezhjAIkIphPcYNCWz0UrS9TftzAFDP9QQUU2BXvEDAaiK1/Zm/3NY6YW+bGNJQowwcg==');
define('NONCE_SALT',       'GNyB+BhbtbATKj8Vgu5VgzcpxhnqvEa6mb5JiuOKfDmvCrwLg8e/eE1XRHiKmGeStfqgrGX6TBKT+byNIlfgrQ==');

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
