<?php

$uname = $_POST["username"];
$pass = $_POST["password"];

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
if($uname && $pass)
{

    mysqli_select_db($conn , $dbname) or die("Couldn't find db");

$query= mysqli_query($conn,"SELECT * From Travel WHERE Username='$uname'");
$numrows = mysqli_num_rows($query);

	if ($numrows!=0)
	{
	//code to login
	 while ($row = mysqli_fetch_assoc($query))
	 	{
			$dbusername = $row['Username'];
			$dbpassword = $row['password'];
		}
		if($uname==$dbusername&&$pass==$dbpassword)
		{
			echo "You're in!";
                        header("location:main1.html");
		}
		else
		 echo "Incorrect password!";
		
	}
	else
	die("That user does't exist!");

	
}
else
   die("Please enter  username and Password!");

?>
