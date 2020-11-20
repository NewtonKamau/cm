<?php
//config
$servername = "localhost";
$username = "root";
$password = "";
$database = "address_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create database
$sql = "CREATE TABLE people(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT Null,
telephone INT,
email VARCHAR(100),
address VARCHAR(100),
meta TIMESTAMP

)";
if ($conn->query($sql) === TRUE) {
  echo "SQL query ok";
} else {
  echo "Error sql query: " . $conn->error;
}

//close connection
$conn->close();

?>