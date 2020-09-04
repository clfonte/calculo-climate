<?php

use League\CLImate\CLImate;

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

// menu
$climate->out('[1 - RAIZ QUADRADA]');
$climate->out('[2 - FATORAÇÃO]');
$climate->out('[3 - AO QUADRADO]');

// escolher opção
$input = $climate->input('Escolha uma das opções acima:');

// opções aceitas
$input->accept(['1','2','3']);


// receber o que foi inserido
$menu = $input->prompt();

class Calculo {
    public $numero;

    protected $climate;

    public function __construct(CLImate $climate)
    {
        $this->climate = $climate;
    }

    public function input() {
        $numeroInput  = $this->climate->input('Insira o número a ser calculado:');
        $this->numero = $numeroInput->prompt();
    }
}

$calculo = new Calculo($climate);
$calculo->input();

switch ($menu) {
    case '1':
        echo ("O resultado é ".sqrt ($calculo->numero ));
        break;
    
    default:
        # code...
        break;
}