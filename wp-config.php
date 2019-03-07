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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'rS(lF#<zN~H4&li` rt :V3HJ~DW.4poBW5$S/&>b8jnHDZ19qJ@[~B5(M*}]tY%' );
define( 'SECURE_AUTH_KEY',  '{@;9,HKFQfo&q9uJNa>R3[^yF#PL5~,n`qJ<il{eR,@@wLTKc#/okj:=3#)c0[$?' );
define( 'LOGGED_IN_KEY',    'D,zr8iTOEq5<{SC@LakHgXfnFd?52a;w$i2Uiek_=;&iFY~UG&hlKQ+ECF.~P~e8' );
define( 'NONCE_KEY',        'a>*Q*<qs(a08tw:.r:u])Q8)kEqC=.[fzflI~*6`i:6GA`;9cjO3hx> 5o$zuH#p' );
define( 'AUTH_SALT',        '$yo<^}x+>MKiF8;pdg6y7rCVHN^qyqw1XoIHOLVCXmY$sX;&~;L,Ld6qNj6Gt8sP' );
define( 'SECURE_AUTH_SALT', 'KNWi66MYxa(Oe99N5Q|!/)pG.?32IBBRQX=zT^iX7wqSssM!i}Cg}N%XI<oDLX@}' );
define( 'LOGGED_IN_SALT',   'yB%lsH0Z6ejUmQbb3Rc>6C^1J8~4Dlb5`=St1v*{LF)]qU?:fvC)bC<1%ylYRh6J' );
define( 'NONCE_SALT',       '}8/UMl^]Tc0p<H<0hrYYGaJlmdrT6 <NsF</:P.-n{{7N5h}J5M]_3ioG:6$EB&S' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
