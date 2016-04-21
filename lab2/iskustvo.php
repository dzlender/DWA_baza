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
				<h1>Podaci o radnom iskustvu</h1>
				<br>
				<p>Od veljače do svibnja 2010. radio sam kao ispomoć u otpremi i menadžmentu tvrtke „Bramac - pokrovni sistemi d.o.o.“ preko studentskog ugovora.</p>
				<p>Na Dinamovom stadionu radio na osiguranju utakmica i čišćenju tribina i okoliša tijekom cijele godine.</p>
				<p>U Zračnoj luci Zagreb prošao sva testiranja za radarsko-oblasnog kontrolora leta sve do zadnjeg kruga.</p>
				<p>Od svibnja 2014. do rujna 2015. radio u Network maintenance odjelu Intesa Sanpaolo Card d.o.o. preko studentskog ugovora.</p>
				<p>Trenutno radim u Schenker d.o.o. preko studentskog ugovora, u računovodstvenom odjelu na održavanju baze podataka i eksport-importu faktura različitih formata.</p>
			</article>
		</div>
	</body>
</html>