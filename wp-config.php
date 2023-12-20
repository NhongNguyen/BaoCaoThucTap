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
define( 'DB_NAME', "rimberiosql" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         ')RXDJdFX2uq/fgS9e>&Xsw;W~q662<&ks.k^BRQ.~gQ,}PR>{C1.NT42f2*#x#-c' );
define( 'SECURE_AUTH_KEY',  'AB)przHv?B}-uqxEUvm!6G``3d&1@_cw/&@+7tM).vghD#L8c>4>Nt!`S>3mIgDe' );
define( 'LOGGED_IN_KEY',    'IDXW^}aBfs5L)Cn{Co*ez-&D7n$z*i:jZsJB0QqvdAP)HTmFM5DVtmy;JBp7Ck@J' );
define( 'NONCE_KEY',        '0M}eo@=4]ychSLvMsXth(]StDa$}M?.N] aol9w5Q=a(b8_riwSHK*$rcO!7:WxY' );
define( 'AUTH_SALT',        '^!.HPI<!D;`v&Co-!rJcx=YR!SPvs0+;AjJYHxaDK]N^<ux>8sS$#7>>fK#1vC&^' );
define( 'SECURE_AUTH_SALT', 'n}3~B[HzpwbR7{rLGTC9>HLB@ihK}M>UK0CX|38 &3]dy=&_1>@^uOp7nTJ<f5rz' );
define( 'LOGGED_IN_SALT',   'k1F-OS8,QsN08&/VO{~?K!s4iQ2w81z$>==tJKvx5&oRlkmZRAa&tM5DNRA9S$Sm' );
define( 'NONCE_SALT',       'ne.2KIH~X(XCt=&Dy;mf[20hY!S{Z(}]D?wr.RTY?_>+65k`6x?$<HHeue$lSFj-' );

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



define( 'DUPLICATOR_AUTH_KEY', 'kO 9yL.g5 p0* H2)HD*+HlOh3(XSYUSeDoY$<lND$RvvbfXccr@/j6NTk1.bRjR' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
