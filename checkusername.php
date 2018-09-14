

<?php 
//create connection
$conn = new mysqli("localhost","root","","Galleriauser");
//check connection
if ($conn ->connect_error){
die("connection failed:".$conn ->connect_error);}
if(isset($_POST['username'])){
$username = $_POST['username'];
$username = trim($username);
 
 $checkexist = "SELECT email FROM UserInfo WHERE email = '$username'";
$queryresult = $conn ->query($checkexist);
$foundrows = $queryresult ->num_rows;
if ($foundrows == 0 && strlen($username)>=4){
 echo "<div id='positionofcheck'><i class='fa fa-check-square-o' id='correct' > </i></div>";
  } 
else {
	echo "Username is not available";
} $conn->close(); }
?>
