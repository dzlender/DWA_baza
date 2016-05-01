<!DOCTYPE html>
<html>
	<head>
		<?php 
			$con = mysqli_connect("localhost", "root", "root", "fantastic_beasts") 
				or die("Neuspjesno spajanje na server");
			$con->set_charset('utf8');
		 ?>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Fantastic beasts j.d.o.o.</title>
	</head>
	<body>
		<div class="lijevi">
			<div class="logoMoto">
				<img src="fantBeastsLogo.png" alt="Fantastic beasts logo"><br><br>
				<p id="moto">Canis meus id comedit.</p>
			</div>
		</div>
		<div class="desni">
			<?php
				$username=$_GET["username"];
				$password=$_GET["password"];
				echo "<span class='user'>Lozinka: "."$password</span>";
				echo "<span class='user'>Korisnik: "."$username".", </span><br><br>";
				echo "<table>";
				$query = "SELECT * FROM proizvodi";
				$result = mysqli_query($con, $query);
				while ($row = mysqli_fetch_array($result)){
					printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s kn</td><td>%s</td></tr>", 
										$row[1], $row[2], $row[3] ,$row[4] ,$row[5]);
				}
				echo "</table><br><br>";
			?>
			<div class="pretraga">
				<input type="text" name="trazi" class="inputUlaz">
				<button type="button" id="traziTipka" onClick="nadji()">Traži</button>		
			</div>
		</div>
		<script>
			function nadji() {
				var podstring=document.getElementsByName("trazi")[0].value;
				var proizvodi=document.getElementsByTagName("tr");
				var polje=[];
				var proizvod;		
	 			for (var i=0; i<proizvodi.length; i++){
					polje[i]=proizvodi[i];
					proizvod=polje[i].innerHTML;	
	 				if(proizvod.indexOf(podstring) == -1){
	 					proizvodi[i].style.display="none";
	 				}
	 				else{
	 					proizvodi[i].style.display="";
	 				}
	 			}
			}
		</script>

	</body>
</html>