<?php session_start(); ?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Formulário de Login e Registro com HTML5 e CSS3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="css/cadastro.css">
  <link rel="shortcut icon" href="img/icone1.png" type="image/x-icon">
</head>
<body>
   <!--linha-->
   <div class="linha"></div>
   <!--cabeçalho-->
   <header>
    <div class="cabecalho">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="cardapio.php">Cardápio</a></li>
    </ul>
        <img src="img/logo.png" alt="logo integrador delivery">
        
    </div>
    </header>
   <!--fim cabeçalho-->
  <div class="container" >
    <a class="links" id="paralogin"></a>
    <a class="links" id="paracadastro"></a>
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action="validar.php"> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Seu CPF</label>
            <input id="nome_login" name="cpf" required="required" type="text" placeholder="111.111.111-01"/>
          </p>
           
          <p> 
            <label for="email_login">Insira a senha</label>
            <input id="email_login" name="senha" required="required" type="password" placeholder="ex. senha" /> 
          </p>
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" value="Logar" name="submit">
          </p>
          <?php
          if(isset($_SESSION['msg']))
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        ?> 
          <p class="link">
            Ainda não tem conta?
            <a href="cadastro.php">Cadastre-se</a>
          </p>
        </form>
      </div>
      </div>
      </div>
    </body>
    </html>