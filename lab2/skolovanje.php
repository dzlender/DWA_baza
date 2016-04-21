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
				<h1>Podaci o školovanju</h1>
				<br>
				<p>2004.-2008. Prva gimnazija u Zagrebu</p>
				<p>Trenutno sam student treće godine Tehničkog veleučilišta u Zagrebu, smjer: računarstvo.</p>
			</article>
		</div>
	</body>
</html>