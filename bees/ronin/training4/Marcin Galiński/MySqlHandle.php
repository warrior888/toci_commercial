<?php
	require_once 'DbHandle.php';
	
	class MySqlHandle extends DbHandle
	{
		
		public function Connect()
		{
			$this->connectionHandle = new mysqli($this->dbHost,$this->dbUser,$this->dbPass,$this->dbName);
			return $this->connectionHandle;
		}
		
		public function __construct()
		{
			parent::__construct("localhost","root","","bees");
		}
		
		public function InsertDeleteUpdate($query)
		{	
			$result = $this->connectionHandle->query($query);
			return $connect->affected_rows;
		}
		
		public function Select($query)
		{
			$connect = $this->Connect();
			$result = $connect->query($query);
			$table = array();
			
			while($row = $result->fetch_assoc())
			{
				$table[] = $row;
			}
			
			return $table;
		}
		
		public function showSelectData($query)
		{
			$selectData = $this->Select($query);
			
			foreach ($selectData as $selectRow)
			{
				foreach ($selectRow as $key => $value)
				{
					echo $value . "\t";
				}
				echo "\n";
				
			}
		}
		/*private function ErrorHandling($connection)
		{
			if($connection->connect_errno)
			{
				return 1; //blad
			}
			else
			{
				return 0; //bez bledu
			}
		}*/
	}
	
	//$obj = new MySqlHandle();
	//var_dump($obj->InsertDeleteUpdate("insert into bees (name,surname,telephone) values ('Bartek','Zapart','665265432');"));
	//$obj->Connect();
	//var_dump($obj->Select("select * from bees"));
	//$obj->Select("select * from bees");
	//$obj->showSelectData("select * from bees");
	
?>