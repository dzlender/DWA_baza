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
			<form method="post" action="polasci_dolasci2.php?linija=<?php echo $_GET['linija']; ?>" class="izborJezika" name="izborJezika"
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
		<br>
			<?php 
				$linijaBroj = $_GET['linija'];
				$linija = ORM::for_table('linije')->where('id', $linijaBroj)->find_one();
			 ?>
		<div class="pretraga">
			<?php
				echo $linija['polazak']." - ".$linija['dolazak'].", ".$linija['prijevoznik']."<br><br><br>";

				$cijeneRed = ORM::for_table('cijene_linija')->where('idLinije', $linijaBroj)->find_one();

				echo "<table id='polazak_dolazak'><tr>
   				 				<th>";
									$row = ORM::for_table('jezik')->where('naziv', 'polazak1')->find_one();
									if(!empty($_POST))	
										echo $row[$_POST['jezik']];
									else if(empty($_POST) && !isset($_SESSION['language']))
										echo $row['hrv'];
									else if(empty($_POST) && isset($_SESSION['language']))
										echo $row[$_SESSION['language']];	
   				 echo			"</th> 
   				 				<th>";
									$row = ORM::for_table('jezik')->where('naziv', 'dolazak1')->find_one();
									if(!empty($_POST))	
										echo $row[$_POST['jezik']];
									else if(empty($_POST) && !isset($_SESSION['language']))
										echo $row['hrv'];
									else if(empty($_POST) && isset($_SESSION['language']))
										echo $row[$_SESSION['language']];
   				 echo			"</th>
   				 			</tr>";
				foreach(ORM::for_table('vremena_linija')->find_result_set() as $linija) {
   				 	if($linija->idLinije == $cijeneRed->idLinije)
   				 	echo "<tr>
   				 				<td>$linija->vrijemePolaska</td> 
   				 				<td>$linija->vrijemeDolaska</td>
   				 				<td><input type='radio' name='season' value='spring'></td>
   				 			</tr>";
				}
				echo "</table><br><br>";

				echo 
				"<table>
					<tr name='cijena'>
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
							<a id='cijene' href='#' onclick='imeReda(this.parentNode.parentNode)'>Kupi</a>
						</td>
					</tr>
					<tr name='povratna'>
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
							<a id='cijene' href='#' onclick='imeReda(this.parentNode.parentNode)'>Kupi</a>
						</td>
					</tr>
					<tr name='djaci_studenti'>
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
							<a id='cijene' href='#' onclick='imeReda(this.parentNode.parentNode)'>Kupi</a>
						</td>
					</tr>
					<tr name='umirovljenici'>
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
							<a id='cijene' href='#' onclick='imeReda(this.parentNode.parentNode)'>Kupi</a>
						</td>
					</tr>
					<tr name='branitelji'>
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
							<a id='cijene' href='#' onclick='imeReda(this.parentNode.parentNode)'>Kupi</a>
						</td>
					</tr>
					<tr name='nezaposleni'>
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
							<a id='cijene' href='#' onclick='imeReda(this.parentNode.parentNode)'>Kupi</a>
						</td>
					</tr>
					<tr name='novinari'>
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
							<a id='cijene' href='#' onclick='imeReda(this.parentNode.parentNode)'>Kupi</a>
						</td>
					</tr>
					<tr name='djeca_5_do_10'>
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
							<a id='cijene' href='#' onclick='imeReda(this.parentNode.parentNode)'>Kupi</a>
						</td>
					</tr>
					<tr name='djeca_do_4'>
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
							<a id='cijene' href='#' onclick='imeReda(this.parentNode.parentNode)'>Kupi</a>
						</td>
					</tr>";
				echo "</table>";
			?>
		</div>
		<script>
			function imeReda(x) {
				var karta = x.getAttribute("name"); 
				alert("Kupili ste kartu za kategoriju:\n" + karta);
			}
		</script>	
	</body>
</html>