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
			<a href="home.php">
			<button class="browsing">Home</button>
			</a>
			
			<a href="store.php">
			<button class="browsing">Store</button>
			</a>
		</header>
		<form action="profile" method="post">
			<p>Nome</p> <input type="text" minlength="0" name="firstName" placeholder value>
			<p>Cognome</p> <input type="text" minlength="0" name="SecondName" placeholder value>
			<p>Nome Utente</p> <input type="text" minlength="0" name="Name" placeholder value><br>
			<button type="submit" value="submit">SALVA I DATI</button>
		</form>	
    </body>
</html>
