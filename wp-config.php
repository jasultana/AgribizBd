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
define( 'DB_NAME', 'agribizbd' );

/** Database username */
define( 'DB_USER', 'agribizbd' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'c@EfmeB;<V:plK41~T>KQ*o7cEiJ-JV>KOsYo]#@S(-3oGAQa/l6AuZWy&Ym(|3q' );
define( 'SECURE_AUTH_KEY',  'ZL_`Fm0- 96EX/#z+9go`Ax4ESK^$|$6RX]5}f9hx5XSlJg*KAt2TPiJIaSqpBD-' );
define( 'LOGGED_IN_KEY',    '^8;70R<f|TGY,4R/ejZ^[Mk!^#R_ih%P/yAhht`)n;wG9T2!-JHxm*,!~vK6+g`1' );
define( 'NONCE_KEY',        'X,!Ta&FrE^ZFtA=6NUaR]?hTQv)~W!7%*xGKN$Kg:vCnBTS?$=O<]G8f:W7k9cpB' );
define( 'AUTH_SALT',        '^4IHS2SB;-WL.Cn%F>lk3GgO1MUUFwSH<@-Pv({o2;@Yc$r=rt->yuuiRKyWLGn5' );
define( 'SECURE_AUTH_SALT', 'Rc?[U10<]UwT,]>R*B(}Nhodd}rkE!AH9SqiclXcDH^i,9krG?;o<VIXqj=AUF:!' );
define( 'LOGGED_IN_SALT',   'XKu<QC<2@$6w69x{u/3P(=8@ KflCF8}:@|.8c$<{>ja0(S>^r#~^ spr~I.th<S' );
define( 'NONCE_SALT',       'xaU}U-_f[`#;^:qxX[:k9]Cp?`Y,|Mfl%{n;G3b]/VzI@hsSi?CY*}fbQD>kr3?<' );

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
