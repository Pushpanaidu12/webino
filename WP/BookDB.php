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

$sql = "INSERT INTO Book (firstname, lastname, Address,city,street,landmark,email, phone_no,adult,child, datej, monthj,card,monthe, yeare,namec)
VALUES ('$_POST[fname]','$_POST[lname]','$_POST[address]','$_POST[lnadme1]','$_POST[lnadme2]','$_POST[lnadme3]','$_POST[email]','$_POST[mobile]','$_POST[adult]','$_POST[child]','$_POST[datej]','$_POST[monthj]','$_POST[f1]','$_POST[monthe]','$_POST[yeare]','$_POST[las]')";

if ($conn->query($sql) === TRUE) {
    echo "You are signed in";
    header("location:Main.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>