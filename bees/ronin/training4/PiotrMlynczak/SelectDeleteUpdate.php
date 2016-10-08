<?php

abstract class DbHandle 
	{
		public abstract function Connect(); // abstrakcja metoda connect 
		
		private $float = 8.8; // prywatne pole które można zdefiniować w klasie abstrakcyjnej i ten float będzie niewidoczny w klasach dziedziczących
							  // MySqlHandle i PgHandle ale tego flota można użyć w klasie abstrakcyjnej do czegoś 
		
		protected function __construct()
		{
			$this->Connect();
		}
	}
	
	class PgHandle extends DbHandle // 1: - PgHandle - klasa komunikacji z bazą danch przy pomocy Postresql
									// DbHandle - extends tzn. podziedziczona klasa abstrakcyjna DbHandle do klasy PgHandle
	{		
		protected $handle;
		private $int = 8;
		
		public function __construct()
		{
			parent::__construct(); // wywoałanie jawne konstrukta które musi być w PHP
		}
		
		public function Connect()
		{
		
			$this->handle = pg_connect('host=127.0.0.1 user=postgres password=telefon87 dbname=piotr');
		}
		
		
		// METODA SELECT 
		
		public function Select($query)
		{
			 $result = pg_query($this->handle, $query);
			 return $result;
		}
		
		
		//METODA UPDATE
		
		public function Update($kraj, $stolica)
		{
			$query="UPDATE dane SET kraj='$kraj' WHERE stolica='$stolica'";    		
			$result = pg_query($this->handle, $query);			
		}		
		
		//METODA DELETE
		
		public function Delete($kraj)
		{
			$query="DELETE FROM dane WHERE kraj='$kraj'";    		
			$result = pg_query($this->handle, $query);			
		}
		
		
		public function __destruct()
		{
			//var_dump('destruction');
		//	var_dump(pg_close($this->handle));
		}
	}
	
	$obiekt = new PgHandle(); 
	$obiekt->Connect();
	
	
	$foo = $obiekt->Select("SELECT * FROM dane");
	
	while ($row = pg_fetch_row($foo)) {
		echo "Kraj: $row[0]  Stolica: $row[1]";
		echo "<br />\n";
	
	
	// WYWOŁANIE UPDATE i DELETE 
	
	$obiekt->Update("Rosja", "Moskwa");
												
	$obiekt->Delete("Rosja");
	
}
	
	
	
	?>

	