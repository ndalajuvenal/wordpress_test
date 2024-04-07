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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         'Mq7/wtc:Ul_+!cgp]{*ICBJNh}&~l(EKGUy?4TYm;7dUJdGU82:E}Up|Gz5z{j9J' );
define( 'SECURE_AUTH_KEY',  '>3sMnwgV0Bs]A#~oUn6d>,C2f{Abpk#X^5=^S<Dm;$__7 1&DmwP?gT<<e5qP[BB' );
define( 'LOGGED_IN_KEY',    'o(?0}>6:md|^)9i79q&$QcV<AaxHGZH?t.K2+NB>o$LBINX=F7/)H]:Gu7vRTuXg' );
define( 'NONCE_KEY',        'ttmYw:R$wk0]]#D2QZt-&LY[7[2}c8ZC*/KY7sB4f8F]3[rC%cJpE;Q9t5{+,&5T' );
define( 'AUTH_SALT',        'B@%H`]b0z!Yplqs`5;^c6wY],yYw>tgi$bkP%#Px4Ih$RtuNkm=TVKP2*k9E*M#G' );
define( 'SECURE_AUTH_SALT', 'N #`QuZ=II.QIheMS6Y@K2KqwTsjOx;)_iTaEa,R{zC|bD4~f;)_M+BYF0BYly*;' );
define( 'LOGGED_IN_SALT',   'Z]=M`8N<-Mo- mF{DA1V,Ug.WT#+/8t2SZE& (|q~:otI]CS@TU5c[d,c85J=/;(' );
define( 'NONCE_SALT',       'A<X |nB@QY>20Lv@/-pv`BG/N8sB<T/#AeUYQyH.SUnc]Df2=X/YpY:z#mj+jNw9' );

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
