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
define( 'DB_NAME', 'mercande_demente2' );

/** MySQL database username */
define( 'DB_USER', 'mercande_dement2' );

/** MySQL database password */
define( 'DB_PASSWORD', '(f8w!H6L(yq7' );

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
define( 'AUTH_KEY',         'Uswj]k~ DXy+Znx:e+]R66vcff/![cN6~3[^asvmIxJ%dSZsgU!MT~w^A_c.Uql~' );
define( 'SECURE_AUTH_KEY',  'L^KU)!l)U.LwV3Eu MYu$8CioVH3cfgSanP`#j gf)eZ/whHE`qBaiWTn%9n)&M ' );
define( 'LOGGED_IN_KEY',    'd.l:=}[Pka>(  o@Lel,b_PAj:.lk::BgY+CGU4Xa(nGur_k)AAw8nVD@aQz&zac' );
define( 'NONCE_KEY',        '^Wq q4 *qpE/VB& ,0W8`M;hl]!nbv#dKXQZAWt_@Cv*f1/8@I~mHDkaKKjJDupN' );
define( 'AUTH_SALT',        'n@:,m`gz0gLlL/QBJnW5.p{C2k%JBiT|zrHT1h35R8t,E;baUNB~6;V58~HKz@f<' );
define( 'SECURE_AUTH_SALT', 'nB($scVu~MeYI}?_{Vk:NbD?>.Wt}8.kFu0VpgFYrvbIMnFPek76Vg]dcQ@}K,jd' );
define( 'LOGGED_IN_SALT',   '#qKoh:drZS5xW4MY(=s0c~|=;NP{KKy,.{b)a2P6&zXr$zYR0N|Y:Jr6{]3D6p|U' );
define( 'NONCE_SALT',       'v0;Onfr/CFe&UiK]O-kKiR)&&q|Qi$-*<5rXB)Sbj1oFq`5&zV+--!}p#>}C$oLk' );

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
