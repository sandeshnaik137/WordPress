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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'h),#hlF<KWRq2haEC&U0]kA+;jeB]es9r5icV#io7m]m<:nD,aRS^aFXy<. r88s' );
define( 'SECURE_AUTH_KEY',  '}0K_IP61^gl}`_a<.0R$}{VH#rSnj<D=Y+7kW&@qrep|,/$20=X(u@4$Eb: sw)C' );
define( 'LOGGED_IN_KEY',    'Svk707Y9zrkb_W$.H lrTgZAStK9@!<[kEhP5!4n3UBMVXEVsT=Q_$&9Drhn(OEh' );
define( 'NONCE_KEY',        ']>aTZD~D_v$G~2QS^ET,V5@DQ2Ei+-FGPD^Nby`S14$qm$L7t^l<nzOQotRb~2K/' );
define( 'AUTH_SALT',        'iAOag;%(UoW*HHT~ K4-zZV^)H,%@bvS5EkEqoZ0)$;<KMuRB@?_~JcZNo$s=N~I' );
define( 'SECURE_AUTH_SALT', 'w$_Dn`d9ZF)Im:tR/UTC|2dGM=R+LYFla7(KT%DM,A3ZH[2k*%9l{0g3qY-kXAN]' );
define( 'LOGGED_IN_SALT',   'DE9t>,rka6:?$*Wye%8Dz@;F0]EEA]I)5To.r`gB)oAj)D&4iOp^2+6Z K3eCNEN' );
define( 'NONCE_SALT',       'Gv @,z$Lz[tL(xXC-!m([uF;PIM/^El<}g>1W)/W4Gpb2g({6f`(s3oa6PqqE:?f' );

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
