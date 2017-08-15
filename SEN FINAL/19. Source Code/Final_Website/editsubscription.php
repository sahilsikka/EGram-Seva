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
			?>
            </div> 
			
              <div class="span1">   
            <li><a href="#"><small>Welcome, <?php  echo $_SESSION['uname']; ?></small></a></li> 
            </div> 
          
             
         
  
</ul>  
</div>  
</div>


<div class="row">  
<div class = "span12">

<table class="table">
<tbody>
<tr>
<td class="span12" align="center">
<div class="span4"></div>
<div class="span4">
<h4>Change Subscriptions</h4>
<p>Note: Not checking any box will de-register you from the service and delete your website account.</p>
</div>
</td>
</tr>


<tr>
<td class="span12" align="center">
<div class="span1"></div>
<div class="span7">
<form class="form-horizontal span8" method="post" >  
        <fieldset >  
            
          <div class="control-group" >  
            <label class="control-label" for="optionsCheckbox">Subscription</label>  
            <div class="controls">  
              <label class="checkbox">  
                <input type="checkbox" id="optionsCheckbox" name="subs[]" value="optionCrop">  
                Crop-Prices  
              </label> 
              <label class="checkbox">  
                <input type="checkbox" id="optionsCheckbox" name="subs[]" value="optionWeather">  
                Weather Bulletin
              </label> 
              <label class="checkbox">  
                <input type="checkbox" id="optionsCheckbox" name="subs[]" value="optionHealth">  
                Healthcare News
              </label>  
            </div>  
          </div> 
           
          
           <button name="ChangeButton" class="btn btn-large btn-primary span3" type="submit" value="send">Change</button>
           
           <button class="btn btn-large span3" type="reset" value="reset">Reset</button>
         			<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name1="useraccount"; // Table name 
$tbl_name2="temp_main_db";

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
//session_start();
$c=0;$w=0;$h=0;
// username and password sent from form 
if(isset($_POST['ChangeButton']))
{
foreach($_POST['subs'] as $val)
{
	if($val=="optionCrop") {$c=1;} 
	if($val=="optionWeather") {$w=2;}
	if($val=="optionHealth") {$h=3;} 
} 
	$newS="";
	if($c==0 && $w==0 && $h==0)
	{
		$n=$_SESSION['uname'];
		$q="DELETE FROM $tbl_name1 WHERE mobile='$n';";
		$res=mysql_query($q);
		$q="DELETE FROM $tbl_name2 WHERE mobile='$n';";
		$res=mysql_query($q);
		//echo "<script type='text/javascript'>alert('Account Deleted')</script>";
		$_SESSION['loggedin'] = false;
		session_destroy();
		header("location:../index1.php");
	}
	else
	{
	$n=$_SESSION['uname'];
	$res1=mysql_query("DELETE FROM $tbl_name2 WHERE mobile='$n';");
	if($c==1) 
	{
		$newS=$newS.$c;
		$q="INSERT INTO $tbl_name2 VALUES ('$c','$n');";
		$res2=mysql_query($q);
	}
	if($w==2) 
	{
		$newS=$newS.$w;
		$q="INSERT INTO $tbl_name2 VALUES ('$w','$n');";
		$res2=mysql_query($q);
	}
	if($h==3) 
	{
		$newS=$newS.$h;
		$q="INSERT INTO $tbl_name2 VALUES ('$h','$n');";
		$res2=mysql_query($q);
	}
	$q="UPDATE $tbl_name1 SET subs='$newS' WHERE mobile='$n';";
	$res3=mysql_query($q);
	//header("location:../editsubscription.php");
	echo "<script type='text/javascript'>alert('Subscription Changed Successfully')</script>";
	}
	}
	
	?>
        </fieldset>  
</form>
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
