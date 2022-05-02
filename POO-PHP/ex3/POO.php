<?php

class veiculos
{
    public $placa = null;
    public $cor = null;

    function acelerar()
    {
        echo 'celero!';
    }

    function freiar()
    {
        echo "freio!";
    }

    function marcha()
    {
        echo '1-Pe  2-Mao';
    }
}

class carro extends veiculos
{
    public $teto_solar = true;

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function abrirVeto()
    {
        echo 'abrir';
    }

    function alterarVolante()
    {
        echo 'alterar';
    }
}

class moto extends veiculos
{

    public $contraPeso = true;

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function empinar()
    {
        echo 'grau!';
    }

    function marcha()
    {
        echo '2-Pe  1-Mao';
    }
}


$carro = new carro('abc1234', 'preto');
$moto = new moto('tre3221', 'branco');

$carro->marcha();
echo "\n";
$moto->marcha();
