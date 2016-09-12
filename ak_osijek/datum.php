<?php 
	require_once 'idiorm.php';
	ORM::configure('mysql:host=localhost; dbname=kolodvor; charset=utf8');
	ORM::configure('username', 'root');
	ORM::configure('password', 'konjina1234');

	$row = ORM::for_table('vremena_linija')->where('idLinije', '1')->find_one();

	if ($_POST['datum'] <= $row['zadnjiDatum'])
		echo "1";
	else
		echo "0";
		
 ?>