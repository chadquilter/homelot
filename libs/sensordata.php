<?php

/**
 * Project: homelot Sample Smarty Application
 * Author: Chad Quilter <monte [AT] ohrt [DOT] com>

 * Version: 1.1
 */

/**
 * some sensor adaptor returning data
 *
 */

class sensordata{

  public function getSensors() {
    $sensors = array(
      '1' => array('name' => 'Kitchen Temperature', 'type' => 'Fire'),
      '2' => array('name' => 'Basement Temperature', 'type' => 'Freeze'),
      '3' => array('name' => 'Front Door', 'type' => 'Door'),
      '4' => array('name' => 'Back Door', 'type' => 'Door'),
      '5' => array('name' => 'Basement', 'type' => 'GlassBreak'),
      '6' => array('name' => 'Main Floor', 'type' => 'GlassBreak'),
      '7' => array('name' => 'Upstairs', 'type' => 'GlassBreak' ),
      '8' => array('name' => 'Bedroom 1', 'type' => 'Smoke' ),
      '9' => array('name' => 'Bedroom 2', 'type' => 'Smoke' ),
      '10' => array('name' => 'Hallway', 'type' => 'Smoke' ),
      '11' => array('name' => 'Wine Cellar', 'type' => 'Cellar')
    );
    return $sensors;
  }
}

 ?>
