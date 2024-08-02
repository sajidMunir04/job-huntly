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
define( 'DB_NAME', 'jobhuntly' );

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
define( 'AUTH_KEY',         'o3q>T)|q!%?,Nr,G7;}cesSH*G.OE6@y]D L5BD&Jg]Z(<xfx_hV^u]P1!U@N:2Y' );
define( 'SECURE_AUTH_KEY',  'Z0&q{croy(ei4y5fcVxd-O22qlfc!*uj1JGW{mF9`vl(%@^nt.zkd9rWrdB1ID `' );
define( 'LOGGED_IN_KEY',    '5ITE;rdK#<CANXdU(9U61_|eu/YkLQ(^8 45v<.4(W1-FNLDOm}_h/2S>.ZeT>?h' );
define( 'NONCE_KEY',        'ipGh{PD@LA$rZ;!oy&U*ctU~(kURN-IW%eAsc) T.u}H2tw@Wa~7:kGi,y&T@p]V' );
define( 'AUTH_SALT',        'DC$th2lxa]3>u>U]f@_*|MxIC2<<_4K31G OJBkH93),I<(.5YTgO|>+(H~m{3Pq' );
define( 'SECURE_AUTH_SALT', 'u?!soe>2CXMC++_4a_d}q{j-ZK2a(:M.)T*U<Dh2)d%M(e_Yq*jwzj.?T#Jvbuyi' );
define( 'LOGGED_IN_SALT',   '%JEVS-j1Q!J9DMe2I {l+kleg?@uaCFn^.^y>V5U+Sd D&x1vCirlxoRB$0 @h9y' );
define( 'NONCE_SALT',       ' rY$m6/0!0.l|(N^0{)<KLrtU0|)E+N$Vt?V9V~r6tYL/oB;P=R!n=HSrnkZ>S6u' );

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
