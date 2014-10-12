<?php

ini_set('date.timezone','Australia/Sydney');

/** Define ABSPATH as this file's directory */
define( 'ABSPATH', dirname(__FILE__) . '/' );

/* Load local settings */
require_once(ABSPATH . 'local.php');

/* Load framework */
require_once(ABSPATH . 'Vendor/Slim/Slim.php' );
require_once(ABSPATH . 'Vendor/SlimController/Slim.php');
require_once(ABSPATH . 'Vendor/SlimController/SlimController.php');

/* Auto loader */
require_once(ABSPATH . "Vendor/SplClassLoader.php");
/* Load all classes under FindSite namespace */
$loader = new SplClassLoader('FindSite', ABSPATH);
$loader->register();