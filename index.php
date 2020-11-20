<?php
//config
$servername = "localhost";
$username = "root";
$password = "";
$database = "address_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);



// insert data into the table
$sql = "INSERT INTO people(id ,name ,lastname ,telephone ,email ,address ) VALUES (NULL,'Steve','NDOE',012334566,'steve@doe.com','mwiki nairobi')";
if ($conn->query($sql) === TRUE) {
	$last_id = $conn->insert_id;
  echo "New record created successfully. Last id is ". $last_id;
} else {
  echo "Error sql query: " .$sql. $conn->error;
}

//close connection
$conn->close();

?>