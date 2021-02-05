<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>DivHortifruti</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="teal" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo">DivHortifruti</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="frutas.php">Frutas</a></li>
        <li><a href="verduraslegumes.php">Verduras/legumes</a></li>
        <li><a href="folhagens.php">Folhagens</a></li>
        <li><a href="raizestuberculos.php">Raízes/Tubérculos</a></li>
        <?php if (!isset($_SESSION ['authenticated'] ) && !isset($_SESSION ['usuario_logado'])){ ?>
        <li><a href="login.php"><i class="material-icons left">account_circle</i>Login</a></li>
        <?php } ?> 
        <li><a href="carrinho.php"><i class="material-icons left">local_grocery_store</i>Cart</a></li>
        <li><a href="sair.php"><i class="material-icons left">exit_to_app</i>Sair</a></li>
      </ul>    
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2"><font color = white>DivHortifruti</font></h1>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="frutas e verduras.jpg" width="1440" height="743 alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><a class="waves-effect waves-light btn-large" href="frutas.php">Frutas</a></h2>

            <p class="light">Fruta é um conceito culinário, por oposição ao de legume, um termo popular que em geral compreende os frutos, pseudofrutos e infrutescências comestíveis e de sabor adocicado que são comercializados, ainda que haja autores que discordem desta definição, por ser em suas opiniões, demasiado simplista.</p>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><a class="waves-effect waves-light btn-large" href="verduraslegumes.php">Verduras/Legumes</a></h2>

            <p class="light">Legume é qualquer planta comestível ou parte comestível de planta leguminosa (é uma família monofilética de plantas com flor) ou herbácea (Plantas de caule macio ou maleável, normalmente rasteiro).</p>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><a class="waves-effect waves-light btn-large" href="folhagens.php">Folhagens</a></h2>

            <p class="light">Folhagens fazem parte do grupo de hortaliças são uma categoria de vegetais que inclui as verduras e os legumes. Tratam-se de alimentos cultivados em hortas. Podem ser chamados de hortaliças, todos os alimentos produzidos para consumo familiar ou em larga escala.</p>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><a class="waves-effect waves-light btn-large" href="raizestuberculos.php">Raízes/Tubérculos</a></h2>

            <p class="light">As raízes tuberosas são aquelas que crescem debaixo da terra. Seus nutrientes se acumulam dentro da raiz, e seu caule fica acima da superfície. Tubérculos são os vegetais onde o caule é a parte desenvolvida, para acumular nutrientes.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h4 class="white-text">Informações</h4>
          <p class="grey-text text-lighten-4">Endereço: Avenida joão e maria n°187</p>
          <p class="grey-text text-lighten-4">E-mail: divhortifruti@gmail.com</p>
          <p class="grey-text text-lighten-4">Telefone: 9999-9999</p>
 
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
