<?php 
session_start();
?>
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
      
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action="processar.php"> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome" required="required" type="text" placeholder="Nome" />
          </p>

          <p> 
            <label for="nome_cad">Seu sobrenome</label>
            <input id="nome_cad" name="sobrenome" required="required" type="text" placeholder="Sobrenome" />
          </p>

          <p> 
            <label for="nome_cad">Informe seu CPF</label>
            <input id="nome_cad" name="cpf" required="required" type="text" placeholder="CPF" />
          </p>
          
          <p> 
            <label for="nome_cad">Informe seu endereço</label>
            <input id="nome_cad" name="endereco" required="required" type="text" placeholder="endereço" />
          </p>

          <p> 
            <label for="nome_cad">Informe um número de telefone</label>
            <input id="nome_cad" name="telefone" required="required" type="text" placeholder="numero de telefone" />
          </p>

          <p> 
            <label for="email_cad">Informe seu e-mail</label>
            <input id="email_cad" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Crie uma senha</label>
            <input id="senha_cad" name="senha" required="required" type="password" placeholder="ex. 1234"/>
          </p>
           
          <p> 
            <label for="senha_cad">Repetir a senha</label>
            <input id="senha_cad" name="senharep" required="required" type="password" placeholder="ex. 1234"/>
          </p>

          <p> 
            <input type="submit" value="Cadastrar" name="submit" /> 
          </p>
          <div id="container_msg">
           <?php
          if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
          }
        ?>
          <p class="link">  
            Já tem conta?
            <a href="login.php"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>