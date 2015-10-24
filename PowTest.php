<?php
    require_once 'vendor/autoload.php';
    require_once 'class/PowClass.php';

    class PowTest extends PHPUnit_Framework_TestCase{
        protected $fixture;

        protected function setUP(){
            $this->fixture = new Pow();
        }

        protected function tearDown(){
            $this->fixture = NULL;
        }

        /**
         * @dataProvider providerPower
         */
        function testPower($a,$b,$res){
            $this->assertEquals($res, $this->fixture->power($a, $b));
        }

        function providerPower(){
            return array(
                         array(2,2,4),
                         array(2,5,32),
                         array(2,3,9)
            );
        }
    }