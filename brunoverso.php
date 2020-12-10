<!DOCTYPE html>
  <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <nav class=" indigo darken-1">
        <div class="nav wrapper ">
          <a href="#" class="brand-logo">BrunoVerso</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="brunogenerator.php">Gerador de Brunos</a></li>
          <li><a href="deck.php">Brunodeck</a></li>
          <li><a href="inicial.php">Home</a></li>

        </ul>

        </div>
      </nav>
      
    </head>

    <body>

    <div style="background-image: url('https://cdn.discordapp.com/avatars/329033740187861002/f1cc147523cf9d699ee1bb8b794b4e3d.png?size=1024 ');">

<div class="container">

  <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Escolha seus Brunos</span>
          <?php
          $brunos = file("text/BrunoVerso.txt", FILE_IGNORE_NEW_LINES);
    
          $rand_keys = array_rand($brunos, 3);
          echo nl2br("\n");
          echo nl2br ($brunos[$rand_keys[0]] . "\n");
          echo nl2br ($brunos[$rand_keys[1]] . "\n");
          echo nl2br ($brunos[$rand_keys[2]] . "\n");

          file_put_contents("text/escolhas.txt", $brunos[$rand_keys[0]]);
?>
        </div>
        <div class="card-action">
        <a href="brunoverso.php" class="waves-effect waves-light btn">Escolher outros</a>
        
        

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Brunogame</span>
          <?php
          $brunos = file("text/BrunoVerso.txt", FILE_IGNORE_NEW_LINES);
    
          $rand_keys = array_rand($brunos, 3);
          echo nl2br("\n");
          echo nl2br ($brunos[$rand_keys[0]] . "\n");

          file_put_contents("text/escolhas.txt", $brunos[$rand_keys[0]]);



?>
        </div>
        <div class="card-action">
        <a href="brunoverso.php" class="waves-effect waves-light btn">Escolher outro Bruno</a>
        <a href="brunogame.php" class="waves-effect waves-light btn">Usar esse</a>
        

        </div>
      </div>
    </div>
  </div>
  </div>
  </div>



      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">    </script>
      
      <script>  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems);

    async function getcard(){
    var data = await fetch("chooser.php", {method:"get"})
    var card = await data.json();
    
   document.getElementById("carta").innerHTML=card;
  }
  });</script>  

    </body>
  </html>
        