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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbuglndz_marketing' );

/** Database username */
define( 'DB_USER', 'dbuglndz_marketing' );

/** Database password */
define( 'DB_PASSWORD', 'eKU%4P1Zxt-O' );

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
define( 'AUTH_KEY',         'yM6A~(j1a,N+1FGGw!%yJiJU*u[.km>:!Ih/PZQUxF=_LHebEl_Qc+umZJ8[HjMq' );
define( 'SECURE_AUTH_KEY',  'Q% :E.$ho>Z.nnPJ4-T$DB{LscfS7X.sX|3n:jVFvqSI9i/ %Ig!;@3)Z<I(H~Ji' );
define( 'LOGGED_IN_KEY',    '=]%xC:5>.NwHL)KU62<nwp*NjD{miJK|/3mkPr7y@nB[N;hdqC9-fCP#wxjQI^@O' );
define( 'NONCE_KEY',        '#_CRyF1Z?`|)JoWL5^YyTcEcca+W)/!mlYo6^6:DJ[(Aa>j|c+&ABsEAfv`mj?Cy' );
define( 'AUTH_SALT',        'Kp2~GS>v#<EDDw4}<lPiI-$&-gE@kUwSQ_r:.5[2tWHjd3K[b;zq39#WV987}9#j' );
define( 'SECURE_AUTH_SALT', '!G6glURuKE^U.LoPl7]Q*uiNZ?#}IYFR/Pd-3d25AZYb6X|auBZ&9#9.+}524rgE' );
define( 'LOGGED_IN_SALT',   'kGU#9 or$X9D_}t3O) _W9E6gj<j}l|6N0z,;[ZK#&puqcQTrE2n(sP|Sg15u#G<' );
define( 'NONCE_SALT',       'G5N{z%`(:~uu2}L18/ahpf9w> {,00vSN qr~g?J8;b7eWw$9W^.&k@jKyH7*RB[' );

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
