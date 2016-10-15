<?php

	
	class DbSelect
	{
		public function Select($table, array $asterisk, array $where)
		{
			//$asterisk = array('name', 'surname'); // implode
			//$where = array(array('name', 'like', 'dupa'), array('surname'));
			//'select name, surname from whatever where name like \'dupa\' 
			//and surname = \'zapi\'';
		}
	}
	
	class DbUpdate extends DbWhere
	{
		
	}
	
	class Where
	{
		public $name;
	}
	
	class DbWhere
	{
		public function Where(array $where) // select update delete
		{
			
		}
	}