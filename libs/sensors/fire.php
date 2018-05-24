<?php

/**
 * Project: Sensor Activity Smarty Application
 * Author: Chad Quilter>
 * Version: 0.1
 */

/**
 * sensor cellar object
 *
 */
class fire extends sensor {
  //set key data
  private $value = 0;
  private $type= '';
  private $alert = '';
  private $stateString = '';
  private $unitString = ' Degrees';
  private $randMinTemp = -30;
  private $randMaxTemp = 500;
  private $maxTemp = 120;

  public function BuildSensorValue(){
    if ($this->getValue() == ''){
      $this->setRandom();
    }
    $this->setAlert();
    $this->setStateString();
  }
  /**
   * sensor get type
   *
   */
  public function getType() {
    return $this->type;
  }
  /**
   * sensor set type
   *
   */
  function setType($type_in) {
    $this->type = $type_in;
  }
  /**
   * sensor get value
   *
   */
  public function getValue() {
    return $this->value;
  }
  /**
   * sensor set value
   *
   */
  function setValue($value_in) {
    $this->value = $value_in;
  }
  /**
   * sensor get alert
   *
   */
  public function getAlert() {
    return $this->alert;
  }
  /**
   * sensor get state string
   *
   */
  public function getStateString() {
    return $this->stateString;
  }
  /**
   * sensor set state string
   *
   */
  function setStateString() {
    $this->stateString = $this->value.$this->unitString;
  }
  /**
   * sensor set randome temp
   *
   */
  private function setRandom(){
    $this->value = (mt_rand ($this->randMinTemp*10, $this->randMaxTemp*10) / 10);
  }
  /**
   * sensor set alert state
   *
   */
  private function setAlert(){
    $this->alert = $this->value <= $this->maxTemp ? '' : 'Alert';
  }
}

?>
