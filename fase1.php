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
        </ul>

        </div>
      </nav>
    </head>

    <body onload="startTimer()">

    

    <div class="container center ">
       
       <img src="https://espressocomsaudade.files.wordpress.com/2014/06/1sworadart.gif" alt="luta de espadas">

        <div class="section">

        <progress  id="health" value="100" max="100"></progress>

<a class="waves-effect waves-light btn" onclick="damage()">Ataque!</a>
        </div>

   </div>

        
      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <script>
          function damage(){
            let health = document.getElementById("health")
            health.value -= 10;
            if (health.value < 1){
                window.alert("venceu");
                window.location.replace("https://www.youtube.com/watch?v=rwA586f-bdA");

            }
             }

      </script>
  
<script>
setTimeout( function starttimer(){
    window.alert("<?php echo file_get_contents("text/escolhas.txt")?> morreu!");
    window.location.replace("brunoverso.php");

}, 3000);
</script>
    </body>
  </html>