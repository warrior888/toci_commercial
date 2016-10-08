<?php
	abstract class DbHandle
	{
		protected  $dbHost;
		protected  $dbUser;
		protected  $dbPass;
		protected  $dbName;
		
		public abstract function Connect();
	
		//private $float = 8.8;
	
		protected function __construct($host,$user,$pass,$db)
		{
			$this->dbHost = $host;
			$this->dbUser = $user;
			$this->dbPass = $pass;
			$this->dbName = $db;
			
			$this->Connect();
		}
	}
?>