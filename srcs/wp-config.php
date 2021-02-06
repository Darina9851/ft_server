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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'w;cA2%^(5}|E:^Ce+d-TL4bPEr0OMcJT(7TmfM{^#I}Np PFdeEEYO/,|OW4e(zl');
define('SECURE_AUTH_KEY',  'g2_0D9rsO]Ah&%uZ8+%? tEwl+rr~~/x(/n;FJ9(Dy`3oN<oks?k=$&+XRqu8.HS');
define('LOGGED_IN_KEY',    'a<w~y&?#0LXFLQ+[& 7./dYz*r;i;P6X-Ix)Ghqjd/w}L-D.);e&^P#nvM&DdCKW');
define('NONCE_KEY',        '~[B]-b6}:QZ$q^r`[H1t5BcN+xp|uTW*z,-T8>@U=Yx`O)aWD(P+h-23mSWE~l<[');
define('AUTH_SALT',        '% ,n.j-@ewjb4ajDmK*xJ57mi%R^]9xxt*qgT6Qr%kAl8[+]W1njOWXg28T O<-5');
define('SECURE_AUTH_SALT', 'LFF3 **KfM<yB KmikFKtdf3G8oW}UQv`fjT/1&|EnF;|&H7:|C<~#=f8E:z16j ');
define('LOGGED_IN_SALT',   '% HP+vu0$W.Zjo4bwsuw/t!{|@`sAHS2OG-+&OmMp+R4d$n`I[@$? D.+L:*^G ^');
define('NONCE_SALT',       'ooXym!UUx9$nBkd|PZRA6vT1Of9b_z8~Wd o6Fo7N)-N/6][EWS|]|QM(7c-r}+2');

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