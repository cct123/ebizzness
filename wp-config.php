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
define( 'DB_NAME', 'ebizzness' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin12#$' );

/** MySQL hostname */
define( 'DB_HOST', 'ebizzness.clpgoqvatfrs.us-east-2.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '4X-)~CarDCRYm1`S=V`OQ,1]g9Li.zh7U06_|<z=nL-5.`&uIe5BQWw*hrjGnn>i' );
define( 'SECURE_AUTH_KEY',  'pCAo@0[APeSLSo4;b!Igy_@Y;~9HAt8Iw.lcQIgQ~IhD>4,ZS/mZQhwRi#LYRNV6' );
define( 'LOGGED_IN_KEY',    'FL?II_@ Y0uKI?qEi5LK)@wx^K9ww&3n%B.gJe1Ss[.d6W%KVtk2ar0{Tp~?NL0/' );
define( 'NONCE_KEY',        '-nMDd]w$G4V}iTfKv#QM9s.G+F;55Pu-N-:6>Fy)X0tw[)jiq+Or= u@gn^$Xmmf' );
define( 'AUTH_SALT',        'yo*gZ0{6FCuJ2iB&_}h-&9IF(F0l+5dojN:/1+~.h=ugpj>?pi]GhSfXDIRujL^&' );
define( 'SECURE_AUTH_SALT', '<fzg5R2T(8.#qyTy@Fg2P^}T-j[g(CPk*%,Uqspb$S(cJHSSIDht0TEdI=A,NY2<' );
define( 'LOGGED_IN_SALT',   '>vGkKK;POovUX]u{HKFW=Z[4$>3LevW_Z^9~P+R&;e^@(BK9X;8.hn3/6y]RoiAi' );
define( 'NONCE_SALT',       ';B_P>T:-1L%,UYvI%;Rq0Q^P2F8C8$)2}76e$,ZDVn!`W*P3ywAd_W?=Ool[VN8~' );

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
