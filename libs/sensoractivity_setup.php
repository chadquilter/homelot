<?php

/**
 * Project: homelot Sample Smarty Application
 * Author: Chad Quilter
 * File: homelot_setup.php
 * Version: 1.1
 */

require(SENSORACTIVITY_DIR . 'libs/sensoractivity.lib.php');
require 'vendor/autoload.php';

// smarty configuration
class sensoractivity_smarty extends Smarty {
    function __construct() {
      parent::__construct();
      $this->setTemplateDir(SENSORACTIVITY_DIR . 'templates');
      $this->setCompileDir(SENSORACTIVITY_DIR . 'templates_c');
      $this->setConfigDir(SENSORACTIVITY_DIR . 'configs');
      $this->setCacheDir(SENSORACTIVITY_DIR . 'cache');
    }
}

?>
