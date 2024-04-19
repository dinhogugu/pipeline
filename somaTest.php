<?php

require 'soma.php';

Class testSoma {

    public function testSoma(): string
    {
        $class = new Soma();

        if ($class->somar(5,5) != 10) {
            return throw new Exception('errado demaiss!');
        }

        return 'aeeee isso mesmo!';
    }
}

$classTest = new testSoma();

var_dump($classTest->testSoma());


?>