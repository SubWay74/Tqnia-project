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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tqnia-db' );

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
define( 'AUTH_KEY',         'OPZt6c+*Ywo%eP2Wk1g>s~NlpP<69-XJCx84vK9A9eiGNQ2x^Pf~aT9bjwE:aK[-' );
define( 'SECURE_AUTH_KEY',  'HC4zs4cg2l  lfZiLd}5t`y:BF~I(jX_23-w@=Ryf6IF[SCxi$@$8ELFQ^Bet][9' );
define( 'LOGGED_IN_KEY',    'w<I]R~66JIpr!P b8=fps~g,-NoBPscQ8y(z}`_~:fxr[JBfJA9[{6jagZm@4dOQ' );
define( 'NONCE_KEY',        '>=E:CBCwl,hes1uFl& #sF3jw,llG$vozLVmde>tWT }If+q%h(HQf<Q.8gp#{~f' );
define( 'AUTH_SALT',        '}5Q?2$_q~o=qqburH?j1X;0J4*?Vr(F0J1&T{RJ~=>`{wBs%#tfe8Dr Axd@gxp ' );
define( 'SECURE_AUTH_SALT', 'v(X5cEVa7~8f@%xAQY<]:k+0Q8s*|R`Ll3N/KUkv}3LBJ1A>ksW G}WI?&vJ2~;5' );
define( 'LOGGED_IN_SALT',   'M0$sfxWn!VJ_tl{NmTtmq~bsl0Z-XvR(%6?}@LWytt;V&`{@,}7wQG&-ejzc-S-9' );
define( 'NONCE_SALT',       ' (r]Uh(-w1uPx?ps<w:dp#DeLt+u?IkLXv#:#Q@8A0#y_D<BWke?-nZN+dQJ(@AK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
