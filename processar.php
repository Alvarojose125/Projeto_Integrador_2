<?php 
session_start();
include_once("conexao.php");

// onde recebemos os dados do formulario 
$cpf =  $_POST['cpf'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$senharep = md5($_POST['senharep']);

//Essa função e para grantir que senhas sejam iquais 

if ($senha===$senharep) {
	$senhas = $senha;
}
// checa se o botao foi usado e todos os campos foram preenchidos
if (empty($_POST['cadastar']) == true && empty($cpf) == false && empty($nome) == false && empty($sobrenome)  == false  && empty($endereco) == false && empty($email) == false && empty($telefone) == false && empty($senhas) == false) {
	
	//recebe os dados do formulario para ser enviado
	$query = "INSERT INTO client (CPF, NOME, SOBRENOME, ENDERECO, TELEFONE, EMAIL, SENHA) VALUES ('$cpf', '$nome', '$sobrenome' , '$endereco' , '$telefone' , '$email' , '$senha')";

	// envia dos dados do formulario e valida se foram cadastrados
	if ($conn->query($query) === TRUE) {
		$_SESSION['mensagem'] = "<p style = 'color : green;'> USUARIO CADASTRADO COM SUCESSO </p>";
		header('location : cadastro.php');
		} 
		else {
			$_SESSION['mensagem'] = "<p style = 'color : red;'> USUARIO NÃO CADASTRADO  </p>";
			header('location : cadastro.php');
		}

}else
{
	// retorna a pagina inicial caso alguem tente acessar a pagina processar.php via URL
	header("location: index.php");
}
