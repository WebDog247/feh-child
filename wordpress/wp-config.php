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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '|iwNGVX3XT!@pzp>kvu2.OIb>-U8,b_J+`VGXij)M)3h/$s`>^Qm!],Y7r)L0Ur,' );
define( 'SECURE_AUTH_KEY',  'II<:q8J]@vViB&j]sq/0$!n^c$IK^]GX<izVINMfG&hH/a _U[;l$u#)NZ*oXJfX' );
define( 'LOGGED_IN_KEY',    'EUAZUp{L@3=-]y87Y)e[fCsQzNGXYAqMZV^V/94(GnK}FtQ.<S)>gpnSD?,y)2M)' );
define( 'NONCE_KEY',        'rwo4c]+dU5M[>%Os$}I/(b_EJqlOf}+-eLa.]z86g/6TUB0<}t^jjht%QpQg.6cA' );
define( 'AUTH_SALT',        'Ap88c<51hI+lP2;tP1co]4r/eH)YO!cs/4e:R!~DV#N|7/{vY$ZOh:OL&_)2Q{vq' );
define( 'SECURE_AUTH_SALT', 'wmz|jf+z`9OZ1l~qN{1DeRX6c}/`NvtdHB7Gz q:4-C7DDXqY4g/q33T9]>{GHJ;' );
define( 'LOGGED_IN_SALT',   'NZxenTF:e$=@kS)g iyQCW6T77tr,PJxz9CwtlHlRJIeA#I815^;B(GZBz?3YmAg' );
define( 'NONCE_SALT',       '[Mz>W73m]1&NDJO1U3OR,o|T_1S$-.k0 22ou+$~#n+4PqT_$ofrd*UOn;%UcS8$' );

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
