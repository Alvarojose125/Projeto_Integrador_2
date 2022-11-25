<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cardapio.css">
    <link rel="shortcut icon" href="img/icone1.png" type="image/x-icon">
    
    <title>Cardápio</title>
</head>
<body>
  <section class="menu">
  <div class="linha"></div>
  <header class="header">
    <a class="logop">
      <img  src="img/logo.png" alt="logo integrador delivery">
    </a>
        <div class="topo">
          
          <ul>
               <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Cardápio</a></li>
                <li><a href="login.php">Login</a></li>
                <li>
                  <select class="contato" >
                       <option> Contato       </option> 
                       <option> (81)3543-0912 </option>
                       <option> (81)3543-1671 </option>
                   </select> 
                </li> 
                <li> 
                 <?php echo @$_SESSION['nome'];?>
                <a href="logout.php">Sair</a>
               </li>
                <li><a href="#"><img class="iconecarrinho" src="img/carrinho.png" alt=""></a></li>
          </ul>
        </div>
        
      </header>
    </section>
    <div class="subM">
          <h1>cardápio</h1>
    </div>
    <!--inicio de combos-->
    <div class="nome_sub_titulo">
      <h2>combos promocionais</h2>
      
            
      <section class="imagens"> 
<div>
          <h3>COMBO "SEXTOU"</h3>

            <img src="img/sextou.png" alt="Foto do Saramanburguer">
            <p>Duplo hamburguer, calabresa, batata frita coberta de cheddar e bacon.</p>
            <h4><a href="#">R$:22,00</a></h4>
            <h4><a href="#">Fazer o pedido</a></h4>    
</div>
<div>
          <h3>COMBO"SEXTOU 2.0"</h3>

          <img src="img/sextou 2.png" alt="Foto do Saramanburguer">
          <p>Quadra de hamburguer, anéis de cebola, frango empanado, batata frita e calabresa.</p>
          <h4><a href="#">R$:28,00</a></h4>
          <h4><a href="#">Fazer o pedido</a></h4>
          
</div>

<div>
  <h3>barca furacão</h3>

  <img src="img/Barca de Lanches.jfif" alt="Foto da barca furacão">
  <p>batata-frita, hamburguer, coxinhas, calabresa e cheddar</p>
  <h4><a href="#">R$:30,00</a></h4>
  <h4><a href="#">Fazer o pedido</a></h4>
  
</div>

<div>
  <h3>"o melhor"</h3>

  <img src="img/melhor.png" alt="Foto da barca furacão">
  <p>cachorro-quente duplo, hamburguer duplo, coxinhas, batata-frita com calabresa e cheddar</p>
  <h4><a href="#">R$:35,00</a></h4>
  <h4><a href="#">Fazer o pedido</a></h4>
  
</div>

</section>
    <!--fim dos combos-->
    <!------------------------------------------------------------------------------------------------------------------->
  <!--inicio do menu hambuguer-->

    <div class="nome_sub_titulo">
        <h2>hamburguers</h2>
        
              
        <section class="imagens"> 
<div>
            <h3>Light burguer</h3>

            <img src="img/Light burguer.jpg" alt="Foto do Light burguer">
            <p>Pão brioche , Hamburguer , salada e molho cremoso.</p>
            <h4><a href="#">R$:15,00</a></h4>
            <h4><a href="#">Fazer o pedido</a></h4>
            
</div>

<div>
            <h3>Saramanburguer</h3>

              <img src="img/saramburguer.png" alt="Foto do Saramanburguer">
              <p>Pão brioche , Hamburguer artesanal, salada e cheddar cremoso.</p>
              <h4><a href="#">R$:18,00</a></h4>
              <h4><a href="#">Fazer o pedido</a></h4>    
</div>

<div>        <h3>Cheese bacon</h3>

              <img src="img/cheese bacon.jpg" alt="Foto do cheese bacon">
              <p>Pão brioche, hamburguer artesanal, queijo mussarela,cheddar, bacon e salada..</p>
              <h4><a href="#">R$:20,00</a></h4>
              <h4><a href="#">Fazer o pedido</a></h4>
