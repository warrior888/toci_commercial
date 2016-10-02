<?php
//postgresql
	$handle = pg_connect('host=127.0.0.1 user=postgres password=beatka dbname=con_air');
	//pg_close()
	//var_dump($handle);
	
	function insert($connection, $query)
	{
		$result = pg_query($connection, $query);
		
		return pg_affected_rows($result);
	}
	
	function select($connection, $query)
	{
		$result = pg_query($connection, $query);
		$table = array();
		
		while($row = pg_fetch_assoc($result))
		{
			$table[] = $row;
		}
		
		return $table;
	}
	
	function showSelectData($selectData)
	{
		foreach ($selectData as $selectRow)
		{
			foreach ($selectRow as $key => $value)
			{
				
			}
		}
	}
	
	var_dump(select($handle, 'select * from bees;'));
	
	function update($connection, $query)
	{
		
	}
	
	function delete($connection, $query)
	{
		
	}