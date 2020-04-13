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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zhQyGRXpEnG5Vn9L@' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.<hlX6T7iT&(7te-Aq!f,o`|/wMNNp?6f:Q7JIibB#G@W/s=+%n[xJ]t*l)6=X:.');
define('SECURE_AUTH_KEY',  'z]D?V|{]AhG@ax>%4r)}@8NkWLspOBUF%I$]28dpunCzzDY>od, JT}X_<l3K+Gm');
define('LOGGED_IN_KEY',    'pJjFrmWXvB=};yw!-^a5y|M1.Wc?x(qRikqA,+#h><i-(BPTNE[sNxTT5!/lO087');
define('NONCE_KEY',        'E}M*&!$m!B,EB|uhUe>_i8TB Bd:*&5tEnea;pdOOT{>/.QLuJRcJjufNh!iu Z|');
define('AUTH_SALT',        'o_C}RbUCp|oBLL#5MOlG<J)ecb4Z5FM37bQG|mBz*s2{h<g.:?&9IDNM[wZS+ p3');
define('SECURE_AUTH_SALT', 'k_hKGu-WlWG^hApgNVeNE>nXaIfK!GY|MOa3eCNhmpi{}py&P7H/`Cmi;5%*+JbN');
define('LOGGED_IN_SALT',   ',U[{>DjPPLZtNUt>P+6)}&/F<p;kvHd(D+bk6bc(8oI{%M/s`0&l^MA|H4FxY3+f');
define('NONCE_SALT',       'Hc.C-/-NJG@X ^Wojp3/EdDe[7(EAFazwBRP_{HAmlRY#7+]Hd!>-7v8u&2vsnp`');
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
