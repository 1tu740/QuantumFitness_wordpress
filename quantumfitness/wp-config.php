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
define( 'DB_NAME', 'quantumfitness' );

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
define( 'AUTH_KEY',         '7UonY=p,@#!hOx=_dREvTReDUP)_{nub sEM2CoS-8nSiC~Diq){h#i/2 qr_g?|' );
define( 'SECURE_AUTH_KEY',  'B<@aI=i~wCTt3c/(~8!D$SZsIX>9~@z<I]1VCz>@a_K(SvR/-qTFt&SI~OI9_x(Z' );
define( 'LOGGED_IN_KEY',    '$ew3AS9z4Z1d8CZp }hi01EWB0TbT*UVR2k4( CKg1WgXl+pUzk~%fVppt41Sex%' );
define( 'NONCE_KEY',        'mD:R?:w%oVyn1,:<q[!-w#./0UPd}b2?%koR;c%ca}w9<R0InX9KO5]:D^WF(~uw' );
define( 'AUTH_SALT',        'DV*No$rrGO2qDDpfcbEb?V>rMT&< :,6.J06]D3(tT>LQ4-M&;R5^L6CDt}xUDR`' );
define( 'SECURE_AUTH_SALT', 'Kn2jT3w*HxBz8./4|bPTydf{K|R2=UvS)C^0c:b=mLVgk~!Bm-myR7qX:!hqg*.>' );
define( 'LOGGED_IN_SALT',   '{:4r&yiLc+Lj)wC^!%v[S+4-e%2E#wbP6^kuWS{*2>R:9>RmWq9:(E~[JEkZp+Na' );
define( 'NONCE_SALT',       ']2mtrG2e74 o!Y:HUb_4gH=[Eykc!cD27}xd%RU.Z]g84<EF%R(Z^(&s@*pxa=[&' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
