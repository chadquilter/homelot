<?php

/**
 * Project: Sensor Activity Smarty Application
 * Author: Chad Quilter>
 * Version: 0.1
 */

/**
 * sensor object
 *
 */
abstract class sensor {

  abstract public function getType();
  abstract public function setType($type_in);
  abstract public function getValue();
  abstract public function setValue($value_in);
  abstract public function getAlert();
  abstract public function getStateString();
  abstract public function BuildSensorValue();

}

?>
