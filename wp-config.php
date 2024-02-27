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
define( 'DB_NAME', 'cristoreyhuetortajar' );

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
define( 'AUTH_KEY',         'mB[fNST43&,gEM(#Z8plUh{00[CAou*sOl pB;?ricZ#Aenex<Q&FfDN`:*-7gT?' );
define( 'SECURE_AUTH_KEY',  'Gu-jb~x`_p-G syTzW$ .S;7H0sdf R6ci}/`?EW28dIKX@`&P{V4e/Afi.9m.f)' );
define( 'LOGGED_IN_KEY',    '>[<~t&gL0_gQL22B?Ax=q46i=:YfNF4[t<zmTjyOOf{?t^tE3!an[6xd>(#b!y2A' );
define( 'NONCE_KEY',        'N2jdS?saJ4XKV2vL ZQ:[8~CDjG;hxbn]FN7J`R6Z~ut7i(8eU#>$P<:THor$?%%' );
define( 'AUTH_SALT',        'LYFL.vJF3NZ)nbD@sTD+ik*qkxTyR]}msb#E9fVDZyf2ch4LC5 ]T@q)PYQS~Pgj' );
define( 'SECURE_AUTH_SALT', '@52Pqjg]d}~11y7iF9rOcbX!WJW/ek!.CNgX{MtN7/2[O<PKWF)~=ZRtMq_0Obo!' );
define( 'LOGGED_IN_SALT',   'HIv]HSTB/$ M5#Tlr=S|+a7h[:TJ5zXYqu8X^;I*.$WMj~t_}soMhk?3+MA+(!a^' );
define( 'NONCE_SALT',       'Z-@Q$Nn h?M|46J4So0xs<&Bn@Ohd=u<X;*6jTO`-3E:x!:$)6PrvB5)*XNR[Ut~' );

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
