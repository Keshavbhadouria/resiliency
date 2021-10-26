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
define( 'DB_NAME', 'oxeenvpc_wp712' );

/** MySQL database username */
define( 'DB_USER', 'oxeenvpc_wp712' );

/** MySQL database password */
define( 'DB_PASSWORD', '@Ho86Sb4p-' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bfmpexvrcb6dehz9o1ydhpygh9e4p2ujmpucjdjgxajhbp4bahtros60nfq68otk' );
define( 'SECURE_AUTH_KEY',  '1onhg93qkkeas5n0khsl56jhcwup4xmh5135xyrxiefhlirryjda8whvq5bppknz' );
define( 'LOGGED_IN_KEY',    'yst8znfga1rirkez1efinotg6c8hqq2bvtcloydgdcil1jja8bxzumnyp0wz9oxy' );
define( 'NONCE_KEY',        'zga1xt7jf9alf6ivqdodrv5ltotd6bsff05r8zpg0bq6okzesh8w3o0dvn7cbnfq' );
define( 'AUTH_SALT',        'c4ioif3ujhatx6bfvshzwbr354xdbnjpcwohzwze8sbfdxckyuhfj7mn7m3uzbff' );
define( 'SECURE_AUTH_SALT', 'b1smftekfbv5c1mlcainagmlryhctt2hxxf7rqzvdt3pqghahednmpqxr1amyb8j' );
define( 'LOGGED_IN_SALT',   '5s7ur3hiy9ronrf0qjvkdmeftzwlsjiayawjgvga50rwwbi2d0f7luomk3rasotl' );
define( 'NONCE_SALT',       'd6ayojgwigwgqr1iqelvadbeq79nsgnrp7byxy3wxp0vh4agibedfz5c9fvswl5b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpka_';

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
