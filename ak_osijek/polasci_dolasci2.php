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
			<form method="post" action="polasci_dolasci.php" class="izborJezika" name="izborJezika"
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
		<br><br><br><br>
		<div class="pretraga">
			<?php
				$linijaBroj = $_GET['linija'];
				$cijeneRed = ORM::for_table('cijene_linija')->where('idLinije', $linijaBroj)->find_one();
				echo 
				"<table>
					<tr>
						<td>";
							$row = ORM::for_table('jezik')->where('naziv', 'redovnaKarta')->find_one();
							if(!empty($_POST))	
								echo $row[$_POST['jezik']];
							else if(empty($_POST) && !isset($_SESSION['language']))
								echo $row['hrv'];
							else if(empty($_POST) && isset($_SESSION['language']))
								echo $row[$_SESSION['language']];							
				echo	"</td>
						<td>";
							echo $cijeneRed['cijena']." kn";
				echo	"</td>	
						<td>
							<a id='cijene' href='#''>Kupi</a>
						</td>
					</tr>
					<tr>
						<td>";
							$row = ORM::for_table('jezik')->where('naziv', 'povratnaKarta')->find_one();
							if(!empty($_POST))	
								echo $row[$_POST['jezik']];
							else if(empty($_POST) && !isset($_SESSION['language']))
								echo $row['hrv'];
							else if(empty($_POST) && isset($_SESSION['language']))
								echo $row[$_SESSION['language']];
				echo	"</td>
						<td>";
							echo $cijeneRed['povratna']." kn";
				echo	"</td>
						<td>
							<a id='cijene' href='#''>Kupi</a>
						</td>
					</tr>
					<tr>
						<td>";
							$row = ORM::for_table('jezik')->where('naziv', 'djaciStudenti')->find_one();
							if(!empty($_POST))	
								echo $row[$_POST['jezik']];
							else if(empty($_POST) && !isset($_SESSION['language']))
								echo $row['hrv'];
							else if(empty($_POST) && isset($_SESSION['language']))
								echo $row[$_SESSION['language']];
				echo	"</td>
						<td>";
							echo $cijeneRed['djaci_studenti']." kn";
				echo	"</td>
						<td>
							<a id='cijene' href='#''>Kupi</a>
						</td>
					</tr>
					<tr>
						<td>";
							$row = ORM::for_table('jezik')->where('naziv', 'umirovljenici')->find_one();
							if(!empty($_POST))	
								echo $row[$_POST['jezik']];
							else if(empty($_POST) && !isset($_SESSION['language']))
								echo $row['hrv'];
							else if(empty($_POST) && isset($_SESSION['language']))
								echo $row[$_SESSION['language']];
				echo	"</td>
						<td>";
							echo $cijeneRed['umirovljenici']." kn";
				echo	"</td>
						<td>
							<a id='cijene' href='#''>Kupi</a>
						</td>
					</tr>
					<tr>
						<td>";
							$row = ORM::for_table('jezik')->where('naziv', 'branitelji')->find_one();
							if(!empty($_POST))	
								echo $row[$_POST['jezik']];
							else if(empty($_POST) && !isset($_SESSION['language']))
								echo $row['hrv'];
							else if(empty($_POST) && isset($_SESSION['language']))
								echo $row[$_SESSION['language']];
				echo	"</td>
						<td>";
							echo $cijeneRed['branitelji']." kn";
				echo	"</td>
						<td>
							<a id='cijene' href='#''>Kupi</a>
						</td>
					</tr>
					<tr>
						<td>";
							$row = ORM::for_table('jezik')->where('naziv', 'nezaposleni')->find_one();
							if(!empty($_POST))	
								echo $row[$_POST['jezik']];
							else if(empty($_POST) && !isset($_SESSION['language']))
								echo $row['hrv'];
							else if(empty($_POST) && isset($_SESSION['language']))
								echo $row[$_SESSION['language']];
				echo	"</td>
						<td>";
							echo $cijeneRed['nezaposleni']." kn";
				echo	"</td>
						<td>
							<a id='cijene' href='#''>Kupi</a>
						</td>
					</tr>
					<tr>
						<td>";
							$row = ORM::for_table('jezik')->where('naziv', 'novinari')->find_one();
							if(!empty($_POST))	
								echo $row[$_POST['jezik']];
							else if(empty($_POST) && !isset($_SESSION['language']))
								echo $row['hrv'];
							else if(empty($_POST) && isset($_SESSION['language']))
								echo $row[$_SESSION['language']];
				echo	"</td>
						<td>";
							echo $cijeneRed['novinari']." kn";
				echo	"</td>
						<td>
							<a id='cijene' href='#''>Kupi</a>
						</td>
					</tr>
					<tr>
						<td>";
							$row = ORM::for_table('jezik')->where('naziv', 'djeca5_10')->find_one();
							if(!empty($_POST))	
								echo $row[$_POST['jezik']];
							else if(empty($_POST) && !isset($_SESSION['language']))
								echo $row['hrv'];
							else if(empty($_POST) && isset($_SESSION['language']))
								echo $row[$_SESSION['language']];
				echo	"</td>
						<td>";
							echo $cijeneRed['djeca_5_do_10']." kn";
				echo	"</td>
						<td>
							<a id='cijene' href='#''>Kupi</a>
						</td>
					</tr>
					<tr>
						<td>";
							$row = ORM::for_table('jezik')->where('naziv', 'djecaDo4')->find_one();
							if(!empty($_POST))	
								echo $row[$_POST['jezik']];
							else if(empty($_POST) && !isset($_SESSION['language']))
								echo $row['hrv'];
							else if(empty($_POST) && isset($_SESSION['language']))
								echo $row[$_SESSION['language']];
				echo	"</td>
						<td>";
							echo $cijeneRed['djeca_do_4']." kn";
				echo	"</td>
						<td>
							<a id='cijene' href='#''>Kupi</a>
						</td>
					</tr>";
				echo "</table>";
			?>
		</div>
	</body>
</html>