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
          <a href="#" class="brand-logo">Brunogame</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="brunoverso.php">Brunoverso</a></li>
          <li><a href="brunogenerator.php">Gerador de Brunos</a></li>
          <li><a href="inicial.php">Home</a></li>

        </ul>

        </div>
      </nav>
    </head>

    <body>

    

    <div class="container">

    <div class="col s12 m7">
    <h2 class="header">Bem vindo!</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="https://cdn.discordapp.com/attachments/779354699337564182/785948927270453268/bb.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p> <?php
        echo file_get_contents("text/escolhas.txt")
        ?>, você foi escolhido como o representante Bruno mais apto para uma perigosa tarefa. Estamos contando com você
        para salvar o Brunoverso!</p>
        </div>
        <div class="card-action">
          <a href="fase1.php">Link Start!</a>
        </div>
      </div>
    </div>
  </div>
            
       

  </div>
            



      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>