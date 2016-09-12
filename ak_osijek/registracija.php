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
			<form method="post" action="registracija.php" class="izborJezika" name="izborJezika"
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
		<br>
		<div class="rega">
			<form action="podaciReg.php" method="post">
				<?php
					$row = ORM::for_table('jezik')->where('naziv', 'ime')->find_one();
					if(!empty($_POST))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];
				 ?>
				 <input type="text" name="ime" class="inputLinije"><br><br>
				<?php
					$row = ORM::for_table('jezik')->where('naziv', 'prezime')->find_one();
					if(!empty($_POST))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];
				 ?>
				 <input type="text" name="prezime" class="inputLinije"><br><br>
				<?php
					$row = ORM::for_table('jezik')->where('naziv', 'mail')->find_one();
					if(!empty($_POST))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];
				 ?>
				 <input type="text" name="mail" class="inputLinije"><br><br>
				<?php
					$row = ORM::for_table('jezik')->where('naziv', 'račun')->find_one();
					if(!empty($_POST))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];
				 ?>
				 <input type="text" name="racun" class="inputLinije"><br><br>
			    <input type="submit" class="traziTipka"
			    	<?php 
						$row = ORM::for_table('jezik')->where('naziv', 'pošalji')->find_one();
						if(!empty($_POST['jezik'])){
							$tekst=$row[$_POST['jezik']];	
							echo "value='$tekst'";
						}
						else if(empty($_POST['jezik']) && !isset($_SESSION['language'])){
							$tekst=$row['hrv'];
							echo "value='$tekst'";
						}
						else if(empty($_POST['jezik']) && isset($_SESSION['language'])){
							$tekst=$row[$_SESSION['language']];
							echo "value='$tekst'"; 
						}
					 ?>
			    >
			    <br><br><br>
			</form>
		</div>
		<div class="pretraga">
			<p>
				<?php
					$row = ORM::for_table('jezik')->where('naziv', 'poruka1')->find_one();
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
					$row = ORM::for_table('jezik')->where('naziv', 'poruka2')->find_one();
					if(!empty($_POST))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];
				 ?>
			</p>
		</div>
	</body>
</html>