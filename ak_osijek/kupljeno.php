<?php 
	require_once 'idiorm.php';
	ORM::configure('mysql:host=localhost; dbname=kolodvor; charset=utf8');
	ORM::configure('username', 'root');
	ORM::configure('password', 'konjina1234');


		$rowCijene = ORM::for_table('cijene_linija')->where('idLinije', $_POST['linija'])->find_one();
		$rowLinija = ORM::for_table('linije')->where('id', $_POST['linija'])->find_one();

		$count = 0;
		$test = true;

		foreach(ORM::for_table('kupljeno')->find_result_set() as $kupljeno){
			if($kupljeno->korisnik==$_COOKIE['username'])
				$count++;
		}

		if($count == 4) $test = false;

		if($test){
			$stvori = ORM::for_table('kupljeno')->create();
			$stvori->korisnik = $_COOKIE['username'];
			$stvori->linija = $_POST['linija'];
			$stvori->kategorija = $_POST['karta'];
			$stvori->vrijeme = $_POST['vrijemePolaska'];
			$stvori->save();

			echo "Kupili ste kartu za liniju ".$rowLinija['polazak']." - ".$rowLinija['dolazak']."\n";
			echo "prijevoznik: ". $rowLinija['prijevoznik']."\n";
			echo "kategorija: ".$_POST['karta']."\n";
			echo "cijena: ".$rowCijene[$_POST['karta']]." kn\n";
			echo "vrijeme polaska: ".$_POST['vrijemePolaska'];
		}
		else{
			echo "Maksimalan broj rezervacija je 4 karte, a vi već imate 4 rezervirane!";
		}
		
 ?>