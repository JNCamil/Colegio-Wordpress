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
define( 'DB_NAME', 'colegio_wp' );

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
define( 'AUTH_KEY',         'U[X@>M.aYpt3gpI7]+awF}:Th.s+n0Cj ik`*p6SdD)a4~<Y)GJJ=6DuO>gD:J`h' );
define( 'SECURE_AUTH_KEY',  'a7a##+L1^A%/b/:1{x6QvaF+(t41Y0/S}I6NF<Mi&hzynjT+,[y)2I9bWFy@aZ ~' );
define( 'LOGGED_IN_KEY',    '{N?1 r!G]~qf2HkHh*MkuFo6)&nZ8{MQ9?.Y8(lMbO^[I0sW4*fKx|-Fc(I+6i?6' );
define( 'NONCE_KEY',        'HCiYv_]6-9$Ctq(Q]>TG|QOVAaZc.8v)7^KNU]^.7{*0 FTK[!%1mc`dkjsw(#(/' );
define( 'AUTH_SALT',        '[@04T#GU|D3wg!-eR!mXcWnXV9J%j?~v[cG7.jhm5?d&>B.-{]aTw8#}VvyCm,(_' );
define( 'SECURE_AUTH_SALT', '}R|3%C&}Sit`{W5m!Yt_E@XVSG;Xm#?(t9zhq|z,4t+$?^%!3-76|& R/A.ej{#b' );
define( 'LOGGED_IN_SALT',   'T8H;e<%Ms)LRAsHN.iH(0_{,&]8LG#o#u/?T.J>kuu?hD`=,boT)LBmr!;F}-ss~' );
define( 'NONCE_SALT',       '.@DZA3MwT7g5WuV ?~pB=^k<J&sjJpx<[SSN{@U*BE_;h.W;~cBnXMkI6n#^#?-,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'colw_';

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
