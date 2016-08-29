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
			<form method="post" action="naslovna.php" class="izborJezika" name="izborJezika"
					onClick="document.forms.izborJezika.submit();"> 
				<?php
					session_start(); 
					if(empty($_POST) && !isset($_SESSION['language']))
						echo '<input type="radio" name="jezik" value="hrv" checked> hrv &nbsp;&nbsp;&nbsp;
								<input type="radio" name="jezik" value="eng"> eng';
					else if(empty($_POST) && $_SESSION['language']=='hrv')
						echo '<input type="radio" name="jezik" value="hrv" checked> hrv &nbsp;&nbsp;&nbsp;
								<input type="radio" name="jezik" value="eng"> eng';
					else if(empty($_POST) && $_SESSION['language']=='eng')
						echo '<input type="radio" name="jezik" value="hrv"> hrv &nbsp;&nbsp;&nbsp;
								<input type="radio" name="jezik" value="eng" checked> eng';
					else if($_POST['jezik']=='hrv'){
						echo '<input type="radio" name="jezik" value="hrv" checked> hrv &nbsp;&nbsp;&nbsp;
								<input type="radio" name="jezik" value="eng"> eng';
						$_SESSION['language']='hrv';
					}
					else if($_POST['jezik']=='eng'){
						echo '<input type="radio" name="jezik" value="hrv"> hrv &nbsp;&nbsp;&nbsp;
								<input type="radio" name="jezik" value="eng" checked> eng';	
						$_SESSION['language']='eng';
					}										
				?>
			</form>
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
	<body>
		<ul>
			<a href="naslovna.php">
				<li>
					<?php
						$row = ORM::for_table('jezik')->where('naziv', 'naslovna')->find_one();
						if(!empty($_POST))	
							echo $row[$_POST['jezik']];
						else if(empty($_POST) && !isset($_SESSION['language']))
							echo $row['hrv'];
						else if(empty($_POST) && isset($_SESSION['language']))
							echo $row[$_SESSION['language']];
					 ?>			
				</li>
			</a>
			<a href="polasci_dolasci.php">
				<li>
					<?php
						$row = ORM::for_table('jezik')->where('naziv', 'polasciDolasci')->find_one();
						if(!empty($_POST))	
							echo $row[$_POST['jezik']];
						else if(empty($_POST) && !isset($_SESSION['language']))
							echo $row['hrv'];
						else if(empty($_POST) && isset($_SESSION['language']))
							echo $row[$_SESSION['language']];
					 ?>					
				</li>
			</a>
			<a href="karte.php">
				<li>
					<?php
						$row = ORM::for_table('jezik')->where('naziv', 'karte')->find_one();
						if(!empty($_POST))	
							echo $row[$_POST['jezik']];
						else if(empty($_POST) && !isset($_SESSION['language']))
							echo $row['hrv'];
						else if(empty($_POST) && isset($_SESSION['language']))
							echo $row[$_SESSION['language']];
					 ?>		
				</li>
			</a>
			<a href="kontakti_usluge.php">
				<li>
					<?php
						$row = ORM::for_table('jezik')->where('naziv', 'kontaktiUsluge')->find_one();
						if(!empty($_POST))	
							echo $row[$_POST['jezik']];
						else if(empty($_POST) && !isset($_SESSION['language']))
							echo $row['hrv'];
						else if(empty($_POST) && isset($_SESSION['language']))
							echo $row[$_SESSION['language']];
					 ?>							
				</li>
			</a>
			<a href="novosti.php">
				<li>
					<?php
						$row = ORM::for_table('jezik')->where('naziv', 'novosti')->find_one();
						if(!empty($_POST))	
							echo $row[$_POST['jezik']];
						else if(empty($_POST) && !isset($_SESSION['language']))
							echo $row['hrv'];
						else if(empty($_POST) && isset($_SESSION['language']))
							echo $row[$_SESSION['language']];
					 ?>							
				</li>
			</a>
		</ul>
		<h1 class="naslovna">
			<?php
				$row = ORM::for_table('jezik')->where('naziv', 'dobrodošli')->find_one();
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];
			 ?>							
		</h1>
	<div class="info">
		<p>
			<strong>
				<?php
					$row = ORM::for_table('jezik')->where('naziv', 'adresa')->find_one();
					if(!empty($_POST))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];
				 ?>	 	
			</strong>
			&nbsp;
			<?php
				$row = ORM::for_table('jezik')->where('naziv', 'adresaVrijednost')->find_one();
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];
			 ?>
		</p>
		<p>
			<strong>
				<?php
					$row = ORM::for_table('jezik')->where('naziv', 'radnoVrijeme')->find_one();
					if(!empty($_POST))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];
				 ?>	 	
			</strong>
			&nbsp;
			<?php
				$row = ORM::for_table('jezik')->where('naziv', 'radnoVrijemeVrijednost')->find_one();
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];
			 ?>
		</p>
	</div>
	<div id="map"></div>
	<br>
	<div class="info">
		<h2>
			<?php
				$row = ORM::for_table('jezik')->where('naziv', 'oKolodvoru')->find_one();
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];
			 ?>		
		</h2>
		<p>
			<?php
				$row = ORM::for_table('jezik')->where('naziv', 'oKolodvoru1')->find_one();
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];
			 ?>				
		</p>
		<p>
			<?php
				$row = ORM::for_table('jezik')->where('naziv', 'oKolodvoru2')->find_one();
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];
			 ?>				
		</p>
		<br><br><br>
	</div>
		<script>
  			function initMap() {
  				var mapDiv = document.getElementById('map');
    			var map = new google.maps.Map(mapDiv, {
      				center: {lat: 45.5554962, lng: 18.695514},
     				zoom: 13
    			});
    			var marker = new google.maps.Marker({
    				position: {lat: 45.553341, lng: 18.679366},
    				map: map
  				});
  			}
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer>
		</script>
	</body>
</html>