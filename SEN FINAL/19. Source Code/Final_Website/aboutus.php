<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E Gram Seva</title>
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
<div class = "span12">

<table class="table ">
<tbody>
<tr>
<td class="span12">
<div class="pre-scrollable">

<p><strong>E Gram Seva:</strong><br/>
E-Gram Seva is a web application which would automatically send daily updates regarding categories subscribed by our Users. The categories are related to relevant agricultural seeds prices, weather forecast and healthcare information. Since majority of rural population are deprived of  internet connectivity, the daily updates will be sent as short message services (SMS) to their mobile phones. The villagers can subscribe to one or more type of updates from above mentioned set of categories, in their native language.</p>
<p><strong>Yuva Unstoppable:</strong><br/>
Yuva unstoppable, founded on 4th July 2005 by Mr. Amitabh Shah, is a genesis of change. YUVA Unstoppable is a non-profit, non-government youth organization.
<br>Core focus of Yuva Unstoppable:
<br>Youth Empowerment , Education reformation , Knowledge Sharing and Value based Activity<br/>
Since our inception, we have strengthened in our commitment to make the impossible, possible. We inspire the youth to do "Random acts of kindness" like managing the traffic on roads, conducting teaching session for municipal kids, collecting books, stationery, clothes etc, distributing food to construction labors, tree plantation and many more. A slew of popular campaigns, all over India like "Pasti ki Masti", "English unstoppable" "College unstoppable", "Corporate unstoppable" and "School Unstoppable" have followed collaborating with youth in schools, colleges and corporate and bridging the gap of 'have' and 'have-nots'.
Yuva Unstoppable's partners include "What Can I Give Foundation", "GOONJ", "Times Foundation", "Microsoft", "Joy of giving week", "ASSOCHAM", "CII", "GCCI", "Delhi Public School". Dr. APJ Abdul Kalam, Sri Sri Ravi Shankar, Sri Narendra Modi, Srimati Indu Jain are few of our mentors who guide us from time to time.
</br>
</p>
</div>

</td>
</tr>
</tbody>
</table>
</div>
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
<script src="js/bootstrap-dropdown.js"></script>  
<script src="js/application.js"></script> 

</body>
</html>