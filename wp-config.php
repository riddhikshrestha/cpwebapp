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
define( 'DB_NAME', 'cpwebapp' );

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
define( 'AUTH_KEY',         'Wr{k*I)GYQMPN!E)[d9Pdn 1~qycwQNdDA`)~C(mDWgE%K9ga#xK_>;QyRv2&eLE' );
define( 'SECURE_AUTH_KEY',  'Hid$mdK[Z$:|Kq-hMf``!k/d[y<r$>/w%<w+5KB3`nVTgX~w(^<%/*H)Yd9qVnj>' );
define( 'LOGGED_IN_KEY',    'P0*QIUTv9XrQ;lbh|2e=8f`wa;aq[MDXio,:-YM(O%@aj]j.7%r2eyWs>f#6Zhg%' );
define( 'NONCE_KEY',        '{Cu)~N}$6&#/?xzy>W;)XgF1IV,/=Tke1ef6,/N6Ki:PEW!PccQw`@!E}XZv5>ix' );
define( 'AUTH_SALT',        '#{HD# bup~_N8d.V!)-nL&Si*iV{{FwW#72|0ciC>:2h))!y +WcH[pGWuwBO<.=' );
define( 'SECURE_AUTH_SALT', '2|cASgQb8Z6HqaRgo{rQH_.Q?;X%}XR><fzdd2Ek2,@us}P8[S!ar:4X_0-YCe)V' );
define( 'LOGGED_IN_SALT',   '3.4a_63B^pkn2J5uq)R.Ko^r_,#SP,&*]Ys4EL9{T5^bc9p2BAW9_FzcP:Zs<n|Z' );
define( 'NONCE_SALT',       '@8_2rY8G`.b!v)m85o.l).z2LH;KoMbQPE0AA2%^cpOgJT.+G=-BNJsx#N}Kc%^2' );

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
