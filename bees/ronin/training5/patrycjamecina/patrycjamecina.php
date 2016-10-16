<?php

class DbSelect extends DbWhere
{
	private $selectCommand = "select ";

	public function Select($table, array $asterisk, array $where)
	{
		//$asterisk = array('name', 'surname'); // implode
		//$where = array(array('name', 'like', 'dupa'), array('surname'));
		//'select name, surname from whatever where name like \'dupa\'
		//and surname = \'zapi\'';
		$fields = implode( ',' , $asterisk);
		return $this->selectCommand .=  $fields . " from " . $table . " " . $this->Where($where) . ";";
			
	}
}

class DbUpdate extends DbWhere
{
	private $updateCommand = "update ";

	public function Update($table , array $updateArray , array $where)
	{
		$this->updateCommand .= $table . " set ";
		foreach ($updateArray as $key => $value)
		{
			if( is_string($value))
			{
				$this->updateCommand .= $key . " = '" . $value . "', ";
			}
			else
			{
				$this->updateCommand .= $key . " = " . $value . ", ";
			}
		}
		$this->updateCommand = rtrim($this->updateCommand, ", ");
		$this->updateCommand .= " " . $this->Where($where) . ";";
		return $this->updateCommand;
	}
}

class Where
{
	public $name;
}

abstract class DbWhere
{
	protected $whereCommand = "where ";
	public function Where(array $where) // select update delete
	{
		foreach ($where as $table)
		{
			foreach ($table as $key => $value)
			{
				$this->find($key, $value);
			}
		}
		$where = rtrim($this->whereCommand, '&& ');
		return $where;
	}

	private function find($key,$value)
	{
		$key++;
		if($key % 3 == 0)
		{
			if(is_string($value))
			{
				$this->whereCommand .= "'" . $value . "' ";
			}
			else
			{
				$this->whereCommand .= $value . " ";
			}
			$this->whereCommand .= "&& ";
		}
		else
		{
			$this->whereCommand .= $value . " ";
		}
	}
}


//testy

//$select = new DbSelect();
//echo $select->Select("users", array("name","surname","login","password"), array(array("name" , "like" , "patrycja") , array("surname", "=" , "mecina","login","=","lolzi")));
//$update = new DbUpdate();
//echo $update->Update("users", array("column1" => "value1" , "column2" => 10), array(array("name" , "like" , "patrycja") , array("surname", "=" , "mecina","login","=","lolzi")));
?>