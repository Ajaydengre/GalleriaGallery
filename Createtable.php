<html>
<body>
<?php 
$servername = "localhost";
$username ="root";
$password ="";
$dname ="Galleriauser";
//create connection
$conn = new mysqli($servername,$username,$password,$dname);
//check connection
if ($conn ->connect_error){
die("connection failed:".$conn ->connect_error);
}
//sql to create table
$sql="CREATE TABLE IF NOT EXISTS UserInfo (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR (30) NOT NULL,lastname VARCHAR (30) NOT NULL,email VARCHAR (50),
password VARCHAR (400),reg_date TIMESTAMP )";
$sqlss="CREATE TABLE IF NOT EXISTS newsfeed(usersid VARCHAR (50),Imagesrc varchar (255) NOT NULL ,reg_date TIMESTAMP )ENGINE=InnoDB DEFAULT CHARSET=latin1;";
$sqlssss="CREATE TABLE IF NOT EXISTS purchaseinfo(Purchaseid INT(40),seller varchar(50),buyer varchar(50),deliveryadd varchar(300),Imagesrc varchar (255) NOT NULL ,reg_date TIMESTAMP,paymentmode varchar(30),paymentrecieve varchar(5),price int(12) )ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if($conn ->query($sql) === TRUE ){
	if($conn ->query($sqlss) === TRUE ){
		if($conn ->query($sqlssss) === TRUE ){
	echo "Table UserInfo created succesfully";
	} }}else {echo "error creating table:".$conn->error;}
$conn->close(); ?>
</body>
</html>
