<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
$adminno="admin";
session_start(); if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) 
{
if($_SESSION['uname']==$adminno){header("location:../admin.php");}
else {header("location:../user.php");}
}?>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E Gram Seva</title>
<style>  
.span12 h1{color:#FE6E4C; font-weight: bold; padding: 5px;}  
h3 {margin: 10px 0 10px 0;}  
body {background-color:#FFFFFF; background-image:url(img/background1.jpg);background-size:cover; background-repeat:no-repeat;
z-index:-1;}
#img1{z-index:0}

 </style>
</head>

<body>
<script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  
<script src="js/bootstrap-dropdown.js"></script>  
<script src="js/application.js"></script> 

<div class="container" >  
<div class="row" >  
<div class="span12"> 
<div class="span2"></div>
<img src="img/logo.png"  width="600" height="45" id="img1"></img>   
</div>  
</div>  
<br/>
<br/>
<div class="row">  
<div class="span12">  
<ul class="nav nav-tabs "   style="background-color:#F0F0F0">  
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


<div class="row"   >  
<div class = "span12">

<table class="table " >
<tbody>
<tr>
<td class="span8">

<p style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:16px ; line-height:180%"><strong><br/>
E-Gram Seva is a service which automatically sends daily updates according to the users. The user can subsscribe to various categories, namely, seeds prices, weather forecast and healthcare information. The daily updates will be sent as Short Message Service (SMS) to their mobile phones. The villagers can subscribe to one or more type of updates from above mentioned set of categories. These messsages are translated for the convenience of the users. 
</p>
</td>
<td class="span4">
<table class="table">
<tbody>
<?php
    include('rssclass.php');
	$feedlist = new rss('http://feeds.feedburner.com/AgricultureMarketCommentary');
	echo $feedlist->display(5,"Latest News:<br/><br/>");
  ?> 

</td>
</tbody>
 </table>
</td>
</tr>
 </tbody>
 </table>
 </div>
 </div>


<div class="row" >
<div class="row"></div>  
<div class="span10"> 
<table class ="table">
<tbody> 
<tr>
<td class ="span2">
</td>
<td class ="span2" >
<a href="yuvaunstoppable.org"><br/>
<img src="img/yuva.png" class="img-rounded"  class="span3" width="360" height="200" /></a>
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
</body>

</html>
