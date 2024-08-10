<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp_host6' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'm;<)EwM>PcV!@XLf+v17ecixTXFWYZy2mYf8C[8J43jV]n4R-a^4u`K?O]7FXct!' );
define( 'SECURE_AUTH_KEY',  '=-:?;692Iq_YZ@Fs8dL-ApOdTB+}N`8{;D5z}I!pCxu~:l`Yvrn1go#PzI9<kR97' );
define( 'LOGGED_IN_KEY',    'V;5,C3m|*@CP2n2]Y{C:Ap|m*=$Ve{q/NB:RE=-r*{8C|fM{-)fTv6A$_Mq4N9[v' );
define( 'NONCE_KEY',        'V,c9%o~?cMA!v1mK^e2k@KU}tI}[<otPW3KAgx6@=BA7}38tkE]z3m{?lP!~BXKU' );
define( 'AUTH_SALT',        '+.mR[v1m<<avmk<!0)hVKEULR[cSZTWzZ*W><DumSTi@s` 5)XxZn]_qmB(62_(d' );
define( 'SECURE_AUTH_SALT', ',dv/Oisl6pEQ)8wqZwF@yb7K^/R49O6_`WHq7C4M&.s[T5w^p_^v`0r|N?v,P.i[' );
define( 'LOGGED_IN_SALT',   '^0]<UGHr0gp|g~ue3,VV.5C{UrLfR^~P9(FOXKfk3|yfLZK$y!__ jw4:b%MsXZ-' );
define( 'NONCE_SALT',       '2r.IKo!4ALGJK}r6hh6~6sve6*YYC`Bk.KJm9@1!&/2<I+^Iz!y4;3I]DDhIyfz,' );

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
