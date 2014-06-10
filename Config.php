<?php
/*
 * Configuration settings
 */

// directories

/***********************************************************
 * Don't forget to insert the web root directory 
 * for example: "C:/wamp/www/" is the default root web dir in a standard wampServer setup)
 * On most Linux servers, it should be: /var/www/
 ***********************************************************
 */
//define("HTDOCS_ROOT", "/code/");  
// Following should work in all situations (with trailing slash)
define("HTDOCS_ROOT", dirname(dirname(__FILE__)) . '/');

/*********************************************************** 
 * Replace 'localhost' with your IP address, 
 * if you want to access the template with a mobile device
 * connected to the same network 
 ***********************************************************
 */
//define("SERVERNAME", "http://localhost/"); 
// Automatically set server name - should work in most cases, use above setting if not
$relative_path = $_SERVER['SERVER_NAME'] . dirname(dirname($_SERVER['PHP_SELF'])) . '/';
if ($_SERVER['HTTPS']) {
	define("SERVERNAME", "https://" . $relative_path);
} else {
	define("SERVERNAME", "http://" . $relative_path);
}

/*********************************************************** 
 * Leave all the settings below unchanged if you only want
 * to run the template with the default dataset and parameters.
 ***********************************************************
 */

// Base dir should be changed if you renamed the folder containing the app
define("BASE_DIR", "treefinder/" );
define("CLASSES_DIR", "php/");
define("CLASSES", HTDOCS_ROOT . BASE_DIR . CLASSES_DIR);

define("DEBUG", true);

// dataset - see data folder for various example data files
define("DATASET_FILE", HTDOCS_ROOT . BASE_DIR ."data/POI_trees_gent.json");
//define("DATASET_FILE", HTDOCS_ROOT . BASE_DIR ."data/POI_trees_issy.json");
define("DATASET_ID", 36);
define("DATASET_URL", SERVERNAME . BASE_DIR . "dataset.php");
define("USE_DATABASE", false);

// Map Options (coords point to center of Gent)
define("MAP_CENTER_LATITUDE", 51.033261); 
define("MAP_CENTER_LONGITUDE", 3.726488);
define("MAP_ZOOM", 16);

// database
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_HOSTNAME", "127.0.0.1");
define("DB_PORT", "3306");
define("DB_NAME", "citadel");


