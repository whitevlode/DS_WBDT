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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'test' );

/** Database password */
define( 'DB_PASSWORD', '123321AaBb' );

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
define( 'AUTH_KEY',         '%Tlt#4Ok-0v5/E;U(ke`MSh2D3fL;]o]F72n:3&-<3nBd,GvS+(WTc=2A%]qiV^3' );
define( 'SECURE_AUTH_KEY',  'HwZ<fHN w3Cau=@O>]=>9U>BBH$(.y&Sb#w;)}i7&8@-uE4X? DPemx{G 2e0@}K' );
define( 'LOGGED_IN_KEY',    'W#l~q{ <8H*la;1K?MSvT$HSc!R2Nk%_b1=F,jK8%+,7XT{bQP(WX{|U5W%H5u;Y' );
define( 'NONCE_KEY',        'FoZD3dxK(yBq>l/nu([TUz^0olsA^SOD>pUi {qb#{mB1v-!A 0SjXvtrjkNhZ)/' );
define( 'AUTH_SALT',        'Ij/QHW2<L#LPKOKq#z9F/$#=uEJyG!hiTXt*o2[L|Ym@v S,.)w$@5mnEsE/F,Z#' );
define( 'SECURE_AUTH_SALT', 'AYFZoC40%{Af_8OcCEOClref!(L~Dhf=dG^zucx6oA&_zd:8,!l gkUzIX$+Bkdn' );
define( 'LOGGED_IN_SALT',   'fx(+i#>r|@ANz-(@Enf/BT|?:~:Lzoa[CdXY;)WF]C?*&:Dnxl_<nbW*qL8}jjS?' );
define( 'NONCE_SALT',       'tPT3ubdDR~e_UpDp/ gUF2c,^.<Yx)qpB[(A*u>_Fe>slm2Q>&j=,^o;5:N|>s71' );

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
