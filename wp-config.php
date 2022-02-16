<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'turminal' );

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
define( 'AUTH_KEY',         '@3Bd|]UTp(~+n5}q.xa^A&53=-Rh$CDF~sW>~0KF4M`selZ3IK$yA8Di:Fa2cT^g' );
define( 'SECURE_AUTH_KEY',  'R(SEw7z_!^)6j_br1mojAx^Y@_un$p}H|,SYkmR[:~@`rqRu>wujFO|>;?;&,Kq_' );
define( 'LOGGED_IN_KEY',    '%c~>ZC0?gC4%%q41b186<XU^c#EDI{uY77haAs(T]%GsApWTOtFd/DNa^+7Zg&50' );
define( 'NONCE_KEY',        'HqUEb2@jXGb}4f6]UjVv>z+1869I3kOK*V/PckB*{390/!6JE:Qw^LP[AY+ ^`Pr' );
define( 'AUTH_SALT',        'Ogq5fz1wf{ cR%Lr >gewJ;ykt46v85TZH>_*_f56`:tXxcLPcW^y%Wtc?f,lgH|' );
define( 'SECURE_AUTH_SALT', 'PW1t]~:YHuB^MeRQ8E/{iQad.mZVNTd}2(Ah1^:ZRR$6Z+cll#:v9gP.{&LFN9ZR' );
define( 'LOGGED_IN_SALT',   'R|%0879b`6Q@/-3.8/Ays#x=]Yi+ykqsD})wZiVsMJ/m7tc{Kz{]Q0O~b,*i[Oc.' );
define( 'NONCE_SALT',       'Bie<v>*OkWK`EOz?e&cz]Ac_nSb2UoU6d%ZCP%{eV16[MV{0SrXxL)=8_jt-ie_,' );

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
