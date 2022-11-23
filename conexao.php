<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'banco');
 
$conn = mysqli_connect(HOST, USER, PASS, BASE);

//var_dump($conn);

if (mysqli_connect_errno()) {

	printf("<br>Conexão Falhou: %s\n</br>", mysqli_connect_error());
	
}else{

//printf("<br><br>Status da conexão: %s\n", mysqli_stat($conn));

}