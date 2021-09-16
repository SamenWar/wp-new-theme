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
define( 'DB_NAME', 'wptheme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'M42+S$4[.,vsEDm&g<1udHd;%i:F!m9Hf3hbcCyoV|t<SGZ-n9ArR9++u,oNv%DJ' );
define( 'SECURE_AUTH_KEY',  'jm]Z*lb@0pD7EJ]$ul4Ba_S9L yNDN`W jJ([NNg`j#KX)699o#@D4#`[DTspuqo' );
define( 'LOGGED_IN_KEY',    'Bl<r{q?/%m<hv>P* NNgdV_:N$^/U[BUA[qhkB*FX)|t<8*gSu@gN>u-,C&3+I#p' );
define( 'NONCE_KEY',        'G/MKBg]t[:skJ18edKRKg#6HF>E8*^Iw@`}}/zy;RRr&/@vxI0UaM;qy}!efeYz0' );
define( 'AUTH_SALT',        'bqRXg{KGHY1vgCG?T-V-s+ }XJAG}d +kC7*6{H#3-;{h6o4kS8s6L_g 8Gd``*>' );
define( 'SECURE_AUTH_SALT', 'BnGmS`nhKx{SJ=>%*wE(TRJZ$P)k1,SR5KY?-gwFfdN_7W$1%MfU<D&VgPZ@qE#P' );
define( 'LOGGED_IN_SALT',   'lOKQM]p8oo&Hf:E8e8E]ksfwCA.TdqOu%{u|&6$8z@C|25j/z]wV|czoX%^I{ Zc' );
define( 'NONCE_SALT',       '|AOdF{Wm0:~UzD9xIf-gBF$.QiPmQyPX-oKPasHTPhkyvydruG|Q <9/}oREF!42' );

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
