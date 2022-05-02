<?php

class pessoa{

    public $nome = null;

    function __construct($nome){
        echo 'Iniciado!';
        $this->nome = $nome;
    }

    function __destruct()
    {
        echo 'Objeto removido!';
    }

    function __get($atri){
        return $this->$atri;
    }

    function correr(){
        return $this->__get('nome') . ' está correndo!';
    }

}

?>