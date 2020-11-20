<?php
//config
$servername = "localhost";
$username = "root";
$password = "";
$database = "address_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);



// insert data into the table
$sql = "INSERT INTO people(id ,name ,lastname ,telephone ,email ,address ) VALUES (NULL,'Steve','NDOE',012334566,'steve@doe.com','mwiki nairobi');";
$sql .= "INSERT INTO people(id ,name ,lastname ,telephone ,email ,address ) VALUES (NULL,'jonte','jonte',012334566,'mik@mike.com','mwiki nairobi');";
$sql .= "INSERT INTO people(id ,name ,lastname ,telephone ,email ,address ) VALUES (NULL,'mike','mike',012334566,'jonte@doe.com','mwiki nairobi');";
$sql .= "INSERT INTO people(id ,name ,lastname ,telephone ,email ,address ) VALUES (NULL,'mwas','mwas',012334566,'mwas@mawas.com','mwiki nairobi');";
$sql .= "INSERT INTO people(id ,name ,lastname ,telephone ,email ,address ) VALUES (NULL,'kevo','kevo',012334566,'kevo@kevo.com','mwiki nairobi')";
if ($conn->multi_query($sql) === TRUE) {
	$last_id = $conn->insert_id;
  echo "New records created successfully. Last id is ". $last_id;
} else {
  echo "Error sql query: " .$sql. $conn->error;
}

//close connection
$conn->close();

?>