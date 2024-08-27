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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lith_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'bve-T.ta~,mL3B5EMj^rsbiJzoiJy2b54PCiq$/O.:&2.7<[-Vz>1hx=[5/$&xbo' );
define( 'SECURE_AUTH_KEY',  'XN=*DU-arKS`4IbPrge2m1<-T`U+@k/:s$R2AE}MO0RXH)fDsOCg >^OV_x>jU6q' );
define( 'LOGGED_IN_KEY',    'zr*Xd[tqQ&/0BkDcX>YLuqP,TKh]XJ`GCIL9H*0$0%o%7qq|,$Sit%$;[hR/wC`A' );
define( 'NONCE_KEY',        ' >[KOnV_[iQ?Z%/!evCiF<l}E.ku@a^=l)Cp&+tx]3GJvvR*s<?uSJ|0BC5*Z738' );
define( 'AUTH_SALT',        'X$veiwXT{@qjP{tXog`Si/n(ewj=(w;`ty2dnPfl4_5$4m%5 XXpv+3J%prQ+SMF' );
define( 'SECURE_AUTH_SALT', 'Moh0m@TLX0tz/&z&r>Rc6LoP!Eo?XTx!j1!j;2{A5b1EP=6TjxRvj28)Zm)+P/!_' );
define( 'LOGGED_IN_SALT',   '&X|r.uzcFzh@Xp#NqMo3>6vlN04b}Qt#L{ T_P9=}~@it=v+74n+nj`u[.#IgRhb' );
define( 'NONCE_SALT',       'yS %[Y@>?Az;ZcZ~rXMM]b(D3jMK4< 6UVj%$q:$2A#=ci`M+.G@e,jR`D|`z1Wa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tabell';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
