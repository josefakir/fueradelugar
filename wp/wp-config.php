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
define('DB_NAME', 'fueradelugar');

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
define('AUTH_KEY',         '{$;$t[|]c?tRMQ9$g+z7aQ_YMF~AD-SjbpWFTY(~p|mK+keZD^bwMk54y~4i_)Mt');
define('SECURE_AUTH_KEY',  'av<!f1#IL.}8+en<dW,)YO)w_1s7RQ4bZEh<N{I*OkbrYw3xy*nC<;8^o@{l{ClA');
define('LOGGED_IN_KEY',    's6yhir/@|w&$ 2A)Ow7RZLugEwDe mo5WME#83ZF)VV|2*26d#bBuc)k8nXq?_EF');
define('NONCE_KEY',        'rLWc>.?k-n:<nx(U+y3yuM{UaZ|KB^?PDEb/;)[{GHc.:B!K+)t&63La;xF/4{nk');
define('AUTH_SALT',        'Y@6FIT*/_*4BE|*#!Bkc(mHC0bo:3 Kh9AnnbD=HW?votM_9s1Xzt$tH!R?_bE>e');
define('SECURE_AUTH_SALT', 'WSZIGwbDi`zV,lNCLX1t{%|fh%HE/x.`WOOf-<6~/{FWSc7tT]O77{[HTpUxZ)$>');
define('LOGGED_IN_SALT',   'x-lWVXtP{q1(2ncWRoc.1L&pk|D`X,tn/5{nVu?;P78SP}&?#O0s~0;>mlW.@wSD');
define('NONCE_SALT',       'Kf0 DEJK)g<LdZg~a9t$KY5$sZBM0e1OU-}4Mukmnt@gn!SKhXO=fmHj:6p@|Eaz');

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
