<?php

/**
 * Project: Sensor Activity Smarty Application
 * Author: Chad Quilter>

 * Version: 0.1
 */

// define our application directory
define('SENSORACTIVITY_DIR', 'H:/xampp/htdocs/dashboard/homelot/');

// include the setup script
include(SENSORACTIVITY_DIR . 'libs/sensoractivity_setup.php');

// create homelot object
$sensoractivity = new sensoractivity;

// set the current action
$_action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'view';

switch($_action) {
    case 'view':
    default:
        // viewing the homelot
        $sensoractivity->displayBook();
        break;
}

?>
