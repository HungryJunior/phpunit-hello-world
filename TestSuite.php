<?php
    require_once 'vendor/autoload.php';
    require_once 'PowTest.php';
    require_once 'MyArrayTest.php';
    require_once 'MyExceptionTest.php';

    class TestSuite{
        public static function suite()
        {
            $suite = new PHPUnit_Framework_TestSuite('MyKit');
            // добавляем тест в набор
            $suite->addTestSuite('PowTest');
            $suite->addTestSuite('MyArrayTest');
            $suite->addTestSuite('MyExceptionTest');
            return $suite;
        }
    }