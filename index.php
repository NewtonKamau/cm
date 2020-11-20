<?php

//config
$servername = "localhost";
$username = "root";
$password = "";
$database = "address_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);



// fetch data by limit 
$sql = "SELECT * FROM people LIMIT 10";
$action = mysqli_query($conn,$sql);


echo "<h1>Your contact List</h1>";
echo "<table >";
echo "<td>name</td>";
echo "<td>lastname</td>";
echo "<td>telephone</td>";
echo "<td>email</td>";
echo "<td>address</td>";


while ( $line = mysqli_fetch_assoc($action)) {
	echo "<tr><td>" .$line["name"] ."</td>
	<td>" .$line["lastname"]. "</td>
	 <td>" .$line["telephone"] ."</td>
	<td>" .$line["email"]. "</td>
	 <td>" .$line["address"]. "</tr>";
} echo "</table>";



$conn->close();

?>	