<?php

class funcionario{

    public $nome = null;
    public $tell = null;
    public $filhos = null;
    
    function __set($atributo,$valor){
        $this->$atributo = $valor;
    }

    function __get($atributo){
        return $this->$atributo;
    }

    function resumir(){
        return $this->__get('nome') . " possui " . $this->__get('filhos') ." filho(s) e seu numero de telefone é $this->tell";
    }
    function modficar($troca){
        $this->filhos =$troca;
    }
}

?>