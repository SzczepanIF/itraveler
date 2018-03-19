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
define('DB_NAME', 'flyordie');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3(OH85Ekj#6yn2DVg1x@D_y!YZ]-#m*LLU7o+vwLX)T$7s7u)SL-;$&E,|Q$gJ4&');
define('SECURE_AUTH_KEY',  'fH8b{-0k04Z-YasU4.K^JsK->XtQ?)VGHXk2$HI6dzB(HXN,]c^daV&WG-d#e,MG');
define('LOGGED_IN_KEY',    'w9=aCZ%0N?V^3`6,Z%gRF }7Mo+@O7qB7>/064vd1=.;slLUp8WPC2GOK1M=knQN');
define('NONCE_KEY',        'hkU5W$y;OFk>bFFnOa2_6o,rXpDN$]mL<U^sB_.jLv)9$.VqYh}}q,S^?4;O7d;C');
define('AUTH_SALT',        '`gyr2sOVD3M0{7Xoj4H:.m:vd-,4Gxk:CGII)1]2Y}RCMt)]@NeiQW||2Pg6rDB%');
define('SECURE_AUTH_SALT', 'Z@-qB|];[QUz[@!-4as7GWx}.7C*fqJ:mo>&]S#E!B)=NGkAsT.%x(=gk(D{bQ8J');
define('LOGGED_IN_SALT',   'uE|jVhU +zf;OE*d,`0Ght{P|dbx}.`1uhMKlPJ>gBF<`MI2t2]:=r#}cRQ$F|a,');
define('NONCE_SALT',       'iV{dl8WP>Q|_Dpb#U0oaWZ4w7]@]c9SF ,!j$eo #D~QCbL=l~sp.Hoo`J&!D,9^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
