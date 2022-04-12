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
define( 'DB_NAME', 'blackbrand' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Q2b2TQEDvfeD0jiIyF6R' );

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
define( 'AUTH_KEY',         'lrjep?hTGuk]t+B@7LC0eBW11V41P4lg6}tpAhA+#<g|#I>O|K#Ij{)O$=XK6ta@' );
define( 'SECURE_AUTH_KEY',  'r3xEF%j<Gd,R<NGkO6]/ G@u>Q8~dBC)V^G!1[S&e+3Ln*X+xwj9,;n J>4TkI(T' );
define( 'LOGGED_IN_KEY',    '`R~+]=ui?g}Fq?^k`?ZY=@/yPc%X5{nKoG5i*h?wtbK_Hp?}:.vYu3)XhasdBpIl' );
define( 'NONCE_KEY',        '8T.SqZYnnO:9H2GWqG4(pp,_+V8S-4-X3fDIqK>R1!kGY4k7qux`jpy^XH)-igaY' );
define( 'AUTH_SALT',        'S5o},GSapGG@0EVk>uQ]c]M9Re81L%FXoLVDt2Kw[{V}NhwG 98`dUV]NV{):A=v' );
define( 'SECURE_AUTH_SALT', 'cRc$yR2fUBd^)%/:kuo1hJLFeq7O=C0}7JD`pEfcJ&|?r*xc}&PZ(bzVe/LEU!PW' );
define( 'LOGGED_IN_SALT',   'Hyo{3x(j]$``b|)*</mXA@7dv0?Ma|5$?[U k`}p4Yc=$pl?W?ZMh5U`rR^rJe+6' );
define( 'NONCE_SALT',       'xUZJs3W|>C%xkXz{nR}N).~rKlG<W#3yJ9JJ**5s{&1lYhP|eI^ggM;:]<%#LfH`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blbd_';

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
