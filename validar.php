<?php
// nessas linhas duas de baixo a primeira carrega uma página de outro lugar e segunda inicia a sessão.
require_once("conexao.php");
session_start();

// aqui onde criamos as variáveis que vão ser atribuídas valores nela enviado de formulário de outra pagina
$cpf       = $_POST['cpf'];
$senha     = $_POST['senha'];
$pwdMD5    = md5($senha);
$btn_cad   = $_POST['submit'];

// a essa variável $query faz a função de selecionar todos clientes da tabela client onde cpf e a senha são iguais ao do banco
$query = "SELECT * FROM client WHERE CPF = '$cpf' AND SENHA = '$pwdMD5'";

// aqui vemos se está tudo certo com a conexão 
$result = mysqli_query($conn, $query) or die("ERRO AO SELECIONAR DADOS");
$row = mysqli_fetch_assoc($result);
 
// nesse if garantimos que o botão, cpf e senha sejam preenchidos. 
if (!empty($btn_cad) && !empty($cpf) && !empty($senha)) {
	
	// nesse if vemos o retorno do resultado da conexão do banco caso não encontre cpf e senha iguais ao banco mostrar a seguinte mensagem CPF OU SENHA NĀO CONFEREM.
	if (mysqli_num_rows($result)<=0){
        $_SESSION['msg'] = "<div style='text-align:center''>CPF OU SENHA NĀO CONFEREM</div>";
		header('location: login.php');
      }else{
	 // se foi encontrado no banco os dados ele atribuir o nome do cliente nessa sessão para mostrar o nome no menu do site
        $_SESSION['id'] = $row['ID'];
		$_SESSION['nome'] = $row['NOME'];
		header('location: cardapio.php');
}	

}else{
	//retorna a página inicial caso alguem tente acessar a página.
	$_SESSION['msg'] = "<div style='text-align:center'>ENTRE COM SEUS DADOS</div>";
	header('location: login.php');
}

