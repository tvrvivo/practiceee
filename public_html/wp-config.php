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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cj33467_bd' );

/** Database username */
define( 'DB_USER', 'cj33467_bd' );

/** Database password */
define( 'DB_PASSWORD', '34ttr2pPnozZ' );

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
define( 'AUTH_KEY',         '=!Xgp%blQ,+!9xu?-`NAsc>[rz?L&-nr<${YlNN8^%pOzR;YJ`n]+^cGp3>0DgpW' );
define( 'SECURE_AUTH_KEY',  'cq8#k>4_60p=AxfPqa=M`0j/b^g5/Oy#H$amDeA*`QH7AS|8Felx)Y;_(Qzqx%%/' );
define( 'LOGGED_IN_KEY',    'Z@R+I>}c(kONUQ5v`:f8:cdMEQ%1~IBiA:aCb~J$l@u.yl[6Nv,{&PXXz2Y?WoQb' );
define( 'NONCE_KEY',        'i-_$^*FA.vk_EQeKzN*|~$O#=@uo@vId)oJR|T(,1M<5x({E[ZI}6C4}6hNd]5QQ' );
define( 'AUTH_SALT',        'llz]utZ@Nr^2^P<Kvp0pOy<Iv0=v)GhWcL,RcH11^3YpggnJKvOTbGfg`@)n4c/o' );
define( 'SECURE_AUTH_SALT', 'SCZ].Zy0.VF{j-q0ADXrM?HYR$#cR}r+$Pnw>EZ#G7jJMC{C/ |Q|4B@Ga*Kmq<<' );
define( 'LOGGED_IN_SALT',   'e=+,^wr<]9yo687wr1(Xy~fQYI>6>g[-g48QM`Z$Y/m7(M(.`sX^idZ7-s8p)hE*' );
define( 'NONCE_SALT',       ' 2)n7=NAzx)/#F9zX(at]V}lQuvq<Ap.Y;FTup{8<#my/.q,Y3jc@)kZkPXR^Q1O' );

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