</div>
<div>
            <h3> X-INFARTO</h3>

            <img src="img/xinfarto.png" alt="Foto do Saramanburguer">
            <p>Pão brioche, duplo hamburguer artesanal, quatro queijos, bacon e salada.</p>
            <h4><a href="#">R$:25,00</a></h4>
            <h4><a href="#">Fazer o pedido</a></h4>
</div>
</section>
<!--fim do menu para hamburgue-->

  <!-- _______________________________________________________________________ -->

<!--inicio do menu para pizza-->
        
        
        <div class="nome_sub_titulo">
          <h2>pizza</h2>
          
                
          <section class="imagens"> 
  <div>
              <h3>mussarela</h3>
              
  
                <img src="img/mussurela.png" alt="Foto do Saramanburguer">
                <p>queijo, tomate e oregano.</p>
                <p>tamanho g</p>
                <h4><a href="#">R$:20,00</a></h4>
                <h4><a href="#">Fazer o pedido</a></h4>
                <p>tamanho m</p>
                <h4><a href="#">R$:15,00</a></h4>
                <h4><a href="#">Fazer o pedido</a></h4>
                <p>tamanho p</p>
                <h4><a href="#">R$:10,00</a></h4>
                <h4><a href="#">Fazer o pedido</a></h4>    
  </div>
  <div>
              <h3> calabresa</h3>
  
              <img src="img/calabreza.png" alt="Foto de pizza de mussarela">
              <p>queijo, cebola , calabresa e azeitona.</p>
              <p>tamanho g</p>
              <h4><a href="#">R$:20,00</a></h4>
              <h4><a href="#">Fazer o pedido</a></h4>
              <p>tamanho m</p>
              <h4><a href="#">R$:15,00</a></h4>
              <h4><a href="#">Fazer o pedido</a></h4>
              <p>tamanho p</p>
              <h4><a href="#">R$:10,00</a></h4>
              <h4><a href="#">Fazer o pedido</a></h4> 
              
  </div>
  <div>        <h3>camarão</h3>
  
                <img src="img/camarão.png" alt="Foto de camarão">
                <p>queijo, camarão , oregano e azeitona.</p>
                <p>tamanho g</p>
                <h4><a href="#">R$:50,00</a></h4>
                <h4><a href="#">Fazer o pedido</a></h4>
                <p>tamanho m</p>
                <h4><a href="#">R$:35,00</a></h4>
                <h4><a href="#">Fazer o pedido</a></h4>
                <p>tamanho p</p>
                <h4><a href="#">R$:20,00</a></h4>
                <h4><a href="#">Fazer o pedido</a></h4> 
  </div>
  <div>
              <h3>Charque com catupiry</h3>
  
              <img src="img/charque.jpg" alt="Foto pizza de charque com catupiry">
              <p>Charque, catupiry, oregano e azeitona.</p>
              <p>tamanho g</p>
              <h4><a href="#">R$:50,00</a></h4>
              <h4><a href="#">Fazer o pedido</a></h4>
              <p>tamanho m</p>
              <h4><a href="#">R$:30,00</a></h4>
              <h4><a href="#">Fazer o pedido</a></h4>
              <p>tamanho p</p>
              <h4><a href="#">R$:20,00</a></h4>
              <h4><a href="#">Fazer o pedido</a></h4> 
  </div>
          </section>
           <!--fim do menu para pizza-->

  <!-- _______________________________________________________________________ -->

  <!-- inicío do menu coxinha-->

  

    <div class="nome_sub_titulo">
      <h2>coxinhas</h2>
        
      <section class="imagens"> 

  
  <div>
          <h3 class="gua">charque com catupiry</h3>
          

            <img src="img/charque com catupiry.png" alt="Foto da coxinha charque com catupiry">
            <p>charque, catupiry e orégano.</p>
            <h4><a href="#">R$:4,50</a></h4>
            <h4><a href="#">Fazer o pedido</a></h4>    
</div>
<div>
          <h3 class="gua">frango com catupiry</h3>

          <img src="img/frango com catupiry.png" alt="Foto da coxinha frango com catupiry">
          <p>frango, catupiry e orégano.</p>
          <h4><a href="#">R$:3,50</a></h4>
          <h4><a href="#">Fazer o pedido</a></h4>
          
