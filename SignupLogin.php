<?php 
session_start();
if (isset($_SESSION['user'])!="")
{ header("Location:welcome.php");
exit;
}
$conn = new mysqli("localhost","root","AjAy1809","Galleriauser");

//check connection
if ($conn ->connect_error){
die("connection failed:".$conn ->connect_error);}
 ?>
<html>
<head>
<title>Galleria-SignUp</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" type="image/png" href="logo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
	
	body{ background-image:url(images/body11.jpg);
    background-repeat:repeat;}
#SignUpback{ float:left;margin-left:35vw;margin-top:3vw;width:42vw;height:40vw;background:#222A26;position:relative;}
.button3{background-color:#3E594C;border:none; padding:1.1vw;cursor: pointer;width:17vw;font-size:1.3vw;color:white;position:relative;}
.enterinputs{
	      width:15.5vw;
          font-family:Comic Sans MS;
		  border:1px solid #545957;
		 position:relative;
		  margin-left:1vw;
		  background-color:#222A26;
		  padding:0.8vw;
		  margin-top:1vw;color:white;
		  font-size:1.3vw;}
#infosignup{display:block;}
#infoLogin{display:none;}
#tagline1{display:block;}
a{color:#46C17F;
		  text-decoration: none;
		  }
	 a:hover{color:grey;cursor: pointer;}
	  p {
	     
		  font-size:1.3vw;
		 }
		 .button3:hover{box-shadow:4px 8px 8px 0px #304139;}
.enterinputs:hover{box-shadow:4px 4px 8px 0px #304139;border:1px solid #46C17F;}
.infowarning{float:left;position:absolute;font-size:1.2vw;color:red;margin-top:-2vw;margin-left:15vw;display:none;}
#correct{font-size:2vw;color:green;}
#arrowdown{ margin-top:-.2vw;font-size:2vw;}
#positionofcheck{position:absolute;margin-top:-2.8vw;margin-left:30vw;}
#alreadyavailable{clear:both;font-size:1.3vw;color:red;margin-left:0vw;margin-top:-3vw;position:absolute; font-family:Comic Sans MS;color:#46C17F;height:4vw;background:#222A26;width:42vw;}
</style>
<script type="text/javascript">
   var image1=new Image()
   image1.src="images/image11.jpg"
    var image2=new Image()
   image2.src="images/image12.jpg"
    var image3=new Image()
   image3.src="images/image13.jpg"
    var image4=new Image()
   image4.src="images/follow.jpg"
    var image5=new Image()
   image5.src="images/image22.jpg"
    var image6=new Image()
   image6.src="images/image23.jpg"
   
   </script></head>
<body>
<div style="margin-top:4vw;"><center><h1 style=" font-family:Californian FB;"><a style="color:black;" href="">G A L L E R I A </a></h1></center></div>
<div style="float:left;position:relative;margin-left:15vw;">
<image src="images/backgroundphone2.png" style="width:27vw;position:absolute;margin-left:-10vw;margin-top:-2vw;object-fit:cover;"/>
<image src="images/image1.jpg" name="slides" style="position:absolute;width:19vw;height:32.6vw;margin-top:3vw;margin-left:-6vw;border:0.2vw solid black;border-radius:0.4vw;object-fit:cover;"/>
<script type="text/javascript">
		                  var step=1
		                  function slidesit(){
		                  document.images.slides.src=eval("image"+step+".src")
		                  if(step<6)
		                  step++
		                  else
		                  step=1
		                  setTimeout("slidesit()",2000)
		                  }
		                  slidesit()
		            </script>
<image src="images/backgroundphone.png" style="width:27vw;position:absolute;"/>
<image src="images/image1.jpg" name="slide" style="position:absolute;width:19vw;height:32.3vw;margin-top:6.5vw;margin-left:3.8vw;border:0.2vw solid black;border-radius:0.4vw;"/>
<script type="text/javascript">
		                  var step=1
		                  function slideit(){
		                  document.images.slide.src=eval("image"+step+".src")
		                  if(step<6)
		                  step++
		                  else
		                  step=1
		                  setTimeout("slideit()",2000)
		                  }
		                  slideit()
		            </script>
<div id="SignUpback">
   <?php
   $remarks  =  isset($_GET['remark_signup'])  ?  $_GET['remark_signup']  :  '';
    
     if  ($remarks=='already_registered')
{

   echo  '
<div id="alreadyavailable" style=""><p style="text-align:center;">
Username is already taken.Please try another username!</br> or Login Here <i id="arrowdown" class="fa fa-angle-double-down"></i></p></div>
 
';
       }
?>
 <?php
   $remarks  =  isset($_GET['remark_login'])  ?  $_GET['remark_login']  :  '';
    
     if  ($remarks=='Users')
{

   echo  "
<script type='text/javascript' src='login.js'></script>
 
";
       }
?>
<div style="float:left;display:inline-block;margin-left:4vw;margin-top:2vw;">
<button id="btn1" class="button3"  style="background-color:#46C17F;">SignUp</button></div>
<div style="float:left;display:inline-block;margin-left:0vw;margin-top:2vw;">
<button id="btn2" class="button3" >LogIn</button>
</div>
<div  style="clear:both;position:absolute;margin-top:6vw;margin-left:14vw;">
<h1 id="tagline1" style="font-size:2vw;color:white;">Sign Up For Free</h1>
</div>
<div id="infosignup" style="clear:both;position:absolute;margin-top:10vw;margin-left:4vw;">
<form action="Signupserver.php" method="post" autocomplete="off">
  <input type="text" class="enterinputs" placeholder="First Name" id="fname" name="fname" onblur="return checkinput1()" required>
  	<script> 
	 function checkinput1(){
		if ((document.getElementById('fname').value).length < 2) {
			document.getElementById('fname').style.border = "1px solid red";
			return false;
		}
		else {
			document.getElementById('fname').style.border = "1px solid #545957";
			return true;
		}
	 }
	</script>
   <input type="text" class="enterinputs" placeholder="Last Name" id="lname" name="lname" onblur="return checkinput2()" required><br>
   	<script> 
	 function checkinput2(){
		if ((document.getElementById('lname').value).length < 2) {
			document.getElementById('lname').style.border = "1px solid red";
			return false;
		}
		else {
			document.getElementById('lname').style.border = "1px solid #545957";
			return true;
		}
	 }
	</script>
    <input type="text" class="enterinputs" placeholder="Create User Name"  id="username" name="username" style="width:32.3vw;"  required>
	<div id="status" style="clear:both;font-size:1vw;color:red;" ></div>
		<script type="text/javascript" >
$(document).ready(function(){
		$("#username").keyup(function(){
			var username=$(this).val();
			if(username!=''){
			$.ajax({
				url:"checkusername.php",
				method:"POST",
				data:{username:username},
				dataType:"text",
				success:function(data){
					 $('#status').html(data);
				}
				
			});}
			else {$('#status').html('');
				
			}

             
			
		}); 
});
		</script>
    <input type="password" class="enterinputs" placeholder="Set A Password" id="newpassword" name="newpassword" style="width:32.3vw;" onblur="return checkvalidation()" 
	onfocus="border()"  required>
	
	<div class="infowarning" id="lengthwarning">Please enter atleast 8 digits password!</div>
	
	 <script>
	
	 function checkvalidation()
 {
  var CreatePassword = document.getElementById("newpassword").value;

 var lweight = document.getElementById("lengthwarning");
 

 if(CreatePassword.length <6 )
{
lweight.style.display="block";
document.getElementById("newpassword").style.border="1px solid red";

return false;
} 
 else
{
lweight.style.display="none";
document.getElementById("newpassword").style.border="1px solid #545957";
return true;
} 
 }

</script>
<script>
 function border(){ document.getElementById("newpassword").style.border="1px solid #545957";
	
}
</script>
	<input type="password" class="enterinputs" placeholder="Confirm Password"id="confirmpassword" name="confirmpassword" 
	onblur="return checkvalidation2()" onfocus="border2()"style="width:32.3vw;" required>
		
<script>
function checkvalidation2()
 {
	 var CreatePassword = document.getElementById("newpassword").value;
 var confirmYourPassword = document.getElementById("confirmpassword").value;
 var lweight = document.getElementById("lengthwarning");
  var cweight = document.getElementById("confirmwarn");
 
if(CreatePassword != confirmYourPassword ){
cweight.style.display="block";
document.getElementById("confirmpassword").style.border="1px solid red";
return false;
}
 else
{
cweight.style.display="none";
document.getElementById("confirmpassword").style.border="1px solid #545957";
return true;
}



}
</script>

<script>
 function border2(){ document.getElementById("confirmpassword").style.border="1px solid #545957";
	
}
</script>
	<div id="confirmwarn"class="infowarning" >Both Password should be matched!</div>
	<button class="button3" style="width:34vw;background-color:#46C17F;margin-top:3vw;" name="submit" onclick="return finalsubmit()" >GET STARTED</button>
	<script>
	function finalsubmit(){
		if(checkvalidation()===false ){
			return false;
		}
		if(checkvalidation2()===false ){
			return false;
		}
		if(checkinput1()===false ){
			return false;
		}
		if(checkinput2()===false ){
			return false;
		}
		if((document.getElementById('username').value).length <4 ){return false;}
	}
	
	</script>

	
	
	
	<p style="font-size:0.9vw;color:white;">By clicking below to sign up, you are agreeing to the Galleria <a>Terms of Service</a></p>

	


</form> </div>

<div id="infoLogin" style="clear:both;position:absolute;margin-top:12vw;margin-left:4vw;">
   <?php
   $remarks  =  isset($_GET['remark_login'])  ?  $_GET['remark_login']  :  '';
    
     if  ($remarks=='loginfailed')
{

   echo  '
<div style="clear:both;font-size:1.3vw;margin-top:-4vw;position:absolute; font-family:Comic Sans MS;"><p style="text-align:center;color:red;">
Incorrect Username or Password ! Please Try Again!</div>
 
';
       }
?>
<form action="LoginServer.php" method="post" autocomplete="off">
 
   <input type="text" class="enterinputs" placeholder="User Name" id="loginusername" name="usernamelogin" style="width:32.3vw;" required><br>
   
    <input type="password" class="enterinputs" placeholder="Enter Password" name="loginpassword" style="width:32.3vw;" required>
	<button class="button3" style="width:34vw;background-color:#46C17F;margin-top:3vw;" name="loginsubmit">LOG IN</button>
</form> <p><a href="">Forgotten Password? </a></p></div>
<script>
 var  signupcontent= document.getElementById('infosignup');
  var logincontent = document.getElementById('infoLogin');
   var tagcontent = document.getElementById('tagline1');
   var btn11 = document.getElementById('btn1');
  var btn12 = document.getElementById('btn2');
   btn12.onclick = function()
   { btn12.style.background = "#46C17F";
   btn11.style.background = "#3E594C";signupcontent.style.display = "none"; tagcontent.style.display ="none";
   logincontent.style.display ="block";
   document.title ="Galleria-Login";
   }
    btn11.onclick = function()
   { btn11.style.background = "#46C17F";
   btn12.style.background = "#3E594C";signupcontent.style.display = "block"; tagcontent.style.display ="block";
   logincontent.style.display ="none";
   document.title ="Galleria-SignUp";
   }
   
</script>
<script> 
 var  signupcontent= document.getElementById('infosignup');
  var logincontent = document.getElementById('infoLogin');
   var tagcontent = document.getElementById('tagline1');
   var btn11 = document.getElementById('btn1');
  var btn12 = document.getElementById('btn2');
      if ((window.location.href == 'http://localhost/projectgalleria/SignupLogin.php?remark_login=Users')||(window.location.href ==  'http://localhost/projectgalleria/SignupLogin.php?remark_login=loginfailed')) {
		   btn12.style.background = "#46C17F";
   btn11.style.background = "#3E594C";signupcontent.style.display = "none"; tagcontent.style.display ="none";
   logincontent.style.display ="block";
   document.title ="Galleria-Login";
		
           }
   
	

</script>

</div>
</div>



</body>	
</html>	 
<?php ob_end_flush(); 
?>   