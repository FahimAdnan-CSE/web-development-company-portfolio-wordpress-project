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
define( 'DB_NAME', 'portfolio_project' );

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
define( 'AUTH_KEY',         '[7|->]:-&mf3%|DdO-r#pi7OQ0|OlqxH{C>i}m&],+EI;W0%Qm;:^&0];Uc{g`or' );
define( 'SECURE_AUTH_KEY',  '6OpkCL{D5E:A r/m~*EkT~~qRzAw8UfPaw~m0a?F_EC.N4QkZ,7xkoOz8WkOW*WM' );
define( 'LOGGED_IN_KEY',    'PM##szDRx&{2o^Cfw8U%J[>%vV_b`f{9O/:Ll{TO]jgZ0)S7kU^! ;8IgNTmYS58' );
define( 'NONCE_KEY',        'KA;az|Phr}a|le6hX=xH8xSQH^!KN#5oB}LF9)IN_$[4`}g59HO/Dwf]J eC7QSB' );
define( 'AUTH_SALT',        'Pzl=b{R:`vjfX6vF`f}bk~Pspz>K4,v5M_;:gjeb,![JLM[9=:%~_2vSFr,5fAVv' );
define( 'SECURE_AUTH_SALT', 'E+;lIO13^aMl{G~^@4;_383]dp19HL}D}wBIWpD}+#WaBxfhRPt84aO{K8+I48]-' );
define( 'LOGGED_IN_SALT',   'VQ6|{[K{~#dYVHCCn,4~vPZVX4^XJyZN6Z?(WZB]HmzRb`}1WijF]&*XD>ZA[`I^' );
define( 'NONCE_SALT',       '[OK|}C#ER`d2%5VX)~?^=h1^]pWIF,+@@i;${ZkGqDjaKrfr=`z_EmL#?yXBNR6Z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rs_';

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
