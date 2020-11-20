<?php
//config
$servername = "localhost";
$username = "root";
$password = "";
$database = "address_book";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);



// prepare and bind to help insert multiple data repeatedly
$stm = $conn->prepare("INSERT INTO people(name,lastname,telephone,email,address) VALUES (?,?,?,?,?)");
//binid the parameters with the query
$stm->bind_param("sssss",$name,$lastname,$telephone,$email,$address);

//set parameters and execute
$name = "Kamahuha";
$lastname = "Kamahuha";
$telephone= 07123456;
$email = "kamauhuha@gmail.com";
$address = "runda nai";
$stm->execute();

$name = "Kamahuha";
$lastname = "Kamahuha";
$telephone= 07123456;
$email = "kamauhuha@gmail.com";
$address = "runda nai";
$stm->execute();

$name = "Kamahuha";
$lastname = "Kamahuha";
$telephone= 07123456;
$email = "kamauhuha@gmail.com";
$address = "runda nai";
$stm->execute();

$name = "Kamahuha";
$lastname = "Kamahuha";
$telephone= 07123456;
$email = "kamauhuha@gmail.com";
$address = "runda nai";
$stm->execute();

echo "New records created successfully";
//close execution
$stm->close();
//close connection
$conn->close();

?>