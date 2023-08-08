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
define( 'DB_NAME', 'userway' );

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
define( 'AUTH_KEY',         '^tU]Pad|(utb%9Uj@=@y)f/6V%h$f y$~.*yq .-SWi|Vo*{Sq47=P}EC`^p%lW|' );
define( 'SECURE_AUTH_KEY',  'J_&)cG:flr.{h3hs8!m0G)IKqB!B7ekN3PzvG6QXX%<di><,8|yp,/ZKe(bmH-u2' );
define( 'LOGGED_IN_KEY',    'g&Q!rN]a=0N-LRdvokK6j6C/y*[h@%l{/j|H}V[mWv.eIE>RRKbn=4-{pLGt$/X^' );
define( 'NONCE_KEY',        'r4:hLe,NeP[E&= T=]4YousestF-zP@)*n002p*C~d=),B%GyID;:56j+xY!^T_Q' );
define( 'AUTH_SALT',        '|_= mfr.N?u]rQrhCuL]d2W6cw&[p{PKf!cj8udR(qw[Hi(c.VpMvAX=)}`G8cJC' );
define( 'SECURE_AUTH_SALT', '@=;r(~rGy`Ic@)V`VO,G*aAMBZ`3%wFj|m|]!V-Bac!&8IAgcno+7vw$,,eA/WAs' );
define( 'LOGGED_IN_SALT',   '@)94-}*8@VmH;j;p,W$./)Z0RzR4xyG>|uX0;#JFIad .Z5A#~0M1aAI(=Hk_9Zf' );
define( 'NONCE_SALT',       'MU]}q6cuU&aABI>## QWCLtN8k?.FDuektJO3icGtjO>qh06q<_pi%pZ <{o}|3k' );

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
define('WP_ALLOW_REPAIR', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
