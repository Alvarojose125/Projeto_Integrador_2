<?php 
//Inicia uma nova sessão ou resume uma sessão existente
session_start();
// ele verificará se o arquivo já foi incluído
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
    // ele criptografia a senha
	$senhaMD5 = md5($senha); 

}

// checa se o botao foi usado e todos os campos foram preenchidos
if (!empty($btn_cad) && !empty($cpf) && !empty($nome) && !empty($sobrenome) && !empty($endereco) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($senharep)) {

// Faz a consulta no banco de dados para saber se o CPF ou Email ja estao cadastrados
$sql_cpf = mysqli_query($conn, "SELECT * FROM client WHERE CPF = '{$cpf}'") or print mysql_error();
$sql_email = mysqli_query($conn, "SELECT * FROM client WHERE EMAIL = '{$email}'") or print mysql_error();

    // essa função verificar se  o cpf ja exitem no banco
	if(mysqli_num_rows($sql_cpf)>0) {

        // caso o cpf estiver no banco mostra essa mensagem CPF JÁ CADASTRADO que vai ser a tribuida em uma session

        $_SESSION['msg'] = "<div style='text-align:center' 'color:green'>CPF JÁ CADASTRADO</div>";

        // ele retornar para pagina cadastro.php

        header("Location: cadastro.php");

	}elseif(mysqli_num_rows($sql_email)>0) {

         // caso o email estiver no banco mostra essa mensagem EMAIL JÁ CADASTRADO que vai ser a tribuida em uma session
        $_SESSION['msg'] = "<div style='text-align:center'>EMAIL JÁ CADASTRADO</div>";

            // ele retornar para pagina cadastro.php

        header("Location: cadastro.php");
	}else{

//recebe os dados do formulario para ser enviado
	$query = "INSERT INTO client ( CPF, NOME, SOBRENOME, ENDERECO, TELEFONE, EMAIL, SENHA) VALUES ('$cpf', '$nome', '$sobrenome', '$endereco', '$telefone', '$email', '$senhaMD5')";
         
        // essa função ver se foi inserido no banco 

if ($conn->query($query) === TRUE) {
    // caso seja inserido mostra essa mensagem USUARIO CADASTRADO COM SUCESSO

 		$_SESSION['msg'] = "<div style='text-align:center'>USUARIO CADASTRADO COM SUCESSO</div>";
		header("Location: cadastro.php");
		
        // caso não seja inserido mostra essa mensagem USUARIO NAO CADASTRADO
		}else {
		
		$_SESSION['msg'] = "<div style='text-align:center'>USUARIO NAO CADASTRADO</div>";
			header("Location: cadastro.php");
	}

	}

}else{
	//retorna a pagina inicial caso alguem tente acessar a pagina processar.php via URL
	header("location: index.php");
}
