<?php
/* -------------------------------------------------------------------------
 * Programming Course:
 * PHP Basics (bees), by Bartlomiej Zapart (TOCI), September 2016.
 * Homework after Training 4 session, dated 2016.10.02. Part 2 of 2.
 * Author:	MichalMtr (mtr180deg)
 *  -------------------------------------------------------------------------
*/
// -------------------------------------------------------------------------
// Connect with mySQL database. Perform queries. Use Classes.
// -------------------------------------------------------------------------

	abstract class DbHandle
	{
// 		public $query;    // Czy tak?
		
		public abstract function Connect(); 
// 		public abstract function Create($query); // Czy tak?
		public abstract function Insert();
// 		public abstract function Update();
// 		public abstract function Delete();
// 		public abstract function Select();
		
		protected function __construct()
		{
			$this->Connect();
// 			$this->Create($this->query); // Czy tak?
			$this->Insert();
// 			$this->Update();
// 			$this->Delete();
// 			$this->Select();
		}
	}
	
	class MySqlHandle extends DbHandle
	{
		protected $link;
		public $task;  // Tylko dla INSERTA jest inaczej, testowo
		
		public function __construct()
		{
			parent::__construct();
		}
		
		public function Connect()
		{
			$this->link = mysqli_connect('localhost', 'root', '', 'toci');
		}
		
		public function Create($query)
		{
			$result = mysqli_query($this->link, $query);
		}
		
		public function Insert() // Inaczej !!! 
		{
			// Wstawia linie ale komunikat daje "empty query"...
			$result = mysqli_query($this->link, $this->task);
			return mysqli_affected_rows($this->link)." line affected by SELECT\n\n";
		}
		
		public function Update($query)
		{
			$result = mysqli_query($this->link, $query);
			return mysqli_affected_rows($this->link)." line affected by UPDATE\n\n";
		}
		
		public function Delete($query)
		{
			$result = mysqli_query($this->link, $query);
			return mysqli_affected_rows($this->link)." line affected by DELETE\n\n";
		}
		
		public function Select($query)
		{
			$result = mysqli_query($this->link, $query);
			$table = array();
			
			while ($row = mysqli_fetch_assoc($result))
			{
				$table[] = $row;
			}
			
			return $table;
		}
		
		public function ShowSelectData($selectData)
		{
			foreach ($selectData[0] as $headers => $val) // Table headers
			{
				echo $headers."\t";
			}
			echo "\n";
		
			foreach ($selectData as $selectRow) // Table data.
			{
				foreach ($selectRow as $key => $value)
				{
					echo  $value."\t";
				}
				echo "\n";
			}
		}
		
		public function __destruct()
		{
			var_dump('destruction');
			mysqli_close($this->link);
		}
	}
	
	$queries = array(
			'createQuery' => "CREATE table beeso (id serial primary key, name text,
					  					 		 surname text, telephone text);",
			'insertQuery' => "INSERT INTO beeso (name, surname, telephone)
			          		  VALUES ('Ala','Makota','123456789');",
			'updateQuery' => "UPDATE beeso
					          SET name = 'Iza', surname = 'Nicma'
					          WHERE beeso.id = 2;",
			'deleteQuery' => "DELETE FROM beeso
					          WHERE beeso.id = 6;",
			'selectQuery' => "SELECT * FROM beeso;"
	);

	$call = new MySqlHandle();
	$call->Connect();
	
	//$call->Create($queries['createQuery']);  // TAK???
		
	//$call->task = $queries['insertQuery'];  // CZY TAK???
	//echo $call->Insert();
	
	//echo $call->Update($queries['updateQuery']);
	echo $call->Delete($queries['deleteQuery']);
	
	$call->ShowSelectData($call->Select($queries['selectQuery']));
	
