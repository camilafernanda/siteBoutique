<?php
              /*ini_set('display_errors', 1);
              error_reporting(E_ALL);
              $from = $email;
              $to = "estlizandoboutique@gmail.com";
              $subject = "E-mail de contato pelo site da loja.";
              $message = $mensagem;
              $headers = "De:". $from;
              mail($to, $subject, $message, $headers);
              echo "A mensagem de e-mail foi enviada.";*/
/*$nome = $_POST['primeiroNome'];
$email = $_POST['email'];
// $telefone = $_POST['telefone'];
// $opcoes = $_POST['escolhas'];
$mensagem = $_POST['mensagem'];
//$data_envio = date('d/m/Y');
//$hora_envio = date('H:i:s');

  $emailenviar = "estilizandoboutique@gmail.com";
  $destino = $emailenviar;
  $assunto = "E-mail de contato pelo site da loja.";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> Responderemos o mais rápido possível!";
  echo " <meta http-equiv='refresh' content='10;URL=contato.html'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }*/
  
  // Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
include "PHPMailer-master/PHPMailerAutoload.php"; 
 
// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 
 
// Método de envio 
$mail->IsSMTP(); 
 
// Enviar por SMTP 
$mail->Host = "mail.meusitemodelo.com"; 
 
// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
$mail->Port = 25; 
 
 
// Usar autenticação SMTP (obrigatório) 
$mail->SMTPAuth = true; 
 
// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = 'estilizandoboutique@gmail.com'; 
$mail->Password = 'EB2019senai'; 
 
// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
 
// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
// $mail->SMTPDebug = 2; 
 
// Define o remetente 
// Seu e-mail 
$mail->From = $_POST['email']; 
 
// Seu nome 
$mail->FromName = $_POST['primeiroNome']; 
 
// Define o(s) destinatário(s) 
$mail->AddAddress('estilizandoboutique@gmail.com', 'Boutique Estilizando'); 
 
// Opcional: mais de um destinatário
// $mail->AddAddress('fernando@email.com'); 
 
// Opcionais: CC e BCC
// $mail->AddCC('joana@provedor.com', 'Joana'); 
// $mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 
 
// Charset (opcional) 
$mail->CharSet = 'UTF-8'; 
 
// Assunto da mensagem 
$mail->Subject = "E-mail de contato pelo site da loja."; 
 
// Corpo do email 
$mail->Body = $_POST['mensagem']; 
 
// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail 
$enviado = $mail->Send(); 
 
// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
    echo "Seu email foi enviado com sucesso! <br> Responderemos o mais rápido possível!"; 
} else { 
    echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
} 
?>