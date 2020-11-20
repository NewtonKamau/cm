<?php
//config
$servername = "localhost";
$username = "root";
$password = "";
$database = "address_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);



// prepare and bind to help insert multiple data repeatedly
$sql = "SELECT id, name, lastname FROM people";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - name: " . $row["name"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}


$conn->close();

?>