<?php
session_start();

if (!$_SESSION['id'] && !$_SESSION['nome'])
  header('location: login.php');

?>

<h2>Olá, <?php echo $_SESSION['nome'];?></h2>
<h2><a href="logout.php">Sair</a></h2>