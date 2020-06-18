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
define( 'DB_NAME', 'woo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ':G8(l$9]>Sfu?Cx+H{[tQ@n[!6uUGZ w?`*>+3#6LR3ez<,1<?MO2LFN4H%/!:<,' );
define( 'SECURE_AUTH_KEY',   ',>Omn$A&jTQpv7-v~=x4Ptd~PXX*~r.U8f?z`;IY6-#^eU&HwdHbC:.br<w{}]0$' );
define( 'LOGGED_IN_KEY',     'P..7c&JhP;1= ,N;|T&aYiZ<KysYz)aw]@+R`.]q(S.4W~ceqem,G}z!DS0&HMpG' );
define( 'NONCE_KEY',         '#y^g;*sb/SoesLwLLQ/4-;|.h~i=GZb;7iWF$6hbu(R&U</#t(wimVjb?P*{Qh=Q' );
define( 'AUTH_SALT',         'C=^eVhnVg9R#D]IH42@kQcW|/Fu/sQp>GR<$ysSNWjE1Q;Z6f6-idGwfcX V7tAr' );
define( 'SECURE_AUTH_SALT',  '`J^WUA~9_#eVW$2J-eq;IVH`HvrHALUtm#HwB5`8W[DAB^:{1aW,COuXsjJQpIue' );
define( 'LOGGED_IN_SALT',    '*6$$mDGBBB)t:]!s4}@i/I)&EJPoasq`~7$9w>sni2N(D7>W.j7ylw?V?dxK~P[$' );
define( 'NONCE_SALT',        '3@pRnX[E0}+Pk 5VhU?u+y0E3Gs8^OIY%sCC%.OM!Tq5^ys*?U4p{]rlXc;miMk1' );
define( 'WP_CACHE_KEY_SALT', '8-,-_3m*3?qNUC_D3I2i u Wp<^P_$2blu24&o 3{A|TWq~8NQ~B|O`|L[=oy(aX' );
define ('FS_METHOD', 'direct');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
