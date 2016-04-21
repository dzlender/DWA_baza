<html>
	<head>
		<title>Fantastic beasts j.d.o.o.</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class='logoNaslovna'>
			<img src='fantBeastsLogo.png' alt='Fantastic beasts logo'>
		</div>	
		<div class="loginPodaci">
			<form action='login.html'>
		    	<input type='submit' value='Odjava' class="odjava">
			</form>
			<?php 
				$username=$_GET["username"];
				$password=$_GET["password"];
				echo "<span class='user'>$username</span>"
			?>
			<br><hr>
		</div>
		<div class="izbornik">
			<nav>
				<ul>
					<li><a href="login.php">Osobni podaci</a></li>
					<li><a href="skolovanje.php">Podaci o školovanju</a></li>
					<li><a href="iskustvo.php">Podaci o radnom iskustvu</a></li>
					<li><a href="znanjaVjestine.php">Znanja i vještine</a></li>
				</ul>
			</nav>
		</div>
		<div class="sadrzaj">
			<article>
				<h1>Osobni podaci</h1>
				<br>
				<p>Ime i prezime: Darko Žlender</p>
				<p>Datum rođenja: 11.9.1989.</p>
				<p>Adresa i kućni broj: Ulica Božidara Magovca 44, Zagreb</p>
				<p>Tel. 01 6686 390</p>
               	<p>Mob. 092 285 7339</p>
			</article>
		</div>
	</body>
</html>