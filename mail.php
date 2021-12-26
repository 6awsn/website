<?php

$nome = $_POST['nome'];
$email= $_POST['email'];
$telefone= $_POST['nome'];
$assunto= $_POST['assunto'];
$mensagem= $_POST['mensagem'];
$corpo ="<strong>Nome: </strong>".$nome."<br><br><strong>Email: </strong>".$email."<br><br><strong>Telefone: </strong>".$telefone."<br><br><strong>Mensagem: <br><br></strong>".$mensagem."";


$headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  interagejr.com.br\n";
  $headers .= "X-Sender:  \n";
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  \n";
  $headers .= "MIME-Version: 1.0\n";

mail('contato@empresadev.com', $assunto, $corpo, $headers);  //envio do email.

?>