<?php
  $nome = $_POST['primeiroNome'];
  $email= $_POST['email'];
  $mensagem= $_POST['mensagem'];
  $to = "estilizandoboutique@gmail.com";
  $assunto = $POST['assunto'];
  //mail($to,$assunto,$mensagem);

  /*mail (
    "estilizandoboutique@gmail.com", //Endereço que vai receber a mensagem
    "$nome, $email, $assunto, $mensagem", "FROM:$nome<$email>");*/
	
	//$Nome = $_POST["primeiroNome"];	// Pega o valor do campo Nome
    //$Email = $_POST["email"];	// Pega o valor do campo Email
    //$Mensagem = $_POST["mensagem"];	// Pega os valores do campo Mensagem

// Variável que junta os valores acima e monta o corpo do email

    $Vai = "Nome: $nome\n\nE-mail: $email\n\nMensagem: $mensagem\n";

    //require_once("phpmailer/class.phpmailer.php");

    //define('GUSER', 'estilizandoboutique@gmail.com');	// <-- Insira aqui o seu GMail
    //define('GPWD', 'EB2019senai');		// <-- Insira aqui a senha do seu GMail

function smtpmailer($to, $email, $nome, $assunto, $mensagem) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($email, $nome);
	$mail->Subject = $assunto;
	$mail->Body = $mensagem;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
}

// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
//o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

 if (smtpmailer('estilizandoboutique@gmail.com', $email, $nome, '$assunto', $Vai)) {

	Header("location:contato (2).html"); // Redireciona para uma página de obrigado.

}
if (!empty($error)) echo $error;
?>