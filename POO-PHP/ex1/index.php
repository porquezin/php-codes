<?php

require('POO.php');

$y = new funcionario();
$y->__set('nome','jooj');
$y->__set('filhos',2);
$y->__set('tell','99 9999-9999');

echo $y->__get('nome')."\n".$y->__get('tell')."\n".$y->__get('filhos')."\n";
echo $y->resumir();

echo "\n \n";

$x = new funcionario();
$x->__set('nome','jooj2');
$x->__set('filhos',5);
$x->__set('tell','99 9666-9999');

echo $y->__get('nome')."\n".$y->__get('tell')."\n".$y->__get('filhos')."\n";
echo $y->resumir();

?>