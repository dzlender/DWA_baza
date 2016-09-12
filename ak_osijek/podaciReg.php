<!DOCTYPE html>
<html>
	<head>
		<?php
			if (!isset($_COOKIE['username'])){
				header('Location: login.php');
			}

			require_once 'idiorm.php';
			ORM::configure('mysql:host=localhost; dbname=kolodvor; charset=utf8');
			ORM::configure('username', 'root');
			ORM::configure('password', 'konjina1234');
		 ?>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="kolodvorStil.css">
		<header>
			<img src="kolodvorOsijek.jpg" alt="zavjesa" id="header">
			<div class="korisnickoIme"> 
				<?php 
					echo $_COOKIE['username'];
				 ?>
			</div>
		</header>
		<title name="title">
			<?php
				$row = ORM::for_table('jezik')->where('naziv', 'naslov')->find_one();
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];
			 ?>
		</title>
	</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<body>
		<br><br><br><br><br>
		<div class="pretraga">
		<?php 
					$stvori = ORM::for_table('provjera_korisnika')->create();
					$stvori->ime = $_POST['ime'];
					$stvori->prezime = $_POST['prezime'];
					$stvori->mail = $_POST['mail'];
					$stvori->racun = $_POST['racun'];
					$stvori->save();
				
		 ?>
			<p>
				Podaci uspješno poslani! Dobit ćete odgovor na e-mail.
			</p>
			<p>
				Data successfully sent! You'll receive an answer on your e-mail address.
			</p>
		</div>
	</body>
</html>