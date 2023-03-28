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
define( 'DB_NAME', 'webmysqldb' );

/** MySQL database username */
define( 'DB_USER', 'webmysql@naufar-web-mysqldbserver' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Naufar@%109109' );

/** MySQL hostname */
define( 'DB_HOST', 'naufar-web-mysqldbserver.mysql.database.azure.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'up7i5wtacynp4rimbxsfa9ajng2xgg5tlshogg0r88gxj1buwl6dtsg093b1pvad' );
define( 'SECURE_AUTH_KEY',  'e28lhgcso7umh6uf1unx4f7yydxysb3pnmmy1inkxtrbqolyezow51zqsaaree2o' );
define( 'LOGGED_IN_KEY',    '00h9ve4mfzgwuitrqcfsidmiy69x0fewr2qnvxvylkvisajgkovc3ugfr1tx1yij' );
define( 'NONCE_KEY',        'yc9zn4zafmeegeikrp0s7ufxrp02puzyc4ofnltxjg4ixznqvsltq4hwzat7qzdq' );
define( 'AUTH_SALT',        'u0ht3h7glpy3qyok5vovtcmsxu8ini33vemo6scggepbtg6pfbywu67zcidmkqyo' );
define( 'SECURE_AUTH_SALT', 'vmkw10b2b97hzy1wujfonet4acpbihqttbiewxlqirzoxbelbjgpn07nlb4bp9ch' );
define( 'LOGGED_IN_SALT',   'wst0ml7tfkgcmvn7188uchwrtzn7qaibz558dpumfkx0qn6ckn5jlx9pe2upts1h' );
define( 'NONCE_SALT',       'giyhatoboek5igarjy0ions1tvkm8qtkfujjq2xpetcvpdz88jpwn1hpnyibhqke' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpov_';

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
define( 'WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
