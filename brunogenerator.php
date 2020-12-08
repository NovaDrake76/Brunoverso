

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
      <nav class=" indigo darken-1">
        <div class="nav wrapper ">
          <a href="#" class="brand-logo">Gerador de Brunos</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="brunoverso.php">Brunoverso</a></li>
        </ul>

        </div>
      </nav>
    </head>

    <body>

    <div class="container">

    <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Você gerou</span>
          <?php
        $primeiro = "Bruno";

        $ultimo = file("palavras.txt", FILE_IGNORE_NEW_LINES);

        shuffle($ultimo);
        $i=1;
        while ($i<2){
          echo $primeiro . ' ' . $ultimo[$i];
          $i++;
            }  
?>
        </div>
        <div class="card-action">
        <a href="brunogenerator.php" class="waves-effect waves-light btn">Gerar outro Bruno</a>
        </div>
      </div>
    </div>
  </div>
  </div>
            



      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>