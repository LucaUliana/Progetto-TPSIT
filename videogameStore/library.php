<html>
    <head>
        <title>Videogame Shop</title>
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/paginaGiochi.css">
    </head>
    <body>
        <header>
			<nav>
				<ul>
					<li class="nav-logo">VIDEOGAME STORE</li>
				</ul>
			</nav>
			<a href="profile.php">
			<button class="nav">Profile</button>
			</a>
		</header>
		<div class = "listaGiochi">
		<?php
		//declare(strict_types=1);

		require("./classi/Game.php");
		require("./repository/GameRepository.php");
		// estrae l'array di tutte le istanze di SmartTV presenti nel database
		$arrayGame = GameRepository::estrai_tutti();

		?>
		
		<?php
		foreach($arrayGame as $obj) {
			if ($obj->acquistato == true){
				echo "
				<div class=\"gioco\">
				<img class = \"immagineGioco\" src = \"$obj->immagine\">
				<p class = \"gioco\">$obj->nome</p>
				</div>";
			}
			
		}
		?>
		
		</div>
    </body>
</html>