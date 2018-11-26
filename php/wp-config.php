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
define('DB_NAME', 'myrain_db');

/** MySQL database username */
define('DB_USER', 'myrain_db');

/** MySQL database password */
define('DB_PASSWORD', 'Uqc2FF8E');

/** MySQL hostname */
define('DB_HOST', 'myrain.mysql.tools');

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
define('AUTH_KEY',         'GFsSujboYKQe0fI7ox%5TGpfg)LCulh2#KJIKFThH8HFVocihF#gP)BWM22xv18E');
define('SECURE_AUTH_KEY',  'XD1PzOwV%8GYw3OgzxaO6&!e9Jq@xX3dnnCmI*SKsy&f*U5UBvVHiq)*!vO2mZfb');
define('LOGGED_IN_KEY',    'RLs6)lxP@2GxuqJgtmxf7IV93KT6J#6zAFClJg6uBd5euRAshBKGwKVzDS7SAicE');
define('NONCE_KEY',        '!0#7eYq9lTbSnVX6WFTeKRRXGAliV4jGIoh^k96L7jA&PjzGci#I)CZ4UYuvHPV5');
define('AUTH_SALT',        'AjQDZ^4m%vUB1M*%u66!HQ(zLfs1c^#r#EsQW6Thr!SZj*ksxF(YIAmb(eU10I(Q');
define('SECURE_AUTH_SALT', '9g&fdo3jgC(tyRp9Q^UXCyHKjsdn&#KKXXyJO8RG%i33@BDo^hav0Mn5bSnkhw2z');
define('LOGGED_IN_SALT',   'SJPMWKZ0bKXoOA3lFbggxf7S#LT3DRqEAvLAX9GeP^CXdK9WZyFGxifPvrZCmBQ&');
define('NONCE_SALT',       '7TY@aOHGHR86An@7Lmt9gjnYfrOUK0rnLn9nzx6)#vyBM4ee#X@Js)(oGaNoGCs2');
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
define( 'WPCF7_AUTOP', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
