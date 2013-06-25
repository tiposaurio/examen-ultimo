<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lelissdt_wp1');

/** MySQL database username */
define('DB_USER', 'lelissdt_admin');

/** MySQL database password */
define('DB_PASSWORD', '@de1ante');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         's7PEAJ9^,FfN+8bCeVZIlJz.$E/!&- D^l3^U`;+!EM9lBk^?.|bE.%d(#)[-0f8');
define('SECURE_AUTH_KEY',  'ip7DcWIHvU|L;+0(:s-21|e*TD!(fD|aMH`c$%[`5r9TXBw$+%?.%J!#+/<*|LoZ');
define('LOGGED_IN_KEY',    '-$GD/+9iz$CrXWCk3elL=`E-1E/EO)^Nb3:Widlll53AwA$t/ Z+LS>=+F!eZvo&');
define('NONCE_KEY',        'Ap;V/l ~A8hob<%>L[K>g&|w2%#7U :L@pO-QI9^eDW/MNU4|t$]:-{>oJUSlPvk');
define('AUTH_SALT',        'Ny+gFf lX5EH&B<nAjS v5#qXJeJ>QE>`fFAak.:|)<>1-)0+4#S|~|?nS/+ UX.');
define('SECURE_AUTH_SALT', 'R=0!(}<R/LB|8:_DD9Px`Fq.OO4h%8ZxE*OKIvpC*|pLgw_ERMk/uY3hN8zh-.Z.');
define('LOGGED_IN_SALT',   'EkbuOew,(iq5$4ncvj:|oSt%xQXl/+?*IcbJ$W3]}fOqZnT*Prh2jC4-g:,Gef>|');
define('NONCE_SALT',       'Z)pQ?O|a&NI{/^KNo-#E! |cJq5UmFnU=%z`6T=2&sMi6x8zLnP}#/1$clStlsph');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