</div>
<div>        <h3>calabresa</h3>

            <img src="img/calabresa.png" alt="Foto da coxinha calabresa">
            <p>calabresa e orégano.</p>
            <h4><a href="#">R$:3,50</a></h4>
            <h4><a href="#">Fazer o pedido</a></h4>
</div>
<div>
          <h3>camarão</h3>

          <img src="img/ccamarão.png" alt="Foto da coxinha camarão">
          <p>camarão e orégano.</p>
          <h4><a href="#">R$:4,50</a></h4>
          <h4><a href="#">Fazer o pedido</a></h4>
</div>
</div>
      </section>


  <!--inicio do menu para milkshakes-->


  <div class="nome_sub_titulo">
    <h2>sobremesa</h2>
    <h3>milkshakes</h3>
          
    <section class="imagens"> 

<div>
         <h3>Nutella</h3>

         <img src="img/nutella.png" alt="Foto do milkshake nutella">
         <p>sorvete de creme, calda de chocolate, leite condensado, chantilly e nutella.</p>
         <p>400ml</p>
         <h4><a href="#">R$:8,50</a></h4>
         <h4><a href="#">Fazer o pedido</a></h4> 
         <p>800ml</p>
         <h4><a href="#">R$:13,00</a></h4>
         <h4><a href="#">Fazer o pedido</a></h4>
        
</div>
<div>    
         <h3>oreo</h3>

          <img src="img/oreo.jpg" alt="Foto do milkshake oreo">
          <p>sorvete de baunilha , calda de chocolate, leite condensado, chantilly e oreo.</p>
          <p>400ml</p>
          <h4><a href="#">R$:8,50</a></h4>
          <h4><a href="#">Fazer o pedido</a></h4> 
          <p>800ml</p>
          <h4><a href="#">R$:13,00</a></h4>
          <h4><a href="#">Fazer o pedido</a></h4>
</div>
<div>
        <h3>Coco com chocolate</h3>

        <img src="img/coco chocolate.jpg" alt="Foto do milkshake de paçoca">
        <p>Sorvete de coco com blocos de chocolate</p>
        <p>400ml</p>
        <h4><a href="#">R$:8,00</a></h4>
        <h4><a href="#">Fazer o pedido</a></h4> 
        <p>800ml</p>
        <h4><a href="#">R$:12,50</a></h4>
        <h4><a href="#">Fazer o pedido</a></h4>
</div>

<div>
  <h3>Napolitano</h3>

    <img src="img/milkshake napolitano.jpg" alt="Foto do milkshake ovomaltine">
    <p>sorvete de creme, chocolate cremoso, leite condensado e sorvete de morango, .</p>
    <p>400ml</p>
    <h4><a href="#">R$:10,00</a></h4>
    <h4><a href="#">Fazer o pedido</a></h4>   
    <p>800ml</p>
    <h4><a href="#">R$:12,50</a></h4>
    <h4><a href="#">Fazer o pedido</a></h4>
</div>

    </section>
    <!--fim do menu milkshakes-->
    <!------------------------------------------------------------------------------------------------------------------->
<!-- fatias de torta-->
<div>
        <div class="nome_sub_titulo">
           <h2>tortas</h2>
          
    <section class="imagens"> 
<div>
         <h3 class="doce">doce de leite</h3>
          <img src="img/doce de leite.jpg" alt="Foto da fatia de torta crocante de doce de leite">
          <p>120g</p>
          <h4><a href="#">R$:8,00</a></h4>
          <h4><a href="#">Fazer o pedido</a></h4>   
          <p>220g</p>
          <h4><a href="#">R$:12,50</a></h4>
          <h4><a href="#">Fazer o pedido</a></h4>
