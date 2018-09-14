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
<title>Galleria|Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" type="image/png" href="logo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
    #header {height:13vh;}
	#contain1 {clear:both;}
	a{color:black;
		  text-decoration: none;
		  }
	 a:hover{color:grey;cursor: pointer;}	  
    .button1{background-color:white;border:1px solid black; padding:0.5vw;cursor: pointer;font-size:1.1vw;box-shadow:2px 2px 4px 1px grey; }
	.button2{background-color:#22E87E;border:1px solid #22E87E ; padding:.8vw;cursor: pointer;width:15vw;font-size:1.1vw;box-shadow:2px 2px 4px 1px green; }
	.button2:hover{background-color:#46C17F}
	.button3{background-color:white;border:1px solid black; padding:0.5vw;cursor: pointer;width:15vw;font-size:1.1vw;box-shadow:2px 2px 2px 0 green; }
	 p {
	     
		  font-size:1.3vw;
		 }
		  
	h1{
		  
		  font-size:1.8vw;
		 }
		 h2{
		  
		  font-size:1.2vw;
		 }
	
	body{ background-image:url(images/body9.jpg);
    background-repeat:no-repeat;}
	.fa:hover{box-shadow:1px 1px 1px 1px grey;}
	#loginadminuser{float:left;margin-left:16vw;position:absolute;background:silver;height:4vw;padding:1vw;padding-top:2vw;display:none;}
</style>
<script type="text/javascript">
   var image1=new Image()
   image1.src="images/image1.jpg"
    var image2=new Image()
   image2.src="images/image2.jpg"
    var image3=new Image()
   image3.src="images/image3.jpg"
    var image4=new Image()
   image4.src="images/image4.jpg"
    var image5=new Image()
   image5.src="images/image5.jpg"
   </script>
</head>
<body>
<div id="header">
<div style="float:left;margin-left:1.5vw;"><h1 style="font-family:Californian FB;text-shadow: 2px 2px white;"> G A L L E R I A </h1></div>
<div style="float:right;margin-top:2vw;margin-right:1.5vw">
<a href="" style="margin-right:2vw;font-size:1vw;text-shadow: 1px 1px silver;">E X A M P L E S</a>
<a href="" style="margin-right:2vw;font-size:1vw;text-shadow: 1px 1px silver;">T U T O R I A L S</a>
<button id="logadmuse" class="button1" onclick="adminuser()"><b>LogIn</b></button>
<div id="loginadminuser" >
<a href="adminlogin.php"><button class="button1"><b>Admin</b></button></a>
<a href="SignupLogin.php?remark_login=Users"><button class="button1" style="margin-left:1vw;"><b>User</b></button></a>
</div>
<script>
var ladus =document.getElementById('loginadminuser');
var ladusbtn =document.getElementById('logadmuse');
function adminuser(){
	if(ladus.style.display=="block"){
	ladus.style.display="none";}
	else{
		ladus.style.display="block"
	}
}
</script>
<a href="SignupLogin.php?remark_signup=NewUsers"><button class="button1"><b>SignUp </b></button></a>
</div>

</div>
<div id="contain1"><center><h1>
GALLERY AT YOUR FINGERTIPS</h1>
<p>The better way for modern photographers to share, deliver, proof and sell online.</p>
<button class="button2"> <a href="SignupLogin.php?remark_signup=NewUsers" style="color:white;">GET STARTED</a></button>
<p style="font-size:.8vw;color:grey;">FREE FOREVER<b>.</b> WIN CONTEST FOR UPGRADE YOUR PROFILE!</p>
<div >
<image src="image1.jpg"  name="slide" style="width:60vw;height:40vw;object-fit:cover;box-shadow:2px 4px 2px 0 black" />
		           <script type="text/javascript">
		                  var step=1
		                  function slideit(){
		                  document.images.slide.src=eval("image"+step+".src")
		                  if(step<5)
		                  step++
		                  else
		                  step=1
		                  setTimeout("slideit()",2000)
		                  }
		                  slideit()
		            </script>
</div>
<h1>DESIGNED TO IMPRESS</h1><p>
Dedicated online photo gallery for each of your clients, with beautiful cover and layout right out of the box.</p>
<div style="display:inline-block;"><button id="btn1" class="button3"  style="background-color:#46C17F;color:white;">PERSONALIZED COVER</button></div>
<div style="display:inline-block;"><button id="btn2" class="button3"   > GALLERY </button></div>
<div style="display:inline-block;"><button id="btn3" class="button3"  >YOUR SPACE</button></div></center>
<div style="float:left;margin-top:2vw;margin-left:18vw;position:relative;"><image src="images/background.jpg" style="width:60vw;position:absolute;"/>
<image src="images/amaze.jpg" id="setimg" style="position:absolute;width:56vw;height:36vw;margin-top:2vw;margin-left:2vw;object-fit:cover;"/>
</div>
<script>
 var btn11 = document.getElementById('btn1');
  var btn12 = document.getElementById('btn2');
   var btn13 = document.getElementById('btn3');
   
   btn12.onclick = function()
   { btn12.style.color = "white";btn12.style.background = "#46C17F";btn11.style.color = "black";
   btn11.style.background = "white";btn13.style.color = "black";btn13.style.background = "white";
   document.getElementById('setimg').src = "images/backks.jpg";
   }
    btn11.onclick = function()
   { btn11.style.color = "white";btn11.style.background = "#46C17F";btn12.style.color = "black";
   btn12.style.background = "white";btn13.style.color = "black";btn13.style.background = "white";
   document.getElementById('setimg').src = "images/amaze.jpg";
   }
    btn13.onclick = function()
   { btn13.style.color = "white";btn13.style.background = "#46C17F";btn11.style.color = "black";
   btn11.style.background = "white";btn12.style.color = "black";btn12.style.background = "white";
   document.getElementById('setimg').src = "images/space.jpg";
   }
</script>

<div style="background-image:url(images/background1111.jpg);width:100%;clear:both;margin-top:50vw;position:relative;"><center>
<h1>JOIN THE SOCIAL ERA</h1>
<p>Your clients love to share pictures, and we make it easy for them. Let your brand be social.</p>
<p style="margin-left:-55vw;margin-top:10vw;font-size:0.8vw;"><i  style="font-size:1.2vw;"class="fa">&#xf0a1;</i><br>YOUR BRAND<br> ON EVERY GALLERY</p>
<p style="margin-left:60vw;font-size:1vw;">    <i class="fa fa-facebook" style="background-color: #3b5998;color:white;padding :.8vw;width:2vw;font-size:2vw;"> </i>
             <i title="Google +"  class="fa fa-google-plus" style="background-color: #d34836;color:white;padding :.8vw;width:2vw;font-size:2vw;"></i>
             <i title="Twitter"  class="fa fa-twitter" style="background-color: #0084b4;color:white;padding: .8vw;width:2vw;font-size:2vw;"></i>
			 <i title="Instagram"  class="fa fa-instagram" style="background-color:#125688;color:white;padding: .8vw;width:2vw;font-size:2vw;"></i>
			 <i title="Pinterest"  class="fa fa-pinterest" style="background-color:#cb2027;color:white;padding: .8vw;width:2vw;font-size:2vw;"></i><br><br>
			 SOCIAL SHARING BUILT-IN </p>

<p style="margin-left:-45vw;margin-top:15vw;font-size:0.8vw;"><i  style="font-size:1.5vw;"class="fa">&#xf10b;</i><br>DESIGNED FOR <br>THE MOBILE <br>GENERATION</p>

<image src="images/1.jpg" style="width:40vw;margin-top:-38vw;"/>
</center>
</div>
<div style="clear:both;margin-top:2vw;"><center><h1>THE MODERN WORKFLOW</h1><p>
Welcome to the new age of digital delivery. No DVDs, no USB drives. Instant digital download for all.</p></center><div style="float:left;margin-left:20vw;">
 <image src="images/download.jpg" style="width:28vw;"> </div><div style="float:left;margin-left:10vw;"><center>
 <h1 style="font-size:1.3vw"> DELIVER VIA<span style="color:red;"> DOWNLOAD</span></h1>

<p style="font-size:1vw;text-align:center;">Allow clients to download their photos directly from your professional gallery.</p></center>
<span style="font-size:1vw;"><i  style="font-size:1.2vw;color:green;"class="fa">&#xf00c; </i> Fast & Secure</span>
<span style="font-size:1vw;margin-left:6vw;"><i  style="font-size:1.2vw;color:green;"class="fa">&#xf00c; </i> Full control on sizes</span><br>
<span style="font-size:1vw;"><i  style="font-size:1.2vw;color:green;"class="fa">&#xf00c; </i> Track Who and When</span>
<span style="font-size:1vw;margin-left:3vw;"><i  style="font-size:1.2vw;color:green;"class="fa">&#xf00c; </i> Delivery to/from anywhere</span>

</div>


</div>
<div style="clear:both;margin-top:23vw;background:#F1EEEE;height:20vw;"><center>
<h1 >YOUR 24/7 PRINT STORE</h1>
<p>Selling photos online has never been easier. Have full control over pricing, products and fulfillment.</p>
<span style="float:left;margin-left:15vw;"> <p style="border:1px solid black;padding:1px;width:8vw;background:white;color:green;">&#8377; 10,000</p><br>
<h2>SET YOUR PRICE</h2><p style="font-size:1vw">Have full control over your pricing and products.</p></span>
<span style="float:left;margin-left:5vw;">
<h1 style="color:green;">0 %</h1><br><h2>COMMISSION FREE</h2><p style="font-size:1vw">Sell photography with 0% commission for<br> upgraded accounts.</p></span>
<span style="float:left;margin-left:5vw;"><image src="images/paytm.jpg" style="width:9vw;" />
<br><br><h2>YOUR LAB OR OURS</h2><p style="font-size:1vw">Fulfill with our integrated partner, or at your<br> own lab.</p></span>
</center>


</div>
<center><div style="clear:both;margin-top:5vw;"><h1>
CREATE YOUR FIRST GALLERY NOW.</h1>
<p>Free forever. Upgrade when you need to.</p>
<button class="button2"> <a href="SignupLogin.php?remark_signup=NewUsers" style="color:white;">GET STARTED</a></button></div>
</center></div>
<div style="background:#171313;height:20vw;width:100%;margin-top:2vw;"> <div style="float:left;margin-left:20vw;"> <p style="color:grey;">PRODUCT</p>

<a style="color:white;font-size:1vw;" href=""> Example </a><br><br>
<a style="color:white;font-size:1vw;" href=""> Upgrade </a><br><br>
<a style="color:white;font-size:1vw;" href=""> Tutorials</a></div>
<div style="float:left;margin-left:10vw;height:15vw;"> <p style="color:grey;">COMPANY</p>
<a style="color:white;font-size:1vw;" href=""> About Us </a><br><br>
<a style="color:white;font-size:1vw;" href=""> Terms And Conditions </a><br><br>
<a style="color:white;font-size:1vw;" href=""> Help & Support </a><br><br>
<a style="color:white;font-size:1vw;" href=""> Privacy Policy</a></div> 
<div style="float:left;margin-left:10vw;"> <p style="color:grey;">CONNECT</p>
<a href="http://www.facebook.com"title="Facebook"class="fa fa-facebook" style="background-color: #3b5998;color:white;padding :.8vw;width:1vw;font-size:1vw;"> </a>
 <a href="http://www.google.com"title="Google +"  class="fa fa-google-plus" style="background-color: #d34836;color:white;padding :.8vw;width:1vw;font-size:1vw;"></a>
 <a href="http://www.twitter.com"title="Twitter"  class="fa fa-twitter" style="background-color: #0084b4;color:white;padding: .8vw;width:1vw;font-size:1vw;"></a><br><br>
 <a href="http://www.instagram.com"title="Instagram"  class="fa fa-instagram" style="background-color:#125688;color:white;padding: .8vw;width:1vw;font-size:1vw;"></a>
 <a href="http://www.pinterest.com"title="Pinterest"  class="fa fa-pinterest" style="background-color:#cb2027;color:white;padding: .8vw;width:1vw;font-size:1vw;"></a></div>
<div style="clear:both;width:80%;border-bottom:.1vw solid grey;margin-top:5vw;margin-left:10%;"> </div><center><p style="color:grey;font-size:0.8vw;">
<i style="font-size:1vw;" class="fa">&#xf1f9;</i>2017 Galleria Inc. Made with love in Vancity.</p></center>
</div>








</body>
</html>