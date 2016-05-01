<!DOCTYPE html>
<html>
	<head>
		<?php 
			require_once 'idiorm.php';
			ORM::configure('mysql:host=localhost; dbname=fantastic_beasts; charset=utf8');
			ORM::configure('username', 'root');
			ORM::configure('password', 'konjina1234');
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
				foreach(ORM::for_table('proizvodi')->find_result_set() as $proizvod) {
   				 	echo "<tr>	<td>$proizvod->nazivProizvoda</td>
   				 				<td>$proizvod->tipZivotinje</td>
   				 				<td>$proizvod->tipProizvoda</td>
   				 				<td>$proizvod->cijenaProizvoda</td>
   				 				<td>$proizvod->opisProizvoda</td>
   				 			</tr>";
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