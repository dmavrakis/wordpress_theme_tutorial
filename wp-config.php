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
define( 'DB_NAME', 'wptheme_db' );

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
define( 'AUTH_KEY',         'ta>($b<O <~@2Ib?WKDwOejCnQ?/eRoMhGr(G=MW&*J-=a}(km`aIBOj-2v<_/>A' );
define( 'SECURE_AUTH_KEY',  '[LkkIW&A4{dV6syb$7W`1p?[>bPoy/i.t4&W{Yt|%Q=A,=)@`yE^>~i*u!7=$PVn' );
define( 'LOGGED_IN_KEY',    'Dq!3 ?8vh*mu(bzZ)nhm-(Z`Q *-~VU9:sRm,s1/|(<Hsd,BFFGFp/`}It^m1IS_' );
define( 'NONCE_KEY',        'b[A6,Mh]a[ml..[K#<MNl,/?w=Y?+jRpO$bZeg{qY[*|AwhhHl$gYWp)7Ra[G<cm' );
define( 'AUTH_SALT',        'c4pGWB7r%r [Mya+jXXmAQd[lj*?E1]a!+n>_)>tfVW_m_$EB-9ctUZ||#,&=b](' );
define( 'SECURE_AUTH_SALT', 'Fb=?~;HFEE~u D,T(W6qd:>WJ1I~}}Eu?E1u|0QmaUTo}yi@Y_;K9_sFM:W>C[NG' );
define( 'LOGGED_IN_SALT',   '88<)E13F vRzbFbj^LPpgpwp]r0s}aO 1(vE&fn/-nC.F;x!jkc2BZTXa9BPP_$I' );
define( 'NONCE_SALT',       'zqrTx(@Kh|jz}b`B%LOd{;+VXj3F%K)CE lMqbnzDao+x88N*N-5,9{aF0}A1y~%' );

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
