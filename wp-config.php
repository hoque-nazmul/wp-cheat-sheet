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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'starter_db' );

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
define( 'AUTH_KEY',         '5dm%qOh.h[4=9RVUo9Z%0}`lC5at8|OFHIs}]Js9Btm|%cN[GUEOBbzU.:a?O[J!' );
define( 'SECURE_AUTH_KEY',  'e}hO)?Jq~[>{M#tOg?wI6#?G_MgfduoygZq!/sNjmmWu]9u?pV)`er{d1,PQsk$Z' );
define( 'LOGGED_IN_KEY',    '&?9&-`.UmB/>GDiL_>X|Hs,j-$0G;vF?{B.i=_Pt0E?5{mZ4$%F5Navq-mHUSa.j' );
define( 'NONCE_KEY',        'c+S^fU!n5aCPfyAJUyJ#ni=ovZ,YY>!?a[M>npD7>]b(9n$z5q1TnEKlD@>=1f2K' );
define( 'AUTH_SALT',        ':sXv3kV0~%,:O6N@LLPU5Iu->flwpeyyNmV@R+!j%{&%A|qT5Q(fViWGSGRUR~25' );
define( 'SECURE_AUTH_SALT', ')vUB?@rEWD&&;s*<HFdC($XSVz)CZgQ${XCRO^+`a6g(Dn2@aS.0n|l3o{!.L0Ch' );
define( 'LOGGED_IN_SALT',   '^ekv+}Z]w0n)a[%H7V]/:?_SP&Z$KDbT!kuiZ4-Kq]qz/qCO%J@$RQAk2hw7^hND' );
define( 'NONCE_SALT',       '1A11Al}z4t`l{hs hNEg_%|uV!?q3s.4dL9(rlwjZ&cD~dgAP* c<-_x9U^-2Msk' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
