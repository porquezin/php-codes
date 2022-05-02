<?php

require "./include.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mensagem{
    private $para = null;
    private $assunto = null;
    private $msg = null;

    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value){
        $this->$name = $value;
    }

    public function mensagemValida(){

        if(empty($this->para) || empty($this->assunto) || empty($this->msg)){
            return false;
        }else{
        return true;
        }
    }
}

$msg = new Mensagem();

$msg->__set('para',$_POST['para']);
$msg->__set('assunto',$_POST['assunto']);
$msg->__set('msg',$_POST['msg']);

if(!$msg->mensagemValida()){
    echo' nao foi';
    header('Location: index.php?erro=1');
    die();
}

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                                         //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '???';                     //SMTP username
    $mail->Password   = '???';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    //Recipients
    $mail->setFrom('???', 'guest');
    $mail->addAddress($msg->__get('para'));     //Add a recipient
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $msg->__get('assunto');
    $mail->Body    = $msg->__get('msg');
    $mail->AltBody = 'Use outro client!';
    
    $mail->send();

    echo "<script>window.location.href = '/index.php?submited';</script>";
    
} catch (Exception $e){
    header('Location: index.php?erro=2');
}

