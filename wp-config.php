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
define( 'DB_NAME', 'wordpress-test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '&OGjEV/{Y+3:,L7vV_[&8r$=lx&6|Z|KRgi:0`h{@hH*0*6_kvgZX2.zlzDXiBe.' );
define( 'SECURE_AUTH_KEY',  'e/)E~DQyhKpGEviQ!W<cD<`)N3)AI6:dzi1(>YXqmwSeuB ^PHL!/lg<A&dcFnmB' );
define( 'LOGGED_IN_KEY',    'r/p?B{Oc55Y~v6mD$28l*86!-,:2}[lO<DR%maOjChps:Ml_L%S07Vjse{MO:l`[' );
define( 'NONCE_KEY',        'SAIqV0]JhNDL]WTBrIUMOkYp2]o9DqrDr%<^d!feMw.fp_~{!30#aebKI>PC^p:J' );
define( 'AUTH_SALT',        '*$RF=6/tb}z~c3o1ru@uCQwHhKaFxo3SG4g.0%}=AR($35A6RXgu/6CVJr,Cb^lz' );
define( 'SECURE_AUTH_SALT', 'jKxN3Y;BiCx!rNj?E=qJlbb%F0L$s{1 z`BDht2GqBY%t(tunv2V%UbOnJ%#LK@C' );
define( 'LOGGED_IN_SALT',   'c6q6lp(H_VIB:q^2x>YHWi`lO6U_XZK*CGvzx&r1d8f#gHsi k7>;QW^}bs rpV0' );
define( 'NONCE_SALT',       '7bAqhvgOQ?O_LRC2I 2[|q2i!<_9r JG<`F@)*-C|.9z*#nO-RX<C&u4E;ixLq.z' );

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
