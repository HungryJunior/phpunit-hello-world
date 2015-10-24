<?php
    require_once 'vendor/autoload.php';
    require_once 'class/MyArrayClass.php';

    class MyArrayTest extends PHPUnit_Framework_TestCase{
        protected $fixture;

        protected function setUP(){
            $this->fixture = new MyArray();
        }

        protected function tearDown(){
            $this->fixture = NULL;
        }

        function testGetArr(){
            //Количество єлементов - 7?
            $this->assertCount(7,$this->fixture->getArr());
            //Есть ли значение 'abc' в возвр.массиве?
            $this->assertContains('abc',$this->fixture->getArr());
            //Это строковый массив?
            $this->assertContainsOnly('string',$this->fixture->getArr());
            //Есть ли ключ John?
            $this->assertArrayHasKey('name',$this->fixture->getArr());
        }
    }