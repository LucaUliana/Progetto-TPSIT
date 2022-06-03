<html>
    <head>
        <title>Videogame Shop</title>
        <link rel="stylesheet" href="../css/style.css">

		<script>
        function toggleTheme() {
            // Obtains an array of all <link>
            // elements.
            // Select your element using indexing.
            var theme = document.getElementsByTagName('link')[0];
  
            // Change the value of href attribute 
            // to change the css sheet.
            if (theme.getAttribute('href') == '../css/style.css') {
                theme.setAttribute('href', '../css/styleChiaro.css');
            } else {
                theme.setAttribute('href', '../css/style.css');
            }
        }
    </script>
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
			<button onclick="toggleTheme()" class="browsing" id="scuro">Tema Scuro / Chiaro</button> !!Opzione sperimentale!!

    </body>
</html>