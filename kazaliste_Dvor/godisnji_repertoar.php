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
			<form method="post" action="godisnji_repertoar.php" class="izborJezika" name="izborJezika"
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
		<div class="glavni2">
			<div class="pomocni2">
				<h1>
					<?php
						$query = "SELECT * FROM jezik WHERE naziv='hit1'";
						$result = mysqli_query($con, $query);
						$row = mysqli_fetch_array($result);
						if(!empty($_POST))	
							echo $row[$_POST['jezik']];
						else if(empty($_POST) && !isset($_SESSION['language']))
							echo $row['hrv'];
						else if(empty($_POST) && isset($_SESSION['language']))
							echo $row[$_SESSION['language']];
				 	?>									
				</h1>
				<br>
				<img src="mammaMiaSlika.jpg" alt="Mamma Mia slika">
				<br><br>				
				<p>
					<?php
						$query = "SELECT * FROM jezik WHERE naziv='hitRadnja1'";
						$result = mysqli_query($con, $query);
						$row = mysqli_fetch_array($result);
						if(!empty($_POST))	
							echo $row[$_POST['jezik']];
						else if(empty($_POST) && !isset($_SESSION['language']))
							echo $row['hrv'];
						else if(empty($_POST) && isset($_SESSION['language']))
							echo $row[$_SESSION['language']];
				 	?>									
				</p>
			</div>
			<div class="pomocni2">
				<h1>
					<?php
						$query = "SELECT * FROM jezik WHERE naziv='hit2'";
						$result = mysqli_query($con, $query);
						$row = mysqli_fetch_array($result);
						if(!empty($_POST))	
							echo $row[$_POST['jezik']];
						else if(empty($_POST) && !isset($_SESSION['language']))
							echo $row['hrv'];
						else if(empty($_POST) && isset($_SESSION['language']))
							echo $row[$_SESSION['language']];
				 	?>									
				</h1>
				<br>
				<img src="dobriVojnikŠvejkSlika.jpg" alt="Dobri vojnik Švejk slika">
				<br><br>				
				<p>
					<?php
						$query = "SELECT * FROM jezik WHERE naziv='hitRadnja2'";
						$result = mysqli_query($con, $query);
						$row = mysqli_fetch_array($result);
						if(!empty($_POST))	
							echo $row[$_POST['jezik']];
						else if(empty($_POST) && !isset($_SESSION['language']))
							echo $row['hrv'];
						else if(empty($_POST) && isset($_SESSION['language']))
							echo $row[$_SESSION['language']];
				 	?>									
				</p>				
			</div>
		</div>
	</body>
</html>