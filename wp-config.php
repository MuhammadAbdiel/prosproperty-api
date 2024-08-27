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
define('DB_NAME', 'db_prosproperty');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '.NNYP/gxw&em_xb4#MShdG7{?ZqGr%CB^C&ck&uv .Bbz#RD*seX!Uz=P#AC7rvS');
define('SECURE_AUTH_KEY',  'gNS0f#hc+=k`s@<7`n;1Zk$a`%4zAQR1G=^:HGP2<-&V2Gl*YLt-*7nXao19B1:1');
define('LOGGED_IN_KEY',    'Jdv X73%p:>R?xN**@i/SPVO@+6BKE0k6oyM9nA[#P;YtEbLvPHmw]g^e1E]VvRj');
define('NONCE_KEY',        'pU%Q^,x@p2<BN|!VNhUX9XuaR6YP[% 4yl)!2dW7G 1Z[.I<W2*%,|DH,h7G<D<`');
define('AUTH_SALT',        '0J?ekwroM8Z 0BnlV>b^b3}S<b3&lwRL*+j0L^>T.MA 1s~+Z1Gi^wof(]SV&~Ky');
define('SECURE_AUTH_SALT', 'f:RgYTlypUK/XNTXk@A8md_gUdW.0l9uwRb yXs q};Ui82h-(.g4Hg%@BMcc(t0');
define('LOGGED_IN_SALT',   'Vhe:YN.tcXNh)2 ~1}U1,.Sd?,)1pc/9z$5i>^[79nki(]^_h=U0GA&-r=rr02Oc');
define('NONCE_SALT',       '1NYa:&P8xMCy5J<5LDp5F#.R4xx6YD.;=k@h}R]vl}8h?$,<zMWhe*>a%e9t;`Gt');

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
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
