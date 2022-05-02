<?php

session_start();

$titulo = str_replace('|','#',$_POST['titulo']);
$categoria = str_replace('|','#',$_POST['categoria']);
$descricao = str_replace('|','#',$_POST['descricao']);

$conteudo = $_SESSION['id'] . '|'. $titulo .'|'. $categoria .'|'. $descricao. PHP_EOL;

$arquivo = fopen('../chamados.txt','a');

fwrite($arquivo,$conteudo);

fclose($arquivo);

header('Location: abrir_chamado.php?sucesso=1');

?>