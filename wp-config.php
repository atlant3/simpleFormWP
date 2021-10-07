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
define( 'DB_NAME', 'atlant1' );

/** MySQL database username */
define( 'DB_USER', 'atlant' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Maks1234' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'BY<Md3sY7ZUEoi,~Awc!q@n+wh,n>a:Rhj?s_0KetJi$<4RKOB)TYp0:s7W:w7^^' );
define( 'SECURE_AUTH_KEY',  'z9y]Bya(hEzX&p8,e<nTU~lXH>s[(:lBh`<6!LcC/jShN;0%gYgVU1!xw6Y0f+7P' );
define( 'LOGGED_IN_KEY',    'bT@[MDE#{ccsCUqq;`TMLb(l,%Xc`-S$l/4$W4#D!ni!0uL5hW?BzR,0#E+^6h/N' );
define( 'NONCE_KEY',        '*nd,_peC1vHZQ2 N9jc,@-2)3O*mYblURvWQ2I&b?{8K=|Jo+q}8|GnuEu^n{=B1' );
define( 'AUTH_SALT',        ':bAzEE(Ivac_/E(uJy}[#cLcc{<8[nIwe#5vk XXs~I}L {FHGZ8#iTOAW,w|FEp' );
define( 'SECURE_AUTH_SALT', 'B#1Q<>R7fI(r#2.#i0l[?C7h3SzCWj(t= A0vk`Xr`2YQ:@30nLko%c#>:YW?+OP' );
define( 'LOGGED_IN_SALT',   'tIs G@2+v,`B+/2UM^v&Ko+7P`fNAK9z$:%p3K2K{4KmLC=GmT`i./AgOM-5-: G' );
define( 'NONCE_SALT',       'T(=!o3PU<=;SB>;hiWh1T5WqubH>XA!CR_1N+nDB%LR4JgbfN/_5h^ZNY]rVR<=.' );

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
