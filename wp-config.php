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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Qf1Lmc]+,A;m!^IACNt$86%A=7F-)qsACN.zmR_;j~YinmQA(N<GR!f|;,Vu|Dh<' );
define( 'SECURE_AUTH_KEY',  '0Y+xU6J:JpAJ[ 0&]!/sUN^jK8#EI{D>30tYrxiB|@|ecWo2f;=V+Q7q /=m!A_V' );
define( 'LOGGED_IN_KEY',    'jiC[TTWO^Qi$~6vD<<i?(-S+e[=^.t:ldY9^k5X;q~52KZcrK>L@6P9|5>[W$3>9' );
define( 'NONCE_KEY',        'p})ff,5l;o>Fq.}|ufzDD*_l!Kw$vQ9LNe;KtAo,;??PMEM~vFI`O]|]]9TkX`&;' );
define( 'AUTH_SALT',        '^Rfrg4R>eutxf%JLSyO~>KE2Zrvf.{EN$mJL3rTl}xw`(<cCo`[y;d~dd3pu_I~N' );
define( 'SECURE_AUTH_SALT', '5-JqY9L|4&HM]q6KwrOu2o+]H-%hlO1Y>8fDR&8F`|(h~]w2d`6pHJkP{$>^`SNQ' );
define( 'LOGGED_IN_SALT',   'J&p4g0S3}ebGuhlm+jg1nI58vBl^Hn)MN e~FGRM@rLAPOkxvEB<(c4&,lofa~A_' );
define( 'NONCE_SALT',       'z{>8#l:/Rgait#<7/SyTKVa6kl?~oq#guV|63OHv+bgi[NzqWniY{KEDNrjQ#`x=' );

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
