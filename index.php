<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


	<title>Brunochat</title>
	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
						document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat.php', true);
			req.send();
		}
	
		setInterval(function(){ajax();}, 1000);

 
	</script>
</head>

<div class="container">
<body onload="ajax();">
	<div id="chat">

		
	</div>
	<form method="post" action="index.php">
		<input type="text" name="nome" placeholder="Insira o seu Bruno: ">
		<input type="text" name="mensagem" placeholder="mensagem">
			<input class="btn" type="submit" value="Enviar">

	</form>
	</div>
	<?php
		include("bd_conect.php");
		$nome = $_POST['nome'];
		$mensagem = $_POST['mensagem'];
		$sql = $pdo->query("INSERT INTO chat1 SET nome= '$nome', mensagem= '$mensagem'");


	?>

</body>
</html>