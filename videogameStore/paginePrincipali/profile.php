<?php

$firstName= $_POST["firstName"];
$secondName= $_POST["secondName"];
$name= $_POST["name"];
?>


<html>
    <head>
        <title>Videogame Shop</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
			<nav>
				<ul>
					<li class="nav-logo">VIDEOGAME STORE</li>
				</ul>
			</nav>
			<a href="../home.php">
			<button class="browsing">Home</button>
			</a>
			
			<a href="store.php">
			<button class="browsing">Store</button>
			</a>
		</header>
		<div>
			<img src="../img/utente.jpg">
			<p>Nome : <?php echo $firstName ?> </p>
			<p>Cognome : <?php echo $secondName ?> </p> 
			<p>Nome Utente : <?php echo $name ?> </p> </br>

			<h2>Modifica Dati Utente</h2>

			<form action="#" method="post">
				<input type="text" minlength="0" name="firstName" placeholder="Nome">
				<input type="text" minlength="0" name="secondName" placeholder="Cognome">
				<input type="text" minlength="0" name="name" placeholder="Nome Utente">
				
				<br><br>
				<button type="submit" value="submit" onClick="alert('Dati Salvati');">SALVA I DATI</button>
			</form>
		</div>	
		
    </body>
</html>
