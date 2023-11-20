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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          't]zIK3GkObeB8T+/OWRUL%kYY^?o!jg)trr)EQu[[DC,K >.Q!zDN]TS(aD+n]&B' );
define( 'SECURE_AUTH_KEY',   '[2da= o*l(PR@o~uwz B-Y|{S9!rZ+WC$vlI%!?4_GClw-{-@i3`N[&^W;K*stVp' );
define( 'LOGGED_IN_KEY',     'n~X~>+e*Y6#^(8i;qeT9,8*^%CugQD;Rt9YZBE>9sal]Y 7{79xzph(SSgoSoGOd' );
define( 'NONCE_KEY',         'G2Q&GE-r#>#lr t%Qc9AE2poV51vN)u_7])vP|x|G$7&Xp<K@r7a7,Z,5NRDKG;0' );
define( 'AUTH_SALT',         '}[KO@,/#yfp^ZbPJ}j@Cz{K#Q:WzR8,>.+gT&Z8xvs5C~~9~&?-PS_:3?j*KlbF@' );
define( 'SECURE_AUTH_SALT',  'Feo!82^~E%UD6>hZgHsqs<Zs0V)f1 UG,!=G{+Lq,L&lptUjXqIRCN?Sc_x:P&uk' );
define( 'LOGGED_IN_SALT',    '+RruTT{15tlfihA6TLi`vZlA&{{xq7?Nr{#ng12L{a6dXX=a9*e5P*UY5$Iq]0[u' );
define( 'NONCE_SALT',        'kq-F!SVr!OKX84(){V++gJR^5u#s*K^g/CCleNr@*Q?Abt=UIG?(OA4J:6~]YH59' );
define( 'WP_CACHE_KEY_SALT', '#M}ESx~:N$K%i>~t|syZz$VFL^@5!G|<eT09Z2Y:).i52JQq|m#;{%l(rC}(/Tr_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
