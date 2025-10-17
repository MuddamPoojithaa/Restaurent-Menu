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
define( 'DB_NAME', 'i10459096_hbmh1' );

/** Database username */
define( 'DB_USER', 'i10459096_hbmh1' );

/** Database password */
define( 'DB_PASSWORD', 'D.Zftz1pPu4z65ZgI9121' );

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
define('AUTH_KEY',         'KwFTe5ViiTmzNdOAUMu2QCnEo9T8rmsYwB4SRiV0GsoHbFnjWyS9PKBSCKwozdUR');
define('SECURE_AUTH_KEY',  'X0G6mqaPppJwcFtf3aBWjPUkvYvrRjdlyeDdbmo8rxpcUtY7Y3u1JNjLWE1t0Vb4');
define('LOGGED_IN_KEY',    'Sa7AdWIaRtGaCGaRahLNDSrLnpnFgcT6jvCseT0bMlN7FwzryUtqcwaFu3gtzqMQ');
define('NONCE_KEY',        'pKdY9cbxRvKpOLxrx58ISjRRhcdTlThIOekZNJd6fdpBl2Wdfb4GFg4hTXziyhHB');
define('AUTH_SALT',        'WPLry3NAev4yCSvCBxoRsVWol3yRxDN28ndC7P2YEq2lb6kmrKNTgeWL63DLX5iF');
define('SECURE_AUTH_SALT', 'jagNNoLVvXe8pAvvbb19cbkT4t2hikDcHhuEAnSxIbBzCf21yS01XXS3DAfoXEve');
define('LOGGED_IN_SALT',   '4cHwjek6PJ6URagwTr2TzirR4JXnCUHzzDOQVb7E0DjgtpOoB7pBXMBgpT7w0Abw');
define('NONCE_SALT',       '4dKIXVQMi202WabCHzAww8J8TuiS9lLeitXvWNJ9xEKNeXfev3c3J6om6gQCkfLz');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'egmv_';

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


define( 'WP_HOME', 'https://sumahiqr.com/restaurentmenu' );
define( 'WP_SITEURL', 'https://sumahiqr.com/restaurentmenu' );
set_time_limit(300);

/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
@ini_set('max_execution_time', 300);
@ini_set('memory_limit', '512M');
@ini_set('post_max_size', '64M');
@ini_set('upload_max_filesize', '64M');

/** Performance Tweaks */
define( 'WP_MEMORY_LIMIT', '512M' ); 
define( 'WP_MAX_MEMORY_LIMIT', '512M' ); 
define( 'WP_CACHE', true );   // Enable WordPress cache

// Disable debugging (for live site)
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

// Reduce autosaves & limit revisions (lighter database)
define( 'AUTOSAVE_INTERVAL', 300 ); // 5 minutes
define( 'WP_POST_REVISIONS', 5 );   // Keep max 5 revisions


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
