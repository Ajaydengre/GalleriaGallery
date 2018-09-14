

<?php 
ob_start();
session_start();
if(isset($_POST['submit'])){
$firstname=$_POST['fname'];
$firstname=trim($firstname);
$firstname=filter_var($firstname, FILTER_SANITIZE_STRING);
$lastname=$_POST['lname'];
$lastname=trim($lastname);
$lastname=filter_var($lastname, FILTER_SANITIZE_STRING);
$username=$_POST['username'];
$username=trim($username);
 $username =htmlspecialchars($username);
 $username=filter_var($username, FILTER_SANITIZE_STRING);
$newprotect=$_POST['newpassword'];
$newprotect=trim($newprotect);
$newprotect=strip_tags($newprotect);
 $newprotect=filter_var($newprotect, FILTER_SANITIZE_STRING);
$hashpasswords = hash('sha256',$newprotect);
$conn = new mysqli("localhost","root","AjAy1809","Galleriauser");
//create connection

//check connection
if ($conn ->connect_error){
die("connection failed:".$conn ->connect_error);}
   // check if e-mail address is well-formed
   
	
//sql to create table
$checkexist = "SELECT email FROM UserInfo WHERE email = '$username'";
$queryresult = $conn ->query($checkexist);
$foundrows = $queryresult ->num_rows;
if($foundrows >= 1){
	 header("location:  SignupLogin.php?remark_signup=already_registered");
}else {
$sql="INSERT INTO UserInfo (firstname,lastname,email,password) VALUES ('$firstname','$lastname','$username','$hashpasswords')";
if($conn ->query($sql) === TRUE ){
	$_SESSION['user'] = $username;
$useridd = $_SESSION['user'];
	 header("location: createtableprofiless.php");
	
	
} else {echo "error".$sql ."<br>" .$conn->error;}} } 
$conn->close();?> 
