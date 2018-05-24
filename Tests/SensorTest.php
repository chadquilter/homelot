<<?php
require 'vendor/autoload.php';

define('SENSORACTIVITY_DIR', 'H:/xampp/htdocs/dashboard/homelot/');
require(SENSORACTIVITY_DIR . 'libs/sensors/sensor.php');
require(SENSORACTIVITY_DIR . 'libs/sensors/cellar.php');
require(SENSORACTIVITY_DIR . 'libs/sensors/door.php');
require(SENSORACTIVITY_DIR . 'libs/sensors/fire.php');
require(SENSORACTIVITY_DIR . 'libs/sensors/freeze.php');
require(SENSORACTIVITY_DIR . 'libs/sensors/Glassbreak.php');
require(SENSORACTIVITY_DIR . 'libs/sensors/smoke.php');
require(SENSORACTIVITY_DIR . 'libs/sensordata.php');

class SensorTest extends PHPUnit_Framework_TestCase
{
  public function testFireInvocation()
  {
    //Test our
    $sensor_obj = new fire();
    $sensor_obj->setValue(500);
    $sensor_obj->BuildSensorValue();

    $state = $sensor_obj->getValue();
    $alarm = $sensor_obj->getAlert();
    $this->assertSame('Alert', $alarm);

  }
  public function testFreezeInvocation()
  {
    //Test our
    $sensor_obj = new freeze();
    $sensor_obj->setValue(22);
    $sensor_obj->BuildSensorValue();

    $state = $sensor_obj->getValue();
    $alarm = $sensor_obj->getAlert();
    $this->assertSame('Alert', $alarm);

  }
  public function testGlassbreakInvocation()
  {
    //Test our
    $sensor_obj = new glassbreak();
    $sensor_obj->setValue(999);
    $sensor_obj->BuildSensorValue();

    $state = $sensor_obj->getValue();
    $alarm = $sensor_obj->getAlert();
    $this->assertSame('Alert', $alarm);

  }
  public function testDoorInvocation()
  {
    //Test our
    $sensor_obj = new door();
    $sensor_obj->setValue('Open');
    $sensor_obj->BuildSensorValue();

    $state = $sensor_obj->getValue();
    $alarm = $sensor_obj->getAlert();
    $this->assertSame('Alert', $alarm);

  }
  public function testSmokeInvocation()
  {
    //Test our
    $sensor_obj = new smoke();
    $sensor_obj->setValue(2);
    $sensor_obj->BuildSensorValue();

    $state = $sensor_obj->getValue();
    $alarm = $sensor_obj->getAlert();
    $this->assertSame('Alert', $alarm);

  }
  public function testCellar1Invocation()
  {
    //Test our
    $sensor_obj = new cellar();
    $sensor_obj->setValue(500);
    $sensor_obj->BuildSensorValue();

    $state = $sensor_obj->getValue();
    $alarm = $sensor_obj->getAlert();
    $this->assertSame('Alert', $alarm);

  }
  public function testCellar2Invocation()
  {
    //Test our
    $sensor_obj = new cellar();
    $sensor_obj->setValue(-2);
    $sensor_obj->BuildSensorValue();
    $state = $sensor_obj->getValue();
    $alarm = $sensor_obj->getAlert();
    $this->assertSame('Alert', $alarm);

  }
}


 ?>
