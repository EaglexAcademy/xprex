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
define( 'DB_NAME', 'xprex_salon_db1' );

/** MySQL database username */
define( 'DB_USER', 'xprex_usr123' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xprex_pwd123' );

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
define( 'AUTH_KEY',         '/Jc(|&kdt8=d&9-MYZRvU>pcC<}*a-`QbBC{`!Lt#!Q.(#<ds*9):9IVwy:2eb;2' );
define( 'SECURE_AUTH_KEY',  '6a]de7}d*?4XgFeDkV_CzQ?Y)F]ixiUYBw5X0dTDzZ#U8]?T+ZNeKJBDV>paenx_' );
define( 'LOGGED_IN_KEY',    '|%E6~0,>(I2Ba{]#~HOy*T_G$*9Bxr0^V(gNT{`6?QFQIMuO82crjTpcIh%#1Z6n' );
define( 'NONCE_KEY',        '`kC88dtcRc?=lllTNK*+*3(YqI*3gY$+355QC(!0bS^i_xqDBvD+gH(DlwSU.W^*' );
define( 'AUTH_SALT',        ';i;XA{>>By?T:iKtmZmmn[2/*Ia[-QKJl`/,)@HODP)i-0VXhd f+*h?6>SjM9&f' );
define( 'SECURE_AUTH_SALT', ',o>Yj@0-KV-x>gsg5^j4?qL3O`s)C#/k9nlH`uIb:61eQ20>XV37Ilb/#dw)0C*f' );
define( 'LOGGED_IN_SALT',   '-3w^?cq|%<sZ}Y}o^@8/M_/nc<~#C8;*8I0DW7lAp06~yh>O?lZS?_Llsru/zH/]' );
define( 'NONCE_SALT',       ']=HLf=vbT$_m]sNn=X1aMo qit52M(dfO:n[n),`@miPtN-?Utxe_13|+%[lpTkO' );

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
