<?php 
session_start();
require_once("conexao.php");

// onde recebemos os dados do formulario 
$cpf       = $_POST['cpf'];
$nome      = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$endereco  = $_POST['endereco'];
$telefone  = $_POST['telefone'];
$email     = $_POST['email'];
$senha     = $_POST['senha'];
$senharep  = $_POST['senharep'];
$btn_cad   = $_POST['submit'];

//Essa função e para grantir que senhas sejam iquais 

if ($senha === $senharep) {

	$senhaMD5 = md5($senha); 

	//echo $senhaMD5;

}

// checa se o botao foi usado e todos os campos foram preenchidos
if (!empty($btn_cad) && !empty($cpf) && !empty($nome) && !empty($sobrenome) && !empty($endereco) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($senharep)) {

// Faz a consulta no banco de dados para saber se o CPF ou Email ja estao cadastrados
$sql_cpf = mysqli_query($conn, "SELECT * FROM client WHERE CPF = '{$cpf}'") or print mysql_error();
$sql_email = mysqli_query($conn, "SELECT * FROM client WHERE EMAIL = '{$email}'") or print mysql_error();
	if(mysqli_num_rows($sql_cpf)>0) {
        
        $_SESSION['msg'] = "<div style='text-align:center' 'color:green'>CPF JÁ CADASTRADO</div>";
        header("Location: cadastro.php");

	}elseif(mysqli_num_rows($sql_email)>0) {
        
        $_SESSION['msg'] = "<div style='text-align:center'>EMAIL JÁ CADASTRADO</div>";
        header("Location: cadastro.php");
	}else{

//recebe os dados do formulario para ser enviado
	$query = "INSERT INTO client ( CPF, NOME, SOBRENOME, ENDERECO, TELEFONE, EMAIL, SENHA) VALUES ('$cpf', '$nome', '$sobrenome', '$endereco', '$telefone', '$email', '$senhaMD5')";

if ($conn->query($query) === TRUE) {

 		$_SESSION['msg'] = "<div style='text-align:center'>USUARIO CADASTRADO COM SUCESSO</div>";
		header("Location: cadastro.php");
		
		}else {
		
		$_SESSION['msg'] = "<div style='text-align:center'>USUARIO NAO CADASTRADO</div>";
			header("Location: cadastro.php");
	}

	}

}else{
	//retorna a pagina inicial caso alguem tente acessar a pagina processar.php via URL
	header("location: index.php");
}




	