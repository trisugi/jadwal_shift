<?php
$v = isset($_GET['v']) ? $_GET['v'] : '';
include('classes/class-database.php');

switch($v) {
	case 'pola' : 
			include('classes/class-pola.php'); 
			include('views/v_pola.php'); break;
	case 'jadwal' : 
			include('classes/class-jadwal.php'); 
			include('views/v_jadwal.php'); break;
}
?>

