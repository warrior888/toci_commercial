<?php

	abstract class DbHandle
	{
		public abstract function Connect();
		
		private $float = 8.8;
		
		protected function __construct()
		{
			$this->Connect();
		}
	}
	
	class MySqlHandle extends DbHandle
	{
		public function Connect()
		{
			mysqli_connect();
		}
		
		public function __construct()
		{
			parent::__construct();
		}
	}
	
	class PgHandle extends DbHandle
	{
		protected $connectionString = 'host';
		protected $handle;
		private $int = 8;
		
		public function __construct()
		{
			parent::__construct();
		}
		
		public function Connect()
		{
			//$this->connectionString = $string;
			$this->handle = pg_connect('host=127.0.0.1 user=postgres password=beatka dbname=con_air');
		}
		
		public function Select($query)
		{
			
		}
		
		public function __destruct()
		{
			var_dump('destruction');
			var_dump(pg_close($this->handle));
		}
	}
	
	$obiekt = new PgHandle();
	$obiekt2 = new MySqlHandle();
	
	$obiekt->Connect('dupa');
	$obiekt2->Connect('cyce');