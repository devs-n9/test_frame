<?php

require 'configs/database.php';

/**
* 
*/
class DB
{
	
	private static  $instance = null;

	private $db;
	
	public static $_host;
	public static $_username;
	public static $_password;
	public static $_dbname;

	private function __construct() {
		$this->db = new mysqli(
			self::$_host, 
			self::$_username,
			self::$_password,
			self::$_dbname
		);
	}

	public static function getInstance()
	{
		if(is_null(self::$instance)){
			self::$instance = new self();
		}

		return self::$instance;

	}

	public function getTest()
	{
		// return "test";
	}

	public function query($sql)
	{
		$data = [];
		$result = $this->db->query($sql);
		
		while ($row = $result->fetch_assoc()) {
        	$data[] = $row;
    	}

    	return $data;
	}

	public function initconnection($config)
	{
		$this->dbconfig = $config;
	}

	private function __clone(){}
}

DB::$_host = $dbconfig['host'];
DB::$_username = $dbconfig['username'];
DB::$_password = $dbconfig['password'];
DB::$_dbname = $dbconfig['db'];