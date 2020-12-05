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
define( 'DB_USER', 'slam' );

/** MySQL database password */
define( 'DB_PASSWORD', 'slam1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'EO8-^f8.PByj;|@Apb:+[Ws{FrLJ)?>tqF.|3g=<:nL{.}r?WoT1Ltd3+q+~cY9h');
define('SECURE_AUTH_KEY',  'se:7/rs?Lt3FQCg$|mFF# <pX?WrOZZp]Ir^hFser]j~(q(HhM._Pd6Qt[e,FR4V');
define('LOGGED_IN_KEY',    '(@N<DbRdAnOQcoc5Y7}jl$)H;=B SW|S+D9^EMZ+I%X.g{o=wb]:>sPM++IgmEqY');
define('NONCE_KEY',        'hG`iwbU8c2gO;Aj[X$dk7I-LdMeWJdF4v1&7,J!=,$+J^7oeGZ~$C+?2 z;E Uj`');
define('AUTH_SALT',        ']?H1k*D*AwOq&$38rI#1<VEJ(Zj{n9MP+&,*-hw.oT[W{bCe/>6:Mfc_{N3QI(rC');
define('SECURE_AUTH_SALT', 'd=&>>[*$y;%#$$3=+pzS|y:X6X``^`wnB-b?i;?Hs?h*LE6dfA|r@+AzTr;A|>!<');
define('LOGGED_IN_SALT',   'QRT.Sjgb+h0,UBRp]s3.MZIa-(qUn.(Cz@;#c.:M-bDp@.KuQGu@ r|W+|vh:kz_');
define('NONCE_SALT',       'B-aA@K:T1#9{4t:PQMSy>(F+KOt%Y.!eQ+(K[hH:q2^z_1jK|jl~~:V#PJ[u06BZ');

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
