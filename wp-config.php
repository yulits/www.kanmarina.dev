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
define('DB_NAME', 'kanmarinDB3tiwc');

/** MySQL database username */
define('DB_USER', 'kanmarinDB3tiwc');

/** MySQL database password */
define('DB_PASSWORD', 'ZloKQKQbTZ');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'zve]~KUrfol1w4>VLxD5ld[fmb{.L+0cU^yErXZR@vC8k;#SKwG5lAqe]aP*3gY,Q');
define('SECURE_AUTH_KEY',  'TIqCog},N$1dW_~CsEum2iW#+FBn7{XP+Rsc}YMz:ZS_OGsHum2ma#~IAn6ibk4');
define('LOGGED_IN_KEY',    '[k}!NzraS~wCsh:e;<P*xD3f{XM$R@NFrk0g-H9ld[VRbT*t6le]^MEq6m8o40c');
define('NONCE_KEY',        'm.uAv87g0,UGwC4hZ|e#WP+p91^QEum2iakY>@Jzr5:ZR@NCsDtl;dGs<TMyq2m8o');
define('AUTH_SALT',        'T;gQvfQq8dNocWChVwLyq62e]Fvj>$Aw0!RJrY$IAqi;k}cQ@vBa_OGwo1k6ma]*;');
define('SECURE_AUTH_SALT', '7$3<T.Z!zFBn7]aO~wCsEum;#S_xgY>$Ium2o4kc>^NDp91dV|b*t2aOl$F3fT$qw');
define('LOGGED_IN_SALT',   'AaLUNzF7nb{Cs80cV!W_OHxl1o:@F8cUWKt91h1ym6;aS*}^M$I6mc[!NzFxDCl1[');
define('NONCE_SALT',       '.;+D,r^ANsg|v3}Wwo:!CPti_x1BfTym{Z@v0,J7ZSwk[z4p;SLpd_3XMqe.Rvg,');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
