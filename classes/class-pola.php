<?php
// include('../classes/class-database.php');

class pola extends database {
	var $konek;
	var $data;
	
	function __construct()
	{
		parent::__construct();
		
		$this->data = array();
		$this->konek = $this->connectMySQL();
	}
	
	function index()
	{
		$isi['breadcrumb'] = 'Pengaturan Pola Shift';
		$isi['data'] = $this->get_data();
		
		return $isi;
	}
	
	function get_data()
	{
		$query = "select * from pola";
		$result = mysqli_query($this->konek, $query) or die(mysqli_error($this->konek));

		while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
			$this->data[] = array ( 
					'masa_berlaku' => $row['masa_berlaku'], 
					'hari1' => $this->baca_pola($row['hari1']),
					'hari2' => $this->baca_pola($row['hari2']),
					'hari3' => $this->baca_pola($row['hari3']),
					'hari4' => $this->baca_pola($row['hari4']),
					'hari5' => $this->baca_pola($row['hari5']),
					'hari6' => $this->baca_pola($row['hari6'])
			);
		}

		return $this->data;
	}
	
	function baca_pola($hari)
	{
		switch ($hari) {
			case 1 : return 'Pagi'; break;
			case 2 : return 'Siang'; break;
			case 3 : return 'Malam'; break;
			default: return 'Pagi';
		}
	}
	
	function insert_pola()
	{
	}
	
	function update_pola()
	{
	}
}
?>
