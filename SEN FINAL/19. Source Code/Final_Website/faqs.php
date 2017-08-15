<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>  
.span12 h1{color:#FE6E4C; font-weight: bold; padding: 5px;}  
h3 {margin: 10px 0 10px 0;}  
body {background-color:#FFFFFF; background-image:url(img/background1.jpg);background-size:cover; background-repeat:no-repeat;
z-index:-1;}
 </style>
</head>

<body>

<div class="container">  
<div class="row">  
<div class="span12">  
<div class="span2"></div>
<img src="img/logo.png"  width="600" height="45" id="img1"></img>   
</div>  
 </div>
<br/>
<br/> 
<div class="row"> 
<div class="span12">  
<ul class="nav nav-tabs "  style="background-color:#F0F0F0">  
         <div class="span2"> 
        <li class="active"><a href="index1.php">Home</a></li>  
        </div>
         <div class="span2"> 
        <li><a href="aboutus.php">About Us</a></li>
        </div>
         <div class="span2">  
        <li class="dropdown">  
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Subscription<b class="caret"></b></a>  
          <ul class="dropdown-menu">  
             <li><a href="commodity.php">Commodity Prices</a></li>  
            <li><a href="weather.php">Weather Report</a></li>  
            <li><a href="healthcare.php">Healthcare</a></li>   
              
          </ul>  
         </li> 
         </div> 
        
            <div class="span2"> 
            <li><a href="faqs.php">FAQ</a></li>
            </div>
             
			 <div class="span2">  
			 <?php
			session_start();
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			echo "<li><a href='signout.php'>Sign Out</a></li>";
			 }
			 else {
            echo "<li><a href='register.php'>Register</a></li>";
			}
			
            echo "</div>";
			
             echo "<div class='span1'>";
			 
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			echo "<li><a href='#'><small>Welcome, ".$_SESSION['uname']."</small></a></li>";
			 }
			 else {
			 echo "<li><a href='signin.php'>Sign In</a></li>";
			} 
			?>
            </div> 
         
  
</ul>  
</div>  
</div>


<div class="row">  


<table class="table">
<tbody>
<tr>
<td class="span12">

<div class="pre-scrollable">


<div class=" well-large"><p><strong>FAQ1:</strong><br/>
<b>Q.</b>How to register?
<br><b>A.</b>  
Send an SMS from your mobile. The format is “REG(space)1 2 3 where 1, 2 and 3 are categories of information for seed prices, weather and health care respectively. You can also signup on the website by clicking on signup and following the instructions that follow.
</br>
</p><br/></div>

<div class=" well-large"><p><strong>FAQ2:</strong><br/>
<b>Q.</b>How do I change my password?
<br><b>A.</b> To change password, after logging into your account, go to the menu option “Change Password” in the bottom right corner of the page. You will be directed to the page where you can enter the old and new password in the respective fields.
</br>
</p><br /></div>


<div class="well-large"><p><strong>FAQ3:</strong><br/>
<b>Q.</b>What to do if i forget my password?
<br><b>A.</b>
Go to the menu option “Forgot Password?” on the Sign In page, you will be directed to a page where you will have to enter your mobile number. Click on “Okay”. The password will be sent on that number.</br></p>
</br>
</div>


<div class="well-large"><p><strong>FAQ4:</strong><br/>
<b>Q.</b>How do I subscribe to new categories?
<br><b>A.</b> Follow the same message format as for registering for the first time. Mention all the categories you want to subscribe to in this REG message.You can also change your subscription from website by goin to Subscriptions or the Edit Subscriptions option in the bottom right corner of the page after logging in.
</br>
</p>
</br>
</div>

</div>

</td>
</tr>
</tbody>
</table>

</div>

<br/>


<div class="row" >  
<div class="span12"> 
<table class ="table">
<tbody> 
<tr>
<td class ="span2">
</td>
<td class ="span2">
<a href="yuvaunstoppable.org">
<img src="img/yuva.png"class="img-rounded"  class="span1"/></a>
</td>

<td class="span4"  > 
<address>
<br/>

<a href="mailto:us@example.org">positiverishikumar@gmail.com</a><br>
Address: Sector 21,Gandhinagar,opposite Akshardam Travels<br>
Phone: +091-97230-10958
</address>   
</td>
</tr>
</tbody>
</div>
</div>

</div>
<script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  
<script src="js/bootstrap-dropdown.js">
</script>  
<script src="js/application.js"></script> 
<script src="js/bootstrap-scrollspy.js">
</body>
</html>
