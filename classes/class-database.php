<?php
class database {

	private $dbHost;
	private $dbUser;
	private $dbPass;
	private $dbName;

	function __construct()
	{
		$this->dbHost = 'localhost';
		$this->dbUser = 'root';
		$this->dbPass = 'root';
		$this->dbName = 'jadwal-shift';
	}
	
	function connectMySQL()
	{
		$link = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName) or die( mysqli_connect_error($link) );
		
		return $link;
	}
	
}
