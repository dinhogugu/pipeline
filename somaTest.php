<?php
require 'soma.php';

Class testSoma {

    public function testSoma(): string
    {
        $class = new Soma();

        if ($class->somar(5,5) == 10) {
            return 'aeeee isso mesmo, deu bom!';
        }

        return 'deu ruim demais';
    }
}

$classTest = new testSoma();

var_dump($classTest->testSoma());


?>