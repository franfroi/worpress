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
define('DB_NAME', 'wordpresstp');

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
define('AUTH_KEY',         '(dam n7ORU(mw@3 ;i]HVRa)d{6UToBSVG)kSiAJ01tPs?QD!Tyz&9u9qb3s+mK@');
define('SECURE_AUTH_KEY',  'Gae%hO[*;Eg2YX@=?|p}s xLIQduIpF}8As;s_vq{&PmGllBU~;WjzKGh437:y3O');
define('LOGGED_IN_KEY',    'sqwj+K8SN.-1Mu5:o,l,{t>A]-YBJ(-wUERw@xm,<SQkCvp//[ $4<$]@@e^%=[a');
define('NONCE_KEY',        'S-A/]xV;=TXLcUdGi~XgSZ6Mh&U2D@9w]wu05,4-v3!dpR1Lk)YbvksnVOt+*(lz');
define('AUTH_SALT',        '31+bvVuasu#HRZ|wkh;JVEf>K<S~Nced_WHH:i>/o:D1^ kO)I>o42$q^j7hY_15');
define('SECURE_AUTH_SALT', '2W`kc7_)$E0C=X|)COjO=DfauahwoW:R*Ov`g@*cN ahX>U>c&LT`j^EV6FJic-D');
define('LOGGED_IN_SALT',   ')Y :z+Q24x,DDp.xV{/6j3Z+WZv}ik#JvJ.ds;5lbi(Bo{;i},Ac+ZP_;!TmZyts');
define('NONCE_SALT',       '?~?FcL/`^eYne!nZ7x}m3U;y(W&:Z;y?Bg^C$0D1@ok2P2UgUE.WYL@2OyXG--W-');

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
