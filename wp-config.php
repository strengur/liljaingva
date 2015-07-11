<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '16_lilja_ingva');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Set the URL for the site */
define('WP_HOME', 'http://localhost/liljaingva');
define('WP_SITEURL', 'http://localhost/liljaingva');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GFZ&%;g0y+6va$El]?GuT6@+!1X-.)K61DvuJ5kKt,9h-A>QF*G>V0y ?..L)Ey-');
define('SECURE_AUTH_KEY',  '9-[~Zt]H<3n1A#^C-+d#jF|OA`WngX$Ukj?o#dJ~t7Z+}T6%quU[f6r &KZpqa~M');
define('LOGGED_IN_KEY',    'AY)W+@||oujB552GOX+1ivot#+/}Rb+j*k?$7vm|h^iD13gMQoW,yK996Ij+)*#3');
define('NONCE_KEY',        'F3!v~`O[K!AC4e/?EBtVSo&zlx-&>R+5jiDCS-6Jp1.1Cf%7)OA<[g,9{*7p~|`<');
define('AUTH_SALT',        '+C.J|(hRFc,<2c!ci9o+GQ!5LyYI^sqJNqoC#q_a|vprRo4-sMmInr-r/<pQThu{');
define('SECURE_AUTH_SALT', 'dBc^5/Y#/FE3^tnf[sm,a hNq>+;8bZN#z_~:s233bnw8:#f~wk.*+NMYIy7Hbb|');
define('LOGGED_IN_SALT',   '=F)_bex]hFP{[E9gt-JYEf,00EJ%h+Z$&v8*e-AiF,mjiQ-l4(5GMnMRUhp: `Cd');
define('NONCE_SALT',       '_V49>Q5wk(T&hr9##^>y<UxYSK[vCJWLyL^.-,==(U}`s{ PJtkVXFKmPb(KaV!>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpLi_';

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
