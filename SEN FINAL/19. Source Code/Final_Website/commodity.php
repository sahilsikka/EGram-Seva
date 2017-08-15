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

<table class="table">
<tbody>
<tr>
<td class="span8">


<div class="span1"></div>
<div class="span7"><br/>
<p ><h4><strong>Commodity</strong></h4><br/>
Subscribe to this option to receive regular updates regarding the prices of various crops in the local markets near you
</p><br/>
<form class="form-horizontal" action="commodityP.php">
        <fieldset >  
        
          
           <button class="btn btn-large btn-primary" type="submit" formaction="commodityP.php">Subscribe</button>
         </fieldset>
</form>
</div>
           
</td>


<td class="span4">
<table class="table table-striped table-hover">
<tbody>
<tr>
<th align="center" colspan="3"><strong > Latest Crop Prices</strong></th>
</tr>
<div>
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name1="ex"; // Table name 
//$tbl_name2="temp_main_db";
// Connect to server and select databse.
mysql_connect("$host", "$username","$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
  //include('rssclass.php');
  //$feedlist = new rss('http://feeds.feedburner.com/AgricultureMarketCommentary');
   //echo $feedlist->display(5,"News");
   $res1=mysql_query("SELECT seeds, price FROM $tbl_name1 WHERE price!='';");
   $res2=mysql_query("SELECT seeds, New FROM $tbl_name1 WHERE New!='';");
   $res3=mysql_query("SELECT seeds, new1 FROM $tbl_name1 WHERE new1!='';");
   //$row1
   //$row2=mysql_fetch_array($res2);
   //$row3=mysql_fetch_array($res3);
  // echo "<table>";
   echo "<tr><th >Crop<th/><th >Price(Rs/Quintal)<th/><tr/>";
   while($row1=mysql_fetch_array($res1)){
				echo "<tr ><td >".$row1[0]."<td/><td >".$row1[1]."<td/><tr/>";
			}
			while($row2=mysql_fetch_array($res2))
			{
				echo "<tr ><td >".$row2[0]."<td/><td >".$row2[1]."<td/><tr/>";
			}
			while($row3=mysql_fetch_array($res3))
			{
				echo "<tr ><td >".$row3[0]."<td/><td >".$row3[1]."<td/><tr/>";
			}
			echo "</table>";
  ?> 
  </div>


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
<a href="#">
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

