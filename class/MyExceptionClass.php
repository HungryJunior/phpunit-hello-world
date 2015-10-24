<?php
    class MathException extends Exception {};

    class MyException {

        public function divide($x, $y){
            if (!(boolean)$y){
                throw new MathException('Division by zero');
            }
            return $x / $y;
        }
    }