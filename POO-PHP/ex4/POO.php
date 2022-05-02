<?php

class pai
{
    private $nome = 'jaoo';
    protected $sobrenome = 'pao';
    public $humor = 'cu';

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($v)
    {
        if(strlen($v)>=3){
            $this->nome = $v;
        }
    }
}

$pai = new pai();
echo $pai->getNome();
echo "\n";
$pai->setNome('b');
echo $pai->getNome();
echo "\n";
