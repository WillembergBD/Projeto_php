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
        <li><a href="login.php"><i class="material-icons left">account_circle</i>Login</a></li>
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
            <h2 class="center brown-text"><img src="imagens/imagens.folhagens/acelga.png" width="100" height="85"></h2>
            <h5 class="center">Acelga</h5>
            <h5 class="center">R$4,50 Uni</h5>
            <label></label>
            <select class="browser-default">
                <option value="0">Quantidade</option>
                <option value="1">1 Unidade</option>
                <option value="2">2 Unidade</option>
                <option value="3">3 Unidade</option>
                <option value="4">4 Unidade</option>
                <option value="5">5 Unidade</option>
            </select>

          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><img src="imagens/imagens.folhagens/Alface.png" width="100" height="85"></h2>
            <h5 class="center">Alface</h5>
            <h5 class="center">R$1,50 Uni</h5>
            <label></label>
            <select class="browser-default">
                <option value="0">Quantidade</option>
                <option value="1">1 Unidade</option>
                <option value="2">2 Unidade</option>
                <option value="3">3 Unidade</option>
                <option value="4">4 Unidade</option>
                <option value="5">5 Unidade</option>
            </select>
           
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><img src="imagens/imagens.folhagens/cebolinha.png" width="100" height="85"></h2>
            <h5 class="center">Cebolinha</h5>
            <h5 class="center">R$1,20 Uni</h5>
            <label></label>
            <select class="browser-default">
                <option value="0">Quantidade</option>
                <option value="1">1 Unidade</option>
                <option value="2">2 Unidade</option>
                <option value="3">3 Unidade</option>
                <option value="4">4 Unidade</option>
                <option value="5">5 Unidade</option>
            </select>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><img src="imagens/imagens.folhagens/couve.png" width="100" height="85"></h2>
            <h5 class="center">Couve</h5>
            <h5 class="center">R$1,50 Uni</h5>
            <label></label>
            <select class="browser-default">
                <option value="0">Quantidade</option>
                <option value="1">1 Unidade</option>
                <option value="2">2 Unidade</option>
                <option value="3">3 Unidade</option>
                <option value="4">4 Unidade</option>
                <option value="5">5 Unidade</option>
            </select>
          </div>
        </div>

        <div class="col s12 m3">
            <div class="icon-block">
              <h2 class="center brown-text"><img src="imagens/imagens.folhagens/Salsa.png" width="100" height="85"></h2>
              <h5 class="center">Salsa</h5>
              <h5 class="center">R$2,00 Uni</h5>
              <label></label>
            <select class="browser-default">
                <option value="0">Quantidade</option>
                <option value="1">1 Unidade</option>
                <option value="2">2 Unidade</option>
                <option value="3">3 Unidade</option>
                <option value="4">4 Unidade</option>
                <option value="5">5 Unidade</option>
            </select>
              
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