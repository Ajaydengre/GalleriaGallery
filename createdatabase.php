<html>
<body>
<?php 
$servername = "localhost";
$username ="root";
$password ="";
//create connection
$conn = new mysqli($servername,$username,$password);
//check connection
if ($conn ->connect_error){
die("connection failed:".$conn ->connect_error);
}
//create database
$sql ="CREATE DATABASE Galleriauser";
if($conn ->query($sql) === TRUE ){
	echo "Database createdsuccessfully";
} else {echo "error creating database:".$conn->error;}
$conn->close(); ?>
</body>
</html>
