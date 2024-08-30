<?php
/* This is a sample config file.
 * Edit this file with your own settings and save it as "config.php"
 *
 * IMPORTANT: edit and save this file as plain ASCII text, using a text editor, for instance TextEdit on Mac OS or
 * Notepad on Windows. Make sure there is no character before the opening <?php at the beginning of this file.
 */

/*
 ** MySQL settings - You can get this info from your web host
 */

 define('YOURLS_DB_USER', 'root'); // Default XAMPP username
define('YOURLS_DB_PASS', '');     // Default XAMPP password is empty
define('YOURLS_DB_NAME', 'yourls_db'); // Your database name
define('YOURLS_DB_HOST', 'localhost'); // Default host

define( 'YOURLS_SITE', 'http://localhost:8080/yourls' ); // Update to match your local YOURLS URL

define( 'YOURLS_DB_PREFIX', 'yourls_' );

define( 'YOURLS_LANG', '' ); // Default is empty, which uses English

define( 'YOURLS_UNIQUE_URLS', true ); // Allow only one short URL per long URL
// define( 'YOURLS_PRIVATE', true ); // Set to false if you want public access
define( 'YOURLS_COOKIEKEY', 'modify this text with something random' ); // Change to a random, secure string

define('YOURLS_API_KEY', 'api');


define( 'YOURLS_URL_CONVERT', 36 ); // 36 for lowercase only, 62 for mixed case
define( 'YOURLS_DEBUG', false ); // Change to true if you need debugging info
define('YOURLS_PRIVATE', false);


/*
 ** Site options
 */

/** YOURLS installation URL
 ** All lowercase, no trailing slash at the end.
 ** If you define it to "http://sho.rt", don't use "http://www.sho.rt" in your browser (and vice-versa)
 ** To use an IDN domain (eg http://héhé.com), write its ascii form here (eg http://xn--hh-bjab.com) */
// define( 'YOURLS_SITE', 'http://your-own-domain-here.com' );


/** A random secret hash used to encrypt cookies. You don't have to remember it, make it long and complicated
 ** Hint: copy from http://yourls.org/cookie */
// define( 'YOURLS_COOKIEKEY', 'modify this text with something random' );

/** Username(s) and password(s) allowed to access the site. Passwords either in plain text or as encrypted hashes
 ** YOURLS will auto encrypt plain text passwords in this file
 ** Read http://yourls.org/userpassword for more information */
 $yourls_user_passwords = [
    'admin' => 'phpass:!2y!10!wjlQW97zLjYib8N8KDyCW.FYucSNyYIc8tPRbrTdV6LJYPY.kYPji' /* Password encrypted by YOURLS */ , 
];

/** URL shortening method: either 36 or 62
 ** 36: generates all lowercase keywords (ie: 13jkm)
 ** 62: generates mixed case keywords (ie: 13jKm or 13JKm) 
 ** For more information, see https://yourls.org/urlconvert */
// define( 'YOURLS_URL_CONVERT', 36 );

/** Debug mode to output some internal information
 ** Default is false for live site. Enable when coding or before submitting a new issue */
// define( 'YOURLS_DEBUG', false );

/**
* Reserved keywords (so that generated URLs won't match them)
* Define here negative, unwanted or potentially misleading keywords.
*/
$yourls_reserved_URL = [
	'porn', 'faggot', 'sex', 'nigger', 'fuck', 'cunt', 'dick',
];


/*
 ** Personal settings would go after here.
 */
