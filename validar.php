<?php
require_once("conexao.php");
session_start();

$cpf       = $_POST['cpf'];
$senha     = $_POST['senha'];
$pwdMD5    = md5($senha);
$btn_cad   = $_POST['submit'];

$query = "SELECT * FROM client WHERE CPF = '$cpf' AND SENHA = '$pwdMD5'";
$result = mysqli_query($conn, $query) or die("ERRO AO SELECIONAR DADOS");
$row = mysqli_fetch_assoc($result);

//echo $row['CPF'];

if (!empty($btn_cad) && !empty($cpf) && !empty($senha)) {

	if (mysqli_num_rows($result)<=0){
        $_SESSION['msg'] = "<div style='text-align:center''>CPF OU SENHA NĀO CONFEREM</div>";
		header('location: login.php');
      }else{

        $_SESSION['id'] = $row['ID'];
		$_SESSION['nome'] = $row['NOME'];
		header('location: cardapio.php');

      }	

}else{
	$_SESSION['msg'] = "<div style='text-align:center'>ENTRE COM SEUS DADOS</div>";
	header('location: login.php');
}
