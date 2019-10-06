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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'AsfO-H-3zO8X#+Gl3?)9`NC<4d,,9@#=fs.EMAjGSJ?G$+a,_7AJ,0t!%F>@kvL`' );
define( 'SECURE_AUTH_KEY',  'u&ri0qHp&[V-tA24L8:e=0[>VizMmeZ2>PX%M^FVN{+1N3{|Tw/V?V=18lV[XV*H' );
define( 'LOGGED_IN_KEY',    'BJ15E#g]{lXQ(W?:4yF0La3?b6J!jb_{ACB^(R$SoS~qgV6Ty4cL[y$PSc5OU,ID' );
define( 'NONCE_KEY',        '~P*5bW6;@(2 hoE|K|UczJt^C}d*);|.^Im0(pD0lxV4OnbB9.Ev#9#fwYk=f|KH' );
define( 'AUTH_SALT',        'b<~L&36|FBjK3r$pz);zFd3KrhpvM+w-jf2g$T KfnCi@5=b~~Zpv%`,@2v-1w@k' );
define( 'SECURE_AUTH_SALT', '||dIac6pHJD+>w9>u>Si(&>hob*/n~eX+V(]9?!VQc1zN(dzJ;KJ=TdZbj!f6 4i' );
define( 'LOGGED_IN_SALT',   ' 9dFr2:l%~X;FrLfO-e9wLlOm,aW2H9qBB7=rhkqOZn/}Yj4THdYi*v[r)I_ ]8~' );
define( 'NONCE_SALT',       'm7rm5]Xag1uGv1qS%W[1.3RI74,]cY4e4.H,x{>udkv%Xq n(8dE`_ZRZ]sUP@`o' );

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
