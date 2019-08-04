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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '?%MbeuLi?sO0g?u;!L$QSHwDxQ%L`<)P7=}E1mr4,<6.1wZ>>(XCsM&Te`!iv*2R' );
define( 'SECURE_AUTH_KEY',  'M#*U7(zWn!4y/Rmvi2F|.Lq?Mfwh7aJfW62tUmN*o<gu ]VH0;Xh.y5<|;?8P!,x' );
define( 'LOGGED_IN_KEY',    'p6#3)Tp0xP{ZO]E10X^X [/ /~C0^SB#6T ;eLSUy4m{o5}[QmD_${Lgz)X.!9Kc' );
define( 'NONCE_KEY',        ':|a;6#&6)(v9$Z5:^`U_lmaF:%Y<8q_<X<dG}+or ]3)AOOjma~?8vW3X<u=mY@e' );
define( 'AUTH_SALT',        'UF.V% 2<O8OPG9$Oxnifd#&8-]bkWc7&_s4QL((%S85qC.z!~@xDLn%`?o5:8E=b' );
define( 'SECURE_AUTH_SALT', '6Hd?w^P:eue{abpxp@HI2fl5y*I}>F9u[>oGpI#uVu3< Wy9.KD^ VZk!6msVD{[' );
define( 'LOGGED_IN_SALT',   'FglQGN9}`wKoOB@7i?3,xIdH(-Q?27]<I#lo~yRyz-xS9Mam 80m-Y<ekvt9L)<(' );
define( 'NONCE_SALT',       ',tAk|74,5>M7%wBMTQXD.-HhtJ%%FeN&vWN<(~aULq/(ll +YA:zw0b,q|$O[ (~' );

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
