<html>
    <head>
        <title>Videogame Shop</title>
        <link rel="stylesheet" href="style.css">
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
    </body>
</html>
<?php
//declare(strict_types=1);

require("./classi/Game.php");
require("./repository/GameRepository.php");
// estrae l'array di tutte le istanze di SmartTV presenti nel database
$arrayGame = GameRepository::estrai_tutti();

?>
<table>
	<thead>
		<tr>
			<th>Nome</th>
			<th>Software House</th>
			<th>Valutanzione</th>
		</tr>
	</thead>
	<tbody>
<?php
foreach($arrayGame as $obj) {
	echo "
	<tr>
		<td>$obj->nome</td>
		<td>$obj->nomeSviluppatore</td>
		<td>$obj->valutazione</td>
	</tr>";
}
?>
	</tbody>
</table>
