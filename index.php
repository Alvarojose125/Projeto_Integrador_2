<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<HEAD>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Integrador delivery</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="shortcut icon" href="img/icone1.png" type="image/x-icon">
   </HEAD>

<BODY>

<!--Topo do menu do site-->

<div class="one"></div>
<header class="header">
  <div class="container">
    <a ref="index.php" class="grid-4">
      <img src="img/logo.png" alt="logo integrador delivery">
    </a>
  <nav class="grid-12 topo">
      <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="cardapio.php">Cardápio</a></li>
          <li><a href="login.php">Login</a></li>
          <li>
            <select class="contato" >
                       <option> Contato       </option> 
                       <option> (81)3543-0912 </option>
                       <option> (81)3543-1671 </option>
                   </select>
                   <li>
                    <h2><?php echo @$_SESSION['nome'];?></h2>
                    <h2><a href="logout.php">Sair</a></h2></li>
             </li>       
          <li><a href="#"><img class="iconecarrinho"  src="img/carrinho.png" alt="icone de carrinho"></a></li>
      </ul>
      
  </nav>
  </div>
</header>

<!--fim do menu-->

<!--banner do site-->

<section class="Banner">
  <div class="container">
      <h1>Mate sua fome agora mesmo!</h1>
      <a href="cardapio.php" >Fazer meu pedido agora</a>
  </div>

</section>

<!--fim do banner-->

<!--Combos-->
  <section class="petiscos">
     <div class="container">

       <h2>Os melhores lanches da cidade</h2>
       <p>Confira nossos combos</p>

       <ul class="combo">
         <li class="grid-1-3">
           <h3>Combo "Sextou"</h3>
           <img src="img/combo.jpg" alt="combo sextou">
           <p>Duplo hamburguer, calabresa, batata frita coberta de cheddar e bacon.</p>
           <h4><a href="#">R$:22,00</a></h4>
           <h4><a href="#">Fazer o pedido</a></h4>
         </li>

         <li class="grid-1-3">
          <h3>Combo "Sextou 2.0"</h3>
          <img src="img/combo20.jpg" alt="combo sextou 2.0">
          <p>Quadra de hamburguer, anéis de cebola, frango empanado, batata frita e calabresa.</p>
          <h4><a href="#">R$:28,00</a></h4>
          <h4><a href="#">Fazer o pedido</a></h4>
        </li>

        <li class="grid-1-3">
          <h3>Combo "O melhor"</h3>
          <img src="img/omelhor.jpg" alt="combo o melhor">
          <p>O melhor! coxinha, calabresa, batata frita, duplo cachorro quente, duplo hamburguer e maionese caseira.</p>
          <h4><a href="#">R$:35,00</a></h4>
          <h4><a href="#">Fazer o pedido</a></h4>
        </li>

       </ul>
     </div>
  </section>
<!--Fim dos combos-->

<!--inicio hamburgueres-->

<section class="petiscos">
  <div class="container">

    <h2>Os melhores hamburgueres você só encontra aqui!</h2>
    <p></p>

    <ul class="combo">
      <li class="grid-1-3">
        <h3>Saramanburguer</h3>
        <img src="img/saramburguer.jpg" alt="Foto do Saramanburguer">
        <p>Pão brioche , Hamburguer artesanal, salada e cheddar cremoso.</p>
        <h4><a href="#">R$:18,00</a></h4>
        <h4><a href="#">Fazer o pedido</a></h4>
      </li>

      <li class="grid-1-3">
       <h3>cheese bacon</h3>
       <img src="img/cheese bacon.jpg" alt="foto do cheese bacon">
       <p>Pão brioche, hamburguer artesanal, queijo mussarela, bacon e salada.</p>
       <h4><a href="#">R$:20,00</a></h4>
       <h4><a href="#">Fazer o pedido</a></h4>
     </li>

     <li class="grid-1-3">
       <h3>X-Infarto</h3>
       <img src="img/xinfarto.jpg" alt="foto do X-Infarto">
       <p>Saiu da jaula o monstro!!! Pão brioche, duplo hamburguer artesanal, quatro queijos, bacon e salada.</b></p>
       <h4><a href="#">R$:25,00</a></h4>
       <h4><a href="#">Fazer o pedido</a></h4>
     </li>

    </ul>
  </div>
</section>
<!--fim dos hamburgueres-->

<!--Slide bebidas-->
<section class="slide bebidas">
  <div class="container">
    <h3>Bebidas</h3>
    <p>Que tal uma bebida para acompanhar?</p>
    <div class="itens">
      <img src="img/cocacola.png.png" alt="cocacola">
      <img src="img/fanta.png.png" alt="fanta">
      <img src="img/fantauva.png.png" alt="fanta uva">
      <img src="img/guarana.png.png" alt="guarana">
      <img src="img/sprite.png.png" alt="sprite">
      <img src="img/pepsi.png.png" alt="pepsi">
      <img src="img/soda.png.png" alt="soda">
      <img src="img/redbull.png.png" alt="redbull">
      <img src="img/itaipava.png.png" alt="itaipava">
      <img src="img/heineken.png.png" alt="heineken">
      <img src="img/corona.png.png" alt="corona">

    </div>

  </div>

</section>

<!--Fim do slide bebidas-->
<!--rodapé-->
<footer>
  <section class="footer">
    <div class="rodape">
      <div class="one2"></div>
      <h1>Endereço:BR-101 Norte, Km 43,6 (ao lado da Unilever), Igarassu - PE</h1>
      <h2>Todos os direitos reservados</h2>
      <h3>Fone:40028922</h3>
    </div>
  </section>
</footer>

<!--fim rodapé-->
</BODY>
</HTML>