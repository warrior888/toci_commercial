<?php

	abstract class DbHandle 
	{
		protected $handle; 
		public abstract function Insert($insert, $connectionString);
		public abstract function Update($update, $connectionString);
		
		public function __construct()
		{
			//pg_connect('host=127.0.0.1 user=postgres password=beatka dbname=con_air');
		}
	}
	
	class PgHandle extends DbHandle
	{
		public function Insert($insert, $connectionString)
		{
			//strtolower($str)
			if (stristr($insert, 'insert')) // INSERT
			{
				$handle = pg_connect($connectionString);
				$result = pg_query($handle, $insert);
			}
		}
		
		public function Update($update, $connectionString)
		{
			if (stristr($update, 'update'))
			{
				$handle = pg_connect($connectionString);
				$result = pg_query($handle, $update);
			}
		}
	}
	
	$pgHandle = new PgHandle();
	
	$pgHandle->Insert('INSERT into bees(name, surname, telephone) values (\'bartek\', \'zapart\', \'664825878\');', 'host=127.0.0.1 user=postgres password=beatka dbname=con_air');
//	/$pgHandle->Insert();