<?php
//config
$servername = "localhost";
$username = "root";
$password = "";
$database = "address_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);



// insert data into the table
$sql = "INSERT INTO people(id ,name ,lastname ,telephone ,email ,address ) VALUES (NULL,'John','DOE',012334566,'john@doe.com','kasarani nairobi')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error sql query: " . $conn->error;
}

//close connection
$conn->close();

?>