<!DOCTYPE html>
<html>
	<head>
		<?php 
			require_once 'idiorm.php';
			ORM::configure('mysql:host=localhost; dbname=kolodvor; charset=utf8');
			ORM::configure('username', 'root');
			ORM::configure('password', 'konjina1234');
		 ?>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="kolodvorLogin.css">
		<header>
			<form method="post" action="login.php" class="izborJezika" name="izborJezika"
					onClick="document.forms.izborJezika.submit();"> 
				<?php
					session_start(); 
					if(empty($_POST['jezik']) && !isset($_SESSION['language']))
						echo '<input type="radio" name="jezik" value="hrv" checked> hrv &nbsp;&nbsp;&nbsp;
								<input type="radio" name="jezik" value="eng"> eng';
					else if(empty($_POST['jezik']) && $_SESSION['language']=='hrv')
						echo '<input type="radio" name="jezik" value="hrv" checked> hrv &nbsp;&nbsp;&nbsp;
								<input type="radio" name="jezik" value="eng"> eng';
					else if(empty($_POST['jezik']) && $_SESSION['language']=='eng')
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
		<title>
			<?php
				$row = ORM::for_table('jezik')->where('naziv', 'naslov')->find_one();
				if(!empty($_POST['jezik']))	
					echo $row[$_POST['jezik']];
				else if(empty($_POST['jezik']) && !isset($_SESSION['language']))
					echo $row['hrv'];
				else if(empty($_POST['jezik']) && isset($_SESSION['language']))
					echo $row[$_SESSION['language']];
			 ?>
		</title>
	</head>
	<body>
		<div class="lijevi">
			<div class="logoMoto">
				<img src="kolodvorOsijek.jpg" alt="Slika kolodvora"><br><br>
				<p id="moto">
					<?php
						$row = ORM::for_table('jezik')->where('naziv', 'naslov')->find_one();
						if(!empty($_POST['jezik']))	
							echo $row[$_POST['jezik']];
						else if(empty($_POST['jezik']) && !isset($_SESSION['language']))
							echo $row['hrv'];
						else if(empty($_POST['jezik']) && isset($_SESSION['language']))
							echo $row[$_SESSION['language']];
					 ?>					
				</p>
			</div>
		</div>
		<div class="desni">
			<form action="login.php" method="POST" name="loginForma" class="loginForma">
				<?php
					$row = ORM::for_table('jezik')->where('naziv', 'korisničkoIme')->find_one();
					if(!empty($_POST['jezik']))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST['jezik']) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST['jezik']) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];
				 ?>				
				<br>	
				<input type="text" name="username" class="inputUlaz"><br><br><br><br><br>
				<?php
					$row = ORM::for_table('jezik')->where('naziv', 'lozinka')->find_one();
					if(!empty($_POST['jezik']))	
						echo $row[$_POST['jezik']];
					else if(empty($_POST['jezik']) && !isset($_SESSION['language']))
						echo $row['hrv'];
					else if(empty($_POST['jezik']) && isset($_SESSION['language']))
						echo $row[$_SESSION['language']];
				 ?>					
				<br>
				<input type="password" name="password" class="inputUlaz"><br><br><br>
				<input type="submit" name="unosKorinsika" class="korisnikUlaz" 
					<?php
						$row = ORM::for_table('jezik')->where('naziv', 'ulaz')->find_one();
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
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php
					if (!empty($_POST['username']) && !empty($_POST['password'])) {

					    foreach(ORM::for_table('korisnici')->find_result_set() as $korisnik) {

		   					if (($_POST['username'] == $korisnik->korisnik) 
		   								&& (md5($_POST['password']) == $korisnik->lozinka)){

						        setcookie('username', $_POST['username'], time()+60*60*24);
						        setcookie('password', md5($_POST['password']), time()+60*60*24);    
					 
					        	header('Location: naslovna.php');
					        
						    } 
						}

						
						$row = ORM::for_table('jezik')->where('naziv', 'netočniPodaci')->find_one();
						if(!empty($_POST['jezik']))	
							echo $row[$_POST['jezik']];
						else if(empty($_POST['jezik']) && !isset($_SESSION['language']))
							echo $row['hrv'];
						else if(empty($_POST['jezik']) && isset($_SESSION['language']))
							echo $row[$_SESSION['language']];
															
					    
					} 
					else if (isset($_POST['username']) && isset($_POST['password'])){
						
						$row = ORM::for_table('jezik')->where('naziv', 'prazniPodaci')->find_one();
						if(!empty($_POST['jezik']))	
							echo $row[$_POST['jezik']];
						else if(empty($_POST['jezik']) && !isset($_SESSION['language']))
							echo $row['hrv'];
						else if(empty($_POST['jezik']) && isset($_SESSION['language']))
							echo $row[$_SESSION['language']];
										
					}
				?>
			</form><br>
			<form action="naslovna.php" class="gostForma">
			    <input type="submit" class="korisnikUlaz" onClick="cookieZaGosta('username', 'gost', 1)"
					<?php
						$row = ORM::for_table('jezik')->where('naziv', 'ulazGost')->find_one();
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
			</form>
		</div>
	<script>
		function cookieZaGosta(cname, cvalue, exdays) {
		    var d = new Date();
		    d.setTime(d.getTime() + (exdays*24*60*60*1000));
		    var expires = "expires="+ d.toUTCString();
		    document.cookie = cname + "=" + cvalue + "; " + expires;
		}
	</script>
	</body>
</html>