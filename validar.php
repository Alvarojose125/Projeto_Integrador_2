<?php

include('conexao.php');


$cpf =  $_POST['cpf'];
$senha = $_POST['senha'];
$pwdMD5 = md5($senha);

$query = "SELECT CPF, SENHA, NOME FROM clientes";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);


if (empty($cpf) == false && empty($senha) == false) {

if ($row["CPF"] == $cpf && $row["SENHA"] == $pwdMD5) {
  
  		session_start();
  		$_SESSION['nome'] = $row["NOME"];

 		 header('Location: painel.php');

		}else {
  			echo "Usuario nao encontrado no DB";
  			header('Location: index.php');
		}

} 




