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
define( 'DB_NAME', 'wordpress-db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@123' );

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
define( 'AUTH_KEY',         '5:&5BC_<ePwu<a)^s-{vjz1/z0@-5R[]e)53kH&v!u6X#$`nb0?N6tZ~A@e!xlh-' );
define( 'SECURE_AUTH_KEY',  'H@]qH`Z*pNJLr6MI10QClvZ#p|$o]ZpDs`xL$>]<XRCiEh[t8:mZEVL?y$@&5`9`' );
define( 'LOGGED_IN_KEY',    'hmRP/UJepnVhX#rJ8Dpa^wJU]tzrp]32=eZ7(u@LX.YLD9|i_9`{tltJYufdJgFo' );
define( 'NONCE_KEY',        '?)^@;egJa)I7` #;t,;Fse@o2NQ3 .2:hlZi%|@vB!K)OqzD qglq<|%UuKKVp`N' );
define( 'AUTH_SALT',        'N81RCNQRnp$]VrFx7m<l?;{Q-8l8PU% w/VRqUsCgu]{r[ Imf@,CFSG*D$LRSc}' );
define( 'SECURE_AUTH_SALT', 'a$^Kw-M3g)HTaah~g+oDy6n_a=W|#,Ln$uKs~p[^(!X@v cA<|oz8vT`*{z;98A2' );
define( 'LOGGED_IN_SALT',   ',=tRfTv-8Fiw0bCq~dHMkBI{s#V/2iP7W^#AG}VW}I!49#C%0v24%al+X|mzA=x*' );
define( 'NONCE_SALT',       '/It34ieJe%Up%Z,&0UEp}C0NL3B6iF0~>;DSbCM^N$B[+_@5eM$XzY|L.Nr,l!Xp' );

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

