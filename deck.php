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
          <a href="#" class="brand-logo">Bruno Deck</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="brunoverso.php">Brunoverso</a></li>
          <li><a href="brunogenerator.php">Gerador de Brunos</a></li>
          <li><a href="inicial.php">Home</a></li>

        </ul>

        </div>
      </nav>
    </head>

    <body >





      <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="https://i.imgur.com/Inolid7.png"></a>
    <a class="carousel-item" href="#two!"><img src="https://i.imgur.com/klkzMBr.png"></a>
    <a class="carousel-item" href="#three!"><img src="https://i.imgur.com/ENl8Loy.png"></a>
    <a class="carousel-item" href="#four!"><img src="https://i.imgur.com/hPUUP5r.png"></a>
    <a class="carousel-item" href="#five!"><img src="https://i.imgur.com/T8XZfTf.png"></a>
  </div>

  <div class="container center">
  <a class="btn" onclick="getcard()">Pegar carta</a>

<h1 id="carta"></h1>
</div>


  <?php
    
  ?>
      

      
</body >
            
      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
    </script>

    <script>

        
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems);
  });


document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems);
  });

  async function getcard(){
    var data = await fetch("getcard.php", {method:"get"})
    var card = await data.json();
    
   document.getElementById("carta").innerHTML=card;
  }
    </script>
      
    </body>
  </html>