<?php

require(SENSORACTIVITY_DIR . 'libs/sensors/sensor.php');
require(SENSORACTIVITY_DIR . 'libs/sensors/cellar.php');
require(SENSORACTIVITY_DIR . 'libs/sensors/door.php');
require(SENSORACTIVITY_DIR . 'libs/sensors/fire.php');
require(SENSORACTIVITY_DIR . 'libs/sensors/freeze.php');
require(SENSORACTIVITY_DIR . 'libs/sensors/Glassbreak.php');
require(SENSORACTIVITY_DIR . 'libs/sensors/smoke.php');

require(SENSORACTIVITY_DIR . 'libs/sensordata.php');

/**
 * Project: Sensor Activity Smarty Application
 * Author: Chad Quilter>

 * Version: 0.1
 */

/**
 * sensor application library
 *
 */
class sensoractivity {
  /**
  * class constructor
  */
  function __construct() {
    // instantiate the template object
    $this->tpl = new sensoractivity_smarty;
  }

  /**
  * get sensor records
  *
  */
  function getSensors() {
    $sensors = new sensordata();
    return $sensors->getSensors();
  }

  /**
  * build sensor object to hendle various sensor needs
  *
  */
  function setSensorState(){
    $sensor_collection = $this->getSensors();
    foreach ($sensor_collection as $key => $value) {
      $sensor_class = $sensor_collection[$key]['type'];
      if ( class_exists($sensor_class) == true) {
        $sensor_obj = new $sensor_class();
        $sensor_obj->BuildSensorValue();
        $sensor_collection[$key]['state'] = $sensor_obj->getValue();
        $sensor_collection[$key]['alarm'] = $sensor_obj->getAlert();
        $sensor_collection[$key]['stateString'] = $sensor_obj->getStateString();
      }else{
        $sensor_collection[$key]['state'] = 'None';
        $sensor_collection[$key]['alarm'] = 'None';
        $sensor_collection[$key]['stateString'] = 'Please add a php file to your sensor folder in lib using the '.$sensor_class.'! : )';
      }
     }
     return $sensor_collection;
  }

  /**
  * display the sensor activity
  *
  */
  function displayBook() {
    $sensors = $this->setSensorState();
    $this->tpl->assign('sensors', $sensors);
    $this->tpl->display('sensoractivity.tpl');
  }
}

?>
