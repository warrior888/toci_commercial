<?php
//data definition language
	abstract class Model
	{
		public $TableName;
		
		// fajna logika dostepu do bazy danych
		public function Insert()
		{
			$query = 'insert into ' . $this->TableName . '(nazwy kolumn) values (wartosci);';
			
			// ???????
			
			return $query;
		}
		
		public function Delete()
		{
			// WHERE ?
		}
	} 
	
	class FileReader
	{
		public function RetrieveFileContent($fileName)
		{
			return file_get_contents($fileName);
		}
	}
	
	abstract class FileParser
	{
		/**
		 * @var FileReader
		 */
		protected $FileReader;
		
		public function __construct()
		{
			$this->FileReader = new FileReader();
		}
		
		/**
		 * @return array
		 */
		public function Parse($delimiter, $fileName)
		{
			$content = $this->FileReader->RetrieveFileContent($fileName);
			
			return explode($delimiter, $content);
		}
	}
	
	class SqlFileParser extends FileParser
	{
		const DELIMITER = ');';
		const PATH = 'C:\self\toci\software\sourcetree\commercial\bees\ronin\training7\data\sql.sql';
		
		public function GenerateModels($path)
		{
			mkdir($path, '777', true);
			$parsed = $this->Parse(self::DELIMITER, self::PATH);
			
			foreach ($parsed as $createTable)
			{
				$elements = explode('(', $createTable);
				
				$table = $this->RecognizeTableName(trim($elements[0]));
				
				$generatedPhp = $this->CreateModel($elements[1], $table);
				
				file_put_contents($path.'\\'.$table.'.php', $generatedPhp);
			}
		}
		
		// array (create ..., create..., create ...., 
		
		//foreach()
		
		public function RecognizeTableName($string)
		{
			//var_dump($string);
			$pattern = '/^create([ ])+table([ ])+([a-z,_]*)/'; //wyrazenie regularne
			$matches = array();
			$result = preg_match($pattern, $string, $matches);
			
			return ($matches[3]);
		}
		
		public function CreateModel($createTable, $className)
		{
			//var_dump($createTable);
			$this->RemoveComments($createTable);
			
			$createColumns = explode(",", $createTable);
			//var_dump($createColumns);
			$properties = '';
			
			foreach($createColumns as $column)
			{
				$columnElements = explode(' ', $column);
				$columnName = trim($columnElements[0]); 
				$properties .= "public $".ucfirst($columnName).";\n";
			}
			
			return '<?php class ' . $className . ' extends Model {
			
			public function __construct()
			{
				$this->TableName = \''.$className.'\';
			}
			
			' . $properties . ' 
		}';
		}
		
		public function RemoveComments($createTableColumns)
		{
			//????????
		}
	}
	
	$sqlParser = new SqlFileParser();
	
	echo $sqlParser->RecognizeTableName('create table team (');
	$sqlParser->GenerateModels('C:\self\toci\software\sourcetree\commercial\bees\ronin\training7\models');
	
	require_once 'C:\self\toci\software\sourcetree\commercial\bees\ronin\training7\models\developer.php';
	require_once 'C:\self\toci\software\sourcetree\commercial\bees\ronin\training7\models\developer_technology.php';
	
	$test = new developer();
	$test2 = new developer_technology();
	
	echo $test->Insert();
	echo $test2->Insert();
		
	
	