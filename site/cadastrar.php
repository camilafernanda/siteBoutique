<?php

include_once("conexao.php");

$nome 		    = $_POST['nome'];

$sobrenome 		= $_POST['sobrenome'];

$email			= $_POST['email'];

$data			= $_POST['data_msg'];

$estado			= $_POST['uf'];

$cep			= $_POST['cep'];

$mensagem 		= $_POST['mensagem'];

$query = mysqli_query($conexao, "INSERT INTO mensagens_fale_conosco (nome, sobrenome, email, data_msg, uf, cep, mensagem) VALUES ('$nome', '$sobrenome', '$email', '$data', '$estado', '$cep', '$mensagem')");



?>

  <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">   
    <title>Site da Boutique Estilizando</title>
<!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Estilos customizados para esse template -->
    <link href="CSS2/form-validation.css" rel="stylesheet">
  </head>

  <body>
    <header id="BarraDeNavegação">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #000000">
        <a id="BDNpalavra1" class="navbar-brand" href="#">Estilizando</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#BDNopcoes" aria-controls="BDNopcoes" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="BDNopcoes" class="collapse navbar-collapse">
          <ul id="BDNopcoesUL" class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.html">Home</a>
            </li>           
            <li class="nav-item">
              <a class="nav-link" href="#">Trajes</a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="home.html">Contato <span class="sr-only">(atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre.html">Sobre Nós</a>
            </li>            
          </ul>
        </div>
      </nav>
    </header>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="CSS2/form-validation.css" rel="stylesheet"> 
    <div class="container">
      <div class="py-5 text-center">
					
		<center>
		 
			<h1> Muito obrigado por compartilhar sua opinião. Nós da Boutique Estilizando respeitamos muito a opinião de nossos clientes. </h1>
			
			<br>
			<br>
			<br>
			
			<input type='button' value='Voltar' onclick='history.go(-1)' class="btn btn-primary btn-dark btn-block" style="background-color: #000000"/>
		
		</center>
		
            <br>
			<br>
			<br>
			<br>
			<br>
			
    <footer class="container">        
      <p class="float-right"><a href="#">Voltar ao topo</a></p>
      <p>Desenvolvido por L.C. 2019 &middot; <a href="#">Entrar em Contato</a> &middot;</a></p>
    </footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/vendor/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/vendor/holder.min.js">