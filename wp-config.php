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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BANCO GreenSide' );

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
define( 'AUTH_KEY',         'Ne|9vnoT&XG/q5.^E0SJQ~E>,XN88l_oL|hB=!Xa``bV]u^Jj0+;p:8{QyBsv@NL' );
define( 'SECURE_AUTH_KEY',  'VkfNbRh4$)sSSUk@wmE7xL$t2lxJ|*e)mv4N*,(0{`1J1~MV)#t|:]Ak?@ j]EKl' );
define( 'LOGGED_IN_KEY',    'CP^bm_+2Ea]m:S!Z%oZ[#{gQ=9bk Rrrt1Mrzzvpss1CUf[G,_%_)G(9dj$McsrL' );
define( 'NONCE_KEY',        'wJi-QZFoW,;c,nAABf(vyc/0zjd^bGGiqt{,=hljnVZ9Wm, /qfk2[&JX+^UxiOW' );
define( 'AUTH_SALT',        '7;?y:]Q>&aE6H>U5Yb0/ceE.}.N3%j^0<|>W2nvDy^N|cBT9ebkQ)60f6-LR?l*+' );
define( 'SECURE_AUTH_SALT', 'IUI=R#$LwY0TbnGQm?Y/4`5! kt;3&}g7Fo5oZQ|-;F%w,X{8oL}%^O &W:0{b(V' );
define( 'LOGGED_IN_SALT',   'cgv;wN5TC:KcqjzIVq4+zX#;EZ(Tr6V!vuSj1&Z0bAG:?qZz UWF_)zStdh30WaD' );
define( 'NONCE_SALT',       'm;A80=,tjl FXd^W5f0pwP-1y;h]7yu=@Uj=R]~?V<X}KSE*88ph&0aMr :f2kux' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
