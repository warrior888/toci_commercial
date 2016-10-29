<?php

	abstract class Model
	{
		public $tableName;

		public function Insert()
		{
			$query = 'INSERT INTO ' . $this->tableName;
			
			return $query;	
		}	
	}
	
	class FileReader
	{
		public function RetrieveFileConntent($fileName)
		{
			return file_get_contents($fileName);
		}
	}
	
	abstract class FileParser
	{
		/**
		 * 
		 * @var FileReader
		 */
		protected $FileReader;
		
		public function __construct()
		{
			$this->FileReader = new FileReader();
		}
		
		public function RemoveComments($subject)
		{
			$pattern = '/\s*--.*/';
			$replacement = '';
				
			$result = preg_replace($pattern, $replacement, $subject);
				
			return $result;
		}
		
		/**
		 * @return array
		 */
		public function Parse($delimiter, $fileName) 
		{
			$content = ($this->FileReader->RetrieveFileConntent($fileName));
			
			$contentNoComments = $this->RemoveComments($content);

			return explode($delimiter, $contentNoComments);
		}
	}
		
	class SqlFileParser extends FileParser
	{
		const DELIMITER = ");";
		const PATH = '.\data\sql.sql';
		 
		public function GenerateModels($path)
		{
			mkdir($path, '777', true);
			$parsed = $this->Parse(self::DELIMITER, self::PATH);
			
			foreach ($parsed as $createTable)
			{
				$elements = $this->SplitCreateTable($createTable);
				
				if (isset($elements[1])) 
				{
					$tableName = trim($elements[1]);
					//$tableNames = $this->RecognizeTableNameStr($elements[1]);  // NIEU¯YWANA
					$generatedPhp = $this->CreateModel($elements[2], $tableName);			
				}
				
				file_put_contents($path.'\\'.$tableName.'.php', $generatedPhp);
			}
		}
				
		public function SplitCreateTable($parsedContent)
		{
			$matches = array();
			$pattern = '/create[\s]+table[\s]+(\S+)\s*\(\s*([\s\S]*)/';
			
			$result = preg_match($pattern, $parsedContent, $matches);
			
			return $matches; // tableName i kolumny
		}
	 	
		// NIEU¯YWANA
		public function RecognizeTableNameStr($string)
		{
			$result = str_word_count($string, 1, '_');
		
			if (isset($result[2]))
			{
				return $result[2];
			}
		}
		
		public function RecognizeProperties($classProperties)
		{
			$createColumns = explode(",", $classProperties);
			
			$properties = '';
				
			foreach ($createColumns as $column)
			{
				$columnElements = explode(' ', trim($column));
				$columnName = trim($columnElements[0]);
				$properties .= "\n\t\tpublic $" . ucfirst($columnName) . ";";
			}
			
			return $properties;
		}
		
		public function CreateModel($classProperties, $className) 
		{		
			return "<?php\n\tclass ".$className." extends Model\n\t{".$this->RecognizeProperties($classProperties)."\n\n\t\tpublic function __construct()\n\t\t{\n\t\t\t".'$this->TableName = \''.$className."';\n\t\t}\n\t}";
		}	
	}
	
	$sqlParser = new SqlFileParser();
	$sqlParser->GenerateModels('.\models');	
	
	
	
	