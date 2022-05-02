<?php
session_start();

$tipo_perfil = array(1 => 'adm',2 => 'user');

$users = array(
    array('id' => '1' , 'email' => 'adm@a.a','senha' => '123', 'tipo' => 1),
    array('id' => '2' , 'email' => 'naoadm@a.a','senha' => '123', 'tipo' => 2),
    array('id' => '3' , 'email' => 'naoadm2@a.a','senha' => '123', 'tipo' => 2)
);
$id = null;
$user_auth = false;
foreach($users as $user){    
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $user_auth = true;
        $id = $user['id'];
        $user_id=$user['tipo'];
    }
}
if($user_auth){
    $_SESSION['auth'] = true;
    $_SESSION['id'] = $id;
    $_SESSION['tipo'] = $user_id;
    header('Location: home.php');
}
else{
    $_SESSION['auth'] = false;
    header('Location: index.php?login=error');
    }
?>