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
define( 'DB_NAME', getenv('DATABASE_NAME'));

/** Database username */
define( 'DB_USER', getenv('DATABASE_USER'));

/** Database password */
define( 'DB_PASSWORD', getenv('DATABASE_USER_PDW'));

/** Database hostname */
define( 'DB_HOST', getenv('DATABASE_SERVICE'));

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
define( 'AUTH_KEY',         'oNq{d} HgMV+~d169Zj(s`hHF.u=/5gIoC`SCTrpVEvnPu{_h{VW=5`1k=uhg|Q!' );
define( 'SECURE_AUTH_KEY',  '{!1_w= j(GLmg:Uf@>5s/y~YH_$@|(VqP{8wyZp 6j[/#TPb>M4/W:ynYCaAg*ms' );
define( 'LOGGED_IN_KEY',    'ojub?au<GDo)1c&b?CB(}gnKT{(z&d#_h@!Y4U:5bd8l<:Jh+r4ytj!?j0@z;7*Y' );
define( 'NONCE_KEY',        '/h]?%yLD?InXZ[.=enoY}3O]X/,dm6*QfqcT-,P@tqj5B <yl Vz0q:*<2foU3wd' );
define( 'AUTH_SALT',        'jTFFc$oG$E5tap9pL@?d96^hJq*C4^*wS884DA,Pw1xmowwNKd/}0lcHU[,5Fy 6' );
define( 'SECURE_AUTH_SALT', 'F$bsk0HszPW_CF2wL0Y@B}-EMaT`10Axeu67@ixi>#aF=,?}[*I|ME;6pxrZYIBh' );
define( 'LOGGED_IN_SALT',   '`] 9,tUkt.W{X?$P/Q}N|M).KSS,|Yz4<C}4LY7:].]z^<;s~?{iCGegvMokfe@;' );
define( 'NONCE_SALT',       'zZ.Yxf!;Hmq9J oM6#HtD}?X_A,E}ZN{R:Pi0?ufOB|nA]T$Z5I+Q+5Ve0)Bne7e' );

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
