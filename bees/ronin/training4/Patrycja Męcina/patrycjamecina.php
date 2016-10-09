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
class patrycjamecina extends DbHandle
{
	public $handle;

	public function __construct()
	{
		parent::__construct();
	}

	public function Connect()
	{
		$this->handle = pg_connect('host=localhost user=postgres password=pass dbname=dataBase');
	}

	public function Select($select)
	{
		$result = pg_query($connection, $select);
		$table = array();

		while($row = pg_fetch_assoc($result))
		{
			$table[] = $row;
		}

		return $table;
	}

	public function Insert($insert)
	{
		$result = pg_query($this->handle, $insert);
		return pg_affected_rows($result);
	}
	
	public function Delete($delete)
	{
		$result = pg_query($this->handle, $delete);
		return pg_affected_rows($result);
	}
	
	public function Update($update)
	{
		$result = pg_query($this->handle, $update);
		return pg_affected_rows($result);
	}
}