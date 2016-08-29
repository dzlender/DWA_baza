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
		<div class="pretraga">
				<?php
					$row = ORM::for_table('jezik')->where('naziv', 'polazak')->find_one();
					if(!empty($_POST))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];
				 ?>
				 <input type="text" name="polazak" class="inputLinije">
				 &nbsp;&nbsp;
				 <input type="text" name="dolazak" class="inputLinije">
				<?php
					$row = ORM::for_table('jezik')->where('naziv', 'dolazak')->find_one();
					if(!empty($_POST))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];
				 ?>	
				 <br><br>
				<?php
					$row = ORM::for_table('jezik')->where('naziv', 'datum')->find_one();
					if(!empty($_POST))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];
				 ?>
				 <input type="date" name="datum" class="inputLinije">
				 &nbsp;&nbsp;&nbsp;
				 <button type="button" name="pretraga" class="traziTipka" onClick="nadji()">
					<?php
						$row = ORM::for_table('jezik')->where('naziv', 'traži')->find_one();
						if(!empty($_POST)){
							$tekst=$row[$_POST['jezik']];	
							echo $tekst;
						}
						else if(empty($_POST) && !isset($_SESSION['language'])){
							$tekst=$row['hrv'];
							echo $tekst;
						}
						else if(empty($_POST) && isset($_SESSION['language'])){
							$tekst=$row[$_SESSION['language']];
							echo $tekst; 
						}
					 ?>	
				 </button>					 			
			<br><br><br>
			<?php
				echo "<table>
						<tr>
							<th>";
								$row = ORM::for_table('jezik')->where('naziv', 'polazak1')->find_one();
								if(!empty($_POST)){
									$tekst=$row[$_POST['jezik']];	
									echo $tekst;
								}
								else if(empty($_POST) && !isset($_SESSION['language'])){
									$tekst=$row['hrv'];
									echo $tekst;
								}
								else if(empty($_POST) && isset($_SESSION['language'])){
									$tekst=$row[$_SESSION['language']];
									echo $tekst; 
								}
				echo		"</th>
							<th>";
								$row = ORM::for_table('jezik')->where('naziv', 'dolazak1')->find_one();
								if(!empty($_POST)){
									$tekst=$row[$_POST['jezik']];	
									echo $tekst;
								}
								else if(empty($_POST) && !isset($_SESSION['language'])){
									$tekst=$row['hrv'];
									echo $tekst;
								}
								else if(empty($_POST) && isset($_SESSION['language'])){
									$tekst=$row[$_SESSION['language']];
									echo $tekst; 
								}
				echo		"</th>
							<th>";
								$row = ORM::for_table('jezik')->where('naziv', 'prijevoznik')->find_one();
								if(!empty($_POST)){
									$tekst=$row[$_POST['jezik']];	
									echo $tekst;
								}
								else if(empty($_POST) && !isset($_SESSION['language'])){
									$tekst=$row['hrv'];
									echo $tekst;
								}
								else if(empty($_POST) && isset($_SESSION['language'])){
									$tekst=$row[$_SESSION['language']];
									echo $tekst; 
								}
				echo		"</th>
						</tr>
						<tr id='prazanRed'></tr>";
				foreach(ORM::for_table('linije')->find_result_set() as $linija) {
   				 	echo "<tr>	<td>$linija->polazak</td>
   				 				<td>$linija->dolazak</td>
   				 				<td>$linija->prijevoznik</td>
   				 				<td id='cijene'><a href='#' onclick='brojReda(this.parentNode.parentNode)'>cijene</a></td>
   				 			</tr>";
				}
				echo "</table><br><br>";
			?>
		</div>
		<script>
			function nadji() {
				var polazak=document.getElementsByName("polazak")[0].value;
				var dolazak=document.getElementsByName("dolazak")[0].value;
				var linije=document.getElementsByTagName("tr");
				var celije;
				var tmp;	
	 			for (var i=2; i<linije.length; i++){
					celije = linije[i].getElementsByTagName("td");
					if(polazak=="" && dolazak==""){
						linije[i].style.display="";
					}
					else if(celije[0].innerHTML == polazak && dolazak==""){
						linije[i].style.display="";
					}
					else if(celije[1].innerHTML == dolazak && polazak==""){
						linije[i].style.display="";
					}
	 				else if(celije[0].innerHTML == polazak && celije[1].innerHTML == dolazak){
	 					linije[i].style.display="";
	 				}
	 				else{
	 					linije[i].style.display="none";
	 				}
	 			}
			}

			function brojReda(x) {
				var brLinije = x.rowIndex-1;
				localStorage.setItem("linija",brLinije); 
				window.location = "polasci_dolasci2.php?linija=" + brLinije;
			}
		</script>
	</body>
</html>