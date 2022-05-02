<?php

require("POO.php");

$pessoa = new pessoa('lol');
echo "\nNome: " . $pessoa-> __get('nome');
echo "\n" . $pessoa->correr();

echo "\n";

unset($pessoa);

?>