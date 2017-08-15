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
<script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  
<script src="js/bootstrap-dropdown.js">
</script>  
<script src="js/application.js"></script> 
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

<table class="table">
<tbody>
<tr>
<td class="span8">
<div class="span4">
<h4><br/><br/><br/><strong>Weather report</strong></h4>
</div>
<div class="span7">
<div class="row"> 
<div class = "span12">
 

</div>
</div>
 
<p>Subscribe to this option to receive regular weather forecast: general conditions, temperature and wind speed.  <br/>

</p><br/>
<form class="form-horizontal" >  
        <fieldset >  
        
          
           <button class="btn btn-large btn-primary" type="submit" formaction="weatherP.php">Subscribe</button>
           </fieldset>
          
          
          
         
        
</form>


           
</td>


<td class="span4">
<table class="table">
<tbody>
<tr>
<br/>
<br/>
<th align="center"><strong > Latest Weather Forecast</strong></th>
</tr>
<tr>
</div> 
<div class="span3">
<a href="http:www.wunderland.com" >
<img src="img/wunderland.png" class="img-rounded" /></a>
</div>
</div>
</tr>
<td>
<?php
  function getFeed($feed_url) {  
      
    $content = file_get_contents($feed_url);  
    $x = new SimpleXmlElement($content);  
      
    echo "<ul>";  
      
    foreach($x->channel->item as $entry) {  
        echo "<li><a href='$entry->link' title='$entry->title' target='_blank'>" . $entry->title . "</a></li>";  
    }  
    echo "</ul>";  
}  
  getFeed("http://weather.yahooapis.com/forecastrss?w=2295126");
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
</body>

</html>

