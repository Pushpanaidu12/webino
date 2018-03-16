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
$sql = "CREATE TABLE Book (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
Address VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL,
street VARCHAR(30) NOT NULL,
landmark VARCHAR(30) NOT NULL,
email VARCHAR(30),
phone_no int(10),

adult int(3) NOT NULL,
child int(3) NOT NULL,
datej int(3) NOT NULL,
monthj VARCHAR(5) NOT NULL,
card VARCHAR(19),
monthe VARCHAR(5) NOT NULL,
yeare int(6) NOT NULL,
namec VARCHAR(30) NOT NULL,


reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table travel created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>