</div>
<div>
          <h3>fatia limão</h3>
          <img src="img/limão.png" alt="Foto da fatia de torta limão">
          <p>120g</p>
          <h4><a href="#">R$:8,00</a></h4>
          <h4><a href="#">Fazer o pedido</a></h4>   
          <p>220g</p>
          <h4><a href="#">R$:12,50</a></h4>
          <h4><a href="#">Fazer o pedido</a></h4>
 </div>
 <div>
        <h3>fatia morango</h3>
        <img src="img/morango.png" alt="Foto da fatia de torta morango">
        <p>120g</p>
        <h4><a href="#">R$:8,00</a></h4>
        <h4><a href="#">Fazer o pedido</a></h4>   
        <p>220g</p>
        <h4><a href="#">R$:12,50</a></h4>
        <h4><a href="#">Fazer o pedido</a></h4>
</div>
<div>
        <h3>fatia prestígio</h3>
        <img src="img/Prestigio.png" alt="Foto da fatia de torta prestígio">
        <p>120g</p>
        <h4><a href="#">R$:8,00</a></h4>
        <h4><a href="#">Fazer o pedido</a></h4>   
        <p>220g</p>
        <h4><a href="#">R$:12,50</a></h4>
        <h4><a href="#">Fazer o pedido</a></h4>
</div>


    </section>
    <!--fim do menu tortas-->

    <!------------------------------------------------------------------------------------------------------------------->

<!--inicio do menu para bebidas-->
          <div class="nome_sub_titulo">
            <h2>bebidas</h2>
            
                  
            <section class="imagens"> 
    <div>
                <h3>coca-cola</h3>
    
                  <img src="img/coca lata.jpg" alt="Foto coca-cola">
                  <p>lata 350ml</p>
                  <h4><a href="#">R$:6,00</a></h4>
                  <h4><a href="#">Fazer o pedido</a></h4>
                  <p>2 Litros</p>
                  <h4><a href="#">R$:12,00</a></h4>
                  <h4><a href="#">Fazer o pedido</a></h4>    
    </div>
    <div>
                <h3> fanta</h3>
    
                  <img src="img/fanta lata.jpg" alt="Foto fanta">
                  <p>lata 350ml</p>
                  <h4><a href="#">R$:5,00</a></h4>
                  <h4><a href="#">Fazer o pedido</a></h4>
                  <p>2 Litros</p>
                  <h4><a href="#">R$:11,00</a></h4>
                  <h4><a href="#">Fazer o pedido</a></h4>
                
    </div>
    <div>        <h3 class="gua">guarana antarctica</h3>
    
                  <img src="img/antartica lata.jpg" alt="Foto guarana">
                  <p>lata 350ml</p>
                  <h4><a href="#">R$:5,00</a></h4>
                  <h4><a href="#">Fazer o pedido</a></h4>
                  <p>2 Litros</p>
                  <h4><a href="#">R$:11,00</a></h4>
                  <h4><a href="#">Fazer o pedido</a></h4>
    </div>
    
    <div>
                <h3> pepsi</h3>
    
                <img src="img/pepsi lata.jpg" alt="Foto pepsi">
                <p>lata 350ml</p>
                <h4><a href="#">R$:5,00</a></h4>
                <h4><a href="#">Fazer o pedido</a></h4>
                <p>2 Litros</p>
                <h4><a href="#">R$:11,00</a></h4>
                <h4><a href="#">Fazer o pedido</a></h4>
    </div>
    <div>
                  <h3>sucos</h3>
    
                  <img src="img/fruta.png" alt="foto de suco">
                  <p>copo 300ml</p>
                  <h4><a href="#">R$:8,00</a></h4>
                  <h4><a href="#">Fazer o pedido</a></h4>
                  <p> jarra 1 Litro </p>
                  <h4><a href="#">R$:15,00</a></h4>
                  <h4><a href="#">Fazer o pedido</a></h4>
                  <h6>*verificar disponibilidade</h6>
    </div>
            </section>
          
     
            <footer>
              <section class="footer">
                <div class="rodape">
                  <div class="one2"></div>
                  <h1>Endereço:BR-101 Norte, Km 43,6 (ao lado da Unilever), Igarassu - PE</h1>
                  <h2>Todos os direitos reservados</h2>
                  <h5>Fone:40028922</h5>
                </div>
              </section>
            </footer>
</body>
</html>