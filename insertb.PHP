<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'college';


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$fname=$_POST['fnm'];
	$email=$_POST['email'];
	$feedback=$_POST['feedback'];
	

}
$sql = "INSERT INTO feedback (fname, email,message)
VALUES ('$fname', '$email', '$message')";

echo $sql;
if (mysqli_query($conn, $sql)) {
  header("Location:index.html");
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
