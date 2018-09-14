<?php
session_start();
if (!isset($_SESSION['user']))
{ header("Location:Galleria.php");
exit;
}
$conn = new mysqli("localhost","root","AjAy1809","Galleriauser");

//check connection
if ($conn ->connect_error){
die("connection failed:".$conn ->connect_error);}
$useridd = $_SESSION['user'];
$sql="CREATE TABLE IF NOT EXISTS Profileimage (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,Image_src varchar (255) NOT NULL,reg_date TIMESTAMP )";
if($conn ->query($sql) === TRUE ){
	echo"sucess";
} else {
	header("Location:saveprofileimg.php");
}



?>