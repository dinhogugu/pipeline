<?php

require 'soma.php';

Class testSoma {

    public function testSoma()
    {
        $class = new Soma();

        if ($class->somar(5,6) != 10) {
            return throw new Exception('errado demaiss!');
        }

        return 'aeeee isso mesmo!';
    }
}

$classTest = new testSoma();

var_dump($classTest->testSoma());


?>