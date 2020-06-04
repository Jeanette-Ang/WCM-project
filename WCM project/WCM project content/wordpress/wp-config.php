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
define( 'DB_NAME', 'Prj_Wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'StudentA' );

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
define( 'AUTH_KEY',         'dT FP-,?.ik.$7sTzEN71?y|DamW%&gUos/+Z&if;~5MV/x:srOy,*^H.^5^Ta4A' );
define( 'SECURE_AUTH_KEY',  'c*=7Nt5nP.mqja9~JzDCJZI@7K E{+];7JcAd<fIu4SQ>Fqb/A4rwn`_ez%>|p)@' );
define( 'LOGGED_IN_KEY',    'c8vv;=-AZnmklVqp>+,q v:E%JXF&d}m|`XUtVuGw%BI>DRAx7q[OrvMYg5^*[gU' );
define( 'NONCE_KEY',        'IYciQuVwkm(-4;GyYm/gUfLf8_~W+3B&4PDTyn64Y#B{7l~dWr2Sk%azkKZK1cCQ' );
define( 'AUTH_SALT',        '.z^H_KFqOel[O},,[nt-NP5_YC}hZa9GrVl<;1Aplt/XEWh]Z-#3*$vnO(@FIljR' );
define( 'SECURE_AUTH_SALT', '@We^MV>Eqb*b1I4E#xwn.)q)@e3^Km__F@l=7`;sT^-pt8B@@kPiZR*B+_,7dPdW' );
define( 'LOGGED_IN_SALT',   'e9GkITm3*,2_tX~=8QpTs-f{6ncBZOAtN<-Ej!jI@b-ml|vX>(JNIJ|x.se/Elim' );
define( 'NONCE_SALT',       '+_B0e)[`m&zK.cWW/7?vr81]HiB]s@p#}wW[?^VlsjU_Hrr/fQ<A_+n@t}GtW0:k' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wcm_';

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
