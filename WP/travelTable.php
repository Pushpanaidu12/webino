<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TravelAgency";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE Travel (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
Address VARCHAR(30) NOT NULL,
date int(3) NOT NULL,
month VARCHAR(5) NOT NULL,
year int(6) NOT NULL,
Username VARCHAR(30) NOT NULL,
password VARCHAR(10) NOT NULL,
phone_no int(10),
email VARCHAR(30),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table travel created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>