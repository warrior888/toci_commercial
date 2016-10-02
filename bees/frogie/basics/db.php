<?php

	class DbHandle
	{
		public function Select($table, array $columns, array $where)
		{
			$query = 'select ' . implode(', ', $columns) . ' from ' . $table . ' where ' . $this->CreateWhere($where) . ';';
			
			$result = pg_query($this->DbConnect(), $query);
			
			return pg_fetch_array($result);
		}
		
		protected function DbConnect()
		{
			return pg_connect('host=127.0.0.1 user=postgres dbname=eena password=beatka');
		}
		
		protected function CreateWhere(array $where)
		{
			$whereTable = array();
			foreach ($where as $value)
			{
				$whereTable[] = $value->column . $value->qualifier . ' \'' .$value->value . '\' ';
			}
			
			return implode(' and ', $whereTable);
		}
	}
	
	class DbWhere
	{
		public $column;
		public $value;
		public $qualifier;
	}
	
	$handle = new DbHandle();
	
	$dbWhereNazwisko = new DbWhere();
	
	$dbWhereNazwisko->column = 'nazwisko';
	$dbWhereNazwisko->value = 'Zapart';
	$dbWhereNazwisko->qualifier = ' = ';
	
	$dbWhereImie = new DbWhere();
	
	$dbWhereImie->column = 'imie';
	$dbWhereImie->value = 'Bart%';
	$dbWhereImie->qualifier = ' like ';
	
	
	var_dump($handle->Select('dane_osobowe', array('imie', 'nazwisko', 'data_urodzenia', 'ulica', 'kod', 'ilosc_tyg'), array($dbWhereNazwisko, $dbWhereImie)));