<html>
    <head>
        <title>Videogame Shop</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/singoloGioco.css">		
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

			<a href="profile.php">
			<button class="nav">Profile</button>
			</a>
		</header>
		<div class = "listaGiochi">
		<?php
		//declare(strict_types=1);

		require("../classi/Game.php");
		require("../repository/GameRepository.php");
		
		$obj = GameRepository::estrai($_GET["percorso"]);

		?>
		
		<?php

		if($obj->acquistato == 1)
		{
			echo "
		<div class='gioco'>
			<img class='immagineGioco' src = '$obj->immagine'>
			<div class='descrizione'>
				<p class = 'nome'>$obj->nome</p>
				<p class = 'nomeSviluppatore'>$obj->nomeSviluppatore</p>
				<p class = 'valutazione'>$obj->valutazione / 5.0</p>
				<p class = 'prezzo'>$obj->prezzo</p>
				<div class = 'posseduto'>Posseduto</div>
			</div>
			<p class = 'desc'>Descrizione: <br>$obj->descrizione</p>
		</div>";
		}
		else{
			echo "
			<form action='giocoComprato.php' method='post'>
				<div class='gioco'>
					<img class='immagineGioco' src = '$obj->immagine'>
					<div class='descrizione'>
						<p class = 'nome'>$obj->nome</p>
						<p class = 'nomeSviluppatore'>$obj->nomeSviluppatore</p>
						<p class = 'valutazione'>$obj->valutazione / 5.0</p>
						<p class = 'prezzo'>$obj->prezzo</p>
						<input type='submit' class = 'menu' name='action' value='Compra'></input>
					</div>
					<p class = 'desc'>Descrizione: <br>$obj->descrizione</p>
				</div>
			</form>	";
		}

		if($_SERVER['REQUEST_METHOD'] == "GET" and isset($_GET['action']))
		{
			$obj->compra();
		}

		?>
		
		</div>
    </body>
</html>