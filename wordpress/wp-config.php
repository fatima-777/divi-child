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
define( 'DB_NAME', 'dIvniUZbj5' );

/** MySQL database username */
define( 'DB_USER', 'dIvniUZbj5' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qLOedQiYvi' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'X)Q1^G+gc:?mGpPfvdI6u>^$lX94!R{r3K2WwclOlad^:GN&7;9#Lm**EJ:k<Ba?' );
define( 'SECURE_AUTH_KEY',  '3n4x,|LH@h+#(_@.8c:7$5gIZx[~a3}H_[/~G?KZ]u_]GJ6& sFi=?dcuFT_Dr58' );
define( 'LOGGED_IN_KEY',    'PNmjjff|R7cZ7m1WRWs/=|hiXL;gh/-so>_Kr:ybs.ZSos3FH=V4XtXi|KpG_qaY' );
define( 'NONCE_KEY',        '1y>Tyuy*k,P#B#C]+8wDi+7BtCyVx8:[NTMNt6_jtB`Ql /{JH&7>2Hf)&0af>zK' );
define( 'AUTH_SALT',        'W+0m1vf<eF2#_D.j?T,%_GBO:S{?:2sxLLa`%)O*=@[pwuFPY$ta5a@cR$-PS?j?' );
define( 'SECURE_AUTH_SALT', 'Yuk^L,:ElKdT/w(we*p$g`1[fpY|kOnPt2&~Mw[~0}?{<rVKiO~A1HAqN1^HKK!V' );
define( 'LOGGED_IN_SALT',   '4$N_9{?TUtS/tuzm>9ikR/WD!foQw^8Zc|c5EY;]y;q%gKdGzZ4|s|qIA_C?+MQ}' );
define( 'NONCE_SALT',       'H[7h{%++_z_CZ;7*u7$fHur!Dz-!5sk[0+~<2<HeT#=qI/bEoKV*17=B<qejHb1@' );

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
