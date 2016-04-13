<!DOCTYPE html>
<html>
	<head>
		<?php
			$con = mysqli_connect("localhost", "root", "root", "kazaliste") 
					or die("Neuspjesno spajanje na server");
			$con->set_charset('utf8');
		 ?>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="mojstil.css">
		<header>
			<img src="zavjesa.jpg" alt="zavjesa" id="header">
			<form method="post" action="predstave.php" class="izborJezika" name="izborJezika"
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
		</header>
		<title name="title">
			<?php
				$query = "SELECT * FROM jezik WHERE naziv='naslov'";
				$result = mysqli_query($con, $query);
				$row = mysqli_fetch_array($result);
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
						$query = "SELECT * FROM jezik WHERE naziv='naslovna'";
						$result = mysqli_query($con, $query);
						$row = mysqli_fetch_array($result);
						if(!empty($_POST))	
							echo $row[$_POST['jezik']];
						else if(empty($_POST) && !isset($_SESSION['language']))
							echo $row['hrv'];
						else if(empty($_POST) && isset($_SESSION['language']))
							echo $row[$_SESSION['language']];
				 	?>				
				</li>
			</a>
			<a href="prodaja_ulaznica.php">
				<li>
					<?php
						$query = "SELECT * FROM jezik WHERE naziv='prodajaUlaznica'";
						$result = mysqli_query($con, $query);
						$row = mysqli_fetch_array($result);
						if(!empty($_POST))	
							echo $row[$_POST['jezik']];
						else if(empty($_POST) && !isset($_SESSION['language']))
							echo $row['hrv'];
						else if(empty($_POST) && isset($_SESSION['language']))
							echo $row[$_SESSION['language']];
				 	?>					
				</li>
			</a>
			<a href="predstave.php">
				<li>
					<?php
						$query = "SELECT * FROM jezik WHERE naziv='predstave'";
						$result = mysqli_query($con, $query);
						$row = mysqli_fetch_array($result);
						if(!empty($_POST))	
							echo $row[$_POST['jezik']];
						else if(empty($_POST) && !isset($_SESSION['language']))
							echo $row['hrv'];
						else if(empty($_POST) && isset($_SESSION['language']))
							echo $row[$_SESSION['language']];
				 	?>		
				</li>
			</a>
			<a href="godisnji_repertoar.php">
				<li>
					<?php
						$query = "SELECT * FROM jezik WHERE naziv='godišnjiRepertoar'";
						$result = mysqli_query($con, $query);
						$row = mysqli_fetch_array($result);
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
						$query = "SELECT * FROM jezik WHERE naziv='novosti'";
						$result = mysqli_query($con, $query);
						$row = mysqli_fetch_array($result);
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
	<div class="datum">
		<div id="datum1">
			<?php
				$query = "SELECT * FROM jezik WHERE naziv='datum1'";
				$result = mysqli_query($con, $query);
				$row = mysqli_fetch_array($result);
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];		 
			?>			
		</div>
		<hr>		
		<div id="datum2">
			<?php
				$query = "SELECT * FROM jezik WHERE naziv='datum2'";
				$result = mysqli_query($con, $query);
				$row = mysqli_fetch_array($result);
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];		 
			?>						
		</div>
		<hr>
		<div id="datum3">
			<?php
				$query = "SELECT * FROM jezik WHERE naziv='datum3'";
				$result = mysqli_query($con, $query);
				$row = mysqli_fetch_array($result);
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];		 
			?>						
		</div>
		<hr>
		<div id="datum4">
			<?php
				$query = "SELECT * FROM jezik WHERE naziv='datum4'";
				$result = mysqli_query($con, $query);
				$row = mysqli_fetch_array($result);
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];		 
			?>						
		</div>
		<hr>
		<div id="datum5">
			<?php
				$query = "SELECT * FROM jezik WHERE naziv='datum5'";
				$result = mysqli_query($con, $query);
				$row = mysqli_fetch_array($result);
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];		 
			?>						
		</div>
		<hr>
	</div>
	<div class="predstava">
		<div id="predstava1">
			<a href="koZivKoMrtav.php" class="linkoviPredstava">
				<?php
					$query = "SELECT * FROM jezik WHERE naziv='predstava1'";
					$result = mysqli_query($con, $query);
					$row = mysqli_fetch_array($result);
					if(!empty($_POST))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];		 
				?>
			</a>
		</div>
		<hr>
		<div id="predstava2">
			<a href="spektakluk.php" class="linkoviPredstava">
				<?php
					$query = "SELECT * FROM jezik WHERE naziv='predstava2'";
					$result = mysqli_query($con, $query);
					$row = mysqli_fetch_array($result);
					if(!empty($_POST))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];		 
				?>	
			</a>						
		</div>
		<hr>
		<div id="predstava3">
			<a href="policija.php" class="linkoviPredstava">
				<?php
					$query = "SELECT * FROM jezik WHERE naziv='predstava3'";
					$result = mysqli_query($con, $query);
					$row = mysqli_fetch_array($result);
					if(!empty($_POST))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];		 
				?>
			</a>							
		</div>
		<hr>
		<div id="predstava4">
			<a href="neIgrajNaEngleze.php" class="linkoviPredstava">
				<?php
					$query = "SELECT * FROM jezik WHERE naziv='predstava4'";
					$result = mysqli_query($con, $query);
					$row = mysqli_fetch_array($result);
					if(!empty($_POST))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];		 
				?>
			</a>							
		</div>
		<hr>
		<div id="predstava5">
			<a href="politickoVjencanje.php" class="linkoviPredstava">
				<?php
					$query = "SELECT * FROM jezik WHERE naziv='predstava5'";
					$result = mysqli_query($con, $query);
					$row = mysqli_fetch_array($result);
					if(!empty($_POST))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];		 
				?>
			</a>							
		</div>
		<hr>
	</div>
	<div class="cijena">
		<div id="cijena1">
			<?php
				$query = "SELECT * FROM jezik WHERE naziv='cijena1'";
				$result = mysqli_query($con, $query);
				$row = mysqli_fetch_array($result);
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];		 
			?>							
		</div>
		<hr>
		<div id="cijena2">
			<?php
				$query = "SELECT * FROM jezik WHERE naziv='cijena2'";
				$result = mysqli_query($con, $query);
				$row = mysqli_fetch_array($result);
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];		 
			?>							
		</div>
		<hr>
		<div id="cijena3">
			<?php
				$query = "SELECT * FROM jezik WHERE naziv='cijena3'";
				$result = mysqli_query($con, $query);
				$row = mysqli_fetch_array($result);
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];		 
			?>							
		</div>
		<hr>
		<div id="cijena4">
			<?php
				$query = "SELECT * FROM jezik WHERE naziv='cijena4'";
				$result = mysqli_query($con, $query);
				$row = mysqli_fetch_array($result);
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];		 
			?>							
		</div>
		<hr>
		<div id="cijena5">
			<?php
				$query = "SELECT * FROM jezik WHERE naziv='cijena5'";
				$result = mysqli_query($con, $query);
				$row = mysqli_fetch_array($result);
				if(!empty($_POST))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];		 
			?>							
		</div>
		<hr>
	</div>
	</body>
</html>