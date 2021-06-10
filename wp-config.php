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
define( 'DB_NAME', 'shop' );

/** MySQL database username */
define( 'DB_USER', 'shop' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'ArEYF+2KBOa!MnId|_$2[iQWL}%&YS?pFtqPP9fwGwfQ;Q;>>~)LDS7NGQJxKyf)' );
define( 'SECURE_AUTH_KEY',  'g$e1O|2$}Pirr}PqD)+Ih5~@WQ*u7iYgX7;+AG~Z|67grT?=up_$*`.,`D:$ TA,' );
define( 'LOGGED_IN_KEY',    '[},G}}G2fyubiW/Dy]L`TT&o=XcarQgBc?EWJZ(`endFs<}cD 2fh, R-T`Ew7WB' );
define( 'NONCE_KEY',        'epbUMmu9oZ-bg@uN`W|6CJ6e}GQQ+3/-4-DDHBA7F*yhuHYhg2d0y*p= Z=v1fyK' );
define( 'AUTH_SALT',        '*HD6H*n*W#c;zxpcmqz:D` = u-ZOYc3?`;Q;5XaP]<7@8(Gzdznluur$2T%p_L5' );
define( 'SECURE_AUTH_SALT', ' VVs^RU5k3#9Yz[+h kO_;JwPKAF/+V4smh)&-[<;/GC8H#a1(*q~,PKowg+GH;W' );
define( 'LOGGED_IN_SALT',   '),Q]OWgiHI{!3KAs?gmbz8W&/(dyi0TuC@<~82.8d[IU O;9KK8[gH+rsq7evX4{' );
define( 'NONCE_SALT',       '7(IB&`1|pUSc^Ta_v YIKM|^NdB]G)MX^:K<Il<cMwnVkp}W,~C}s2/pO&oyAt]S' );

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
