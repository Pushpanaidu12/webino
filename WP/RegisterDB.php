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

$sql = "INSERT INTO Travel (firstname, lastname, Address, date, month, year, Username, password, phone_no, email)
VALUES ('$_POST[fname]','$_POST[lname]','$_POST[address]','$_POST[date]','$_POST[month]','$_POST[year]','$_POST[uname]','$_POST[password]','$_POST[mob]','$_POST[email]')";

if ($conn->query($sql) === TRUE) {
    echo "You are signed in";
    header("location:Main.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>