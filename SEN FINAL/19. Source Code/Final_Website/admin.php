<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php session_start(); if($_SESSION['loggedin']==false) {header("location:../index1.php");}?>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E gram Seva</title>
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
            <li><a href="signout.php">Sign Out</a></li>
            </div>
            
             <div class="span1">   
            <li><a href="#"><small> Welcome, Admin </small></a></li> 
            </div> 
             
         
  
</ul>  
</div>  
</div>


<div class="row">  



<table class="table">
<tbody>
<tr>
<td width="634" class="span2">

<br/>

<dl>
<form class="form-horizontal span2" method="post" action="mainlogin.php" >  
<dd><strong><a href="Categoryanalysis.php" target = "_blank" onclick = "window.open(&quot;Monthanalysis.php&quot;);">Statistics</strong></a></dd>
<br/>
<br/>
<dd><strong><a href="sendText.php" >Send SMS</strong></a></dd>
</form>
</dl>
</td>
<td width="488" class="span4">
<br/>

<p><strong>Statistics:</strong><br/>
The Statistics tab generates the graphs related to relevant information for statistical analysis of the users by the admin in accordance with<br/>
(i)the month-wise subscription of our software.<br />
(ii)category wise subscription of our software. <br/>
</p>
</td>
</tr>
</tbody>
</table>

</div>
<div class="row">  
<div class="span12"> 
<table class ="table">
<tbody> 
<tr>
<td class ="span2">
</td>
<td class ="span2">
<a href="yuvaunstoppable.org">
<img src="img/yuva.png" class="img-rounded"  class="span1"/></a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  
<script src="js/jquery.js"></script>  
<script src="js/bootstrap-dropdown.js"></script>  
<script src="js/bootstrap-scrollspy.js"></script>
</body>
</html>

