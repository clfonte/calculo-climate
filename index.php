<?php

use League\CLImate\CLImate;

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

// menu
$climate->out('[1 - RAIZ QUADRADA]');
$climate->out('[2 - FATORIAL]');
$climate->out('[3 - AO QUADRADO]');

// escolher opção
$input = $climate->input('Escolha uma das opções acima:');

// opções aceitas
$input->accept(['1', '2', '3']);


// receber o que foi inserido
$menu = $input->prompt();

class Calculo
{
    public $numero;

    protected $climate;

    public function __construct(CLImate $climate)
    {
        $this->climate = $climate;
    }

    public function input()
    {
        $numeroInput  = $this->climate->input('Insira o número a ser calculado:');
        $this->numero = $numeroInput->prompt();
    }
}

$calculo = new Calculo($climate);
$calculo->input();

switch ($menu) {
    // raiz quadrada
    case '1':
        echo ("O resultado é " . sqrt($calculo->numero));
        break;

    case '2':
        // fatorial
        $numeroInput = $climate->input('Insira o número que deseja receber o fatorial: ');
        
        $numero = $numeroInput->prompt();

        $numero = $numero;

        $fatorial = 1;

        for ($i = 1; $i <= $numero; $i++) {
            $fatorial = $fatorial * $i;
        }

        echo ("O fatorial é: $fatorial");
        break;

        case '3':
            echo ("Ao quadrado resultante do número inserido é: " . ($calculo->numero * $calculo->numero));

    default:
        # code...
        break;
}
