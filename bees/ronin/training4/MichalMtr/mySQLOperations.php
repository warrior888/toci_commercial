<?php
// -------------------------------------------------------------------------
// Programming Course:
// PHP Basics (bees), by Bartlomiej Zapart (TOCI), September 2016.
// Homework after Training 4 session, dated 2016.10.02. Part 1 of 2.
// Author:	MichalMtr (mtr180deg)
// -------------------------------------------------------------------------

// -------------------------------------------------------------------------
// Connect with mySQL database. Perform queries.
// -------------------------------------------------------------------------

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'toci';
$queries = array(
	'createQuery' => "CREATE table bees (id serial primary key, name text,
					  					 surname text, telephone text);", 	
	'insertQuery' => "INSERT INTO bees (name, surname, telephone) 
			          VALUES ('Ala','Makota','123456789');",
	'updateQuery' => "UPDATE bees 
					  SET name = 'Iza', surname = 'Nicma' 
					  WHERE bees.id = 3;",
	'deleteQuery' => "DELETE FROM bees 
					  WHERE bees.id = 1;",
	'selectQuery' => "SELECT * FROM bees;"		
);

// Connect with the database.
$handle = mysqli_connect($host, $user, $pass, $db);

function create($link, $query)
{
	$result = mysqli_query($link, $query);
}

function insert($link, $query)
{
	$result = mysqli_query($link, $query);
	
	return mysqli_affected_rows($link)." line affected by SELECT\n\n";
}

function update($link, $query)
{
	$result = mysqli_query($link, $query);

	return mysqli_affected_rows($link)." line affected by UPDATE\n\n";
}

function delete($link, $query)
{
	$result = mysqli_query($link, $query);

	return mysqli_affected_rows($link)." line affected by DELETE\n\n";
}

function select($link, $query)
{
	$result = mysqli_query($link, $query);
	$table = array();
	
	while ($row = mysqli_fetch_assoc($result)) // Only associative.
	{
		$table[] = $row;
	}
	
	return $table;
}

function showSelectData($selectData)
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

// Testing. 

//create($handle, $queries['createQuery']);
//print_r(insert($handle, $queries['insertQuery']));
//print_r(update($handle, $queries['updateQuery']));
print_r(delete($handle, $queries['deleteQuery']));

//Perform the query and print out the table with headers.
echo showSelectData(select($handle, $queries['selectQuery']));
