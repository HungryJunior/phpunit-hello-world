<?php
    require_once 'vendor/autoload.php';
    require_once 'class/MyExceptionClass.php';

    class MyExceptionTest extends PHPUnit_Framework_TestCase{
        protected $fixture;

        protected function setUP(){
            $this->fixture = new MyException();
        }

        protected function tearDown(){
            $this->fixture = NULL;
        }

        /**
         * @expectedException MathException
         * @dataProvider providerDivide
         */
        function testDivide($x,$y){
            $this->fixture->divide($x,$y);
        }

        function providerDivide(){
            return array(
                array(4,2),
                array(14,21),
                array(141,521),
                array(4141,521),
                array(41,51),
                array(5,0),
                array(13,33),
                array(93,33),
                array(93,33),
                array(93,0),
                array(93,33),
                array(93,33),
                array(100,2)
            );
        }
    }