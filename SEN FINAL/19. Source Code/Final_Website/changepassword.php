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
<tr >
<td class="span12" align="center">
<div class="span4"></div>
<div class="span4">
<h4>Change Password</h4>
</div>
</td>
</tr>


<tr>
<td class="span12" align="center">
<div class="span1"></div>
<div class="span7">
<form class="form-horizontal span8" method ="post" >  
        <fieldset >  
          
          <div class="control-group">  
            <label class="control-label" for="input01">Enter Old Password.</label>  
            <div class="controls">  
              <input type="password" class="input-xlarge" name="myoldpassword" id="input01">  
             
            </div>  
          </div> 
          
          <div class="control-group">  
            <label class="control-label" for="input01">New Password.</label>  
            <div class="controls">  
              <input type="password" class="input-xlarge" name="mynewpassword" id="input01"> 
               <p class="help-block">Password should be minimum 5 characters or digits.</p>   
            </div>  
          </div> 
          
           <div class="control-group">  
            <label class="control-label" for="input01">Confirm New password.</label>  
            <div class="controls">  
              <input type="password" class="input-xlarge" name="confirmpassword" id="input01">  
                
            </div>  
          </div> 
          
           <button name="passChange" class="btn btn-large btn-primary span3" type="submit" value="submit">Submit</button>
           
           <button class="btn btn-large span3" type="submit" value="reset" formaction="changepassword.php">Reset</button>
         
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name1="useraccount"; // Table name 
$tbl_name2="messageout";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
if(isset($_POST['passChange']))
{
// username and password sent from form 
//$mypassword=$_POST['mypassword']; 
$myoldpassword=$_POST['myoldpassword'];
$mynewpassword=$_POST['mynewpassword'];
$confirmpassword=$_POST['confirmpassword'];
// To protect MySQL injection (more detail about MySQL injection)
$myoldpassword = stripslashes($myoldpassword);
$mynewpassword = stripslashes($mynewpassword);
$confirmpassword = stripslashes($confirmpassword);
$myoldpassword = mysql_real_escape_string($myoldpassword);
$mynewpassword = mysql_real_escape_string($mynewpassword);
$confirmpassword = mysql_real_escape_string($confirmpassword);
$phn=$_SESSION['uname'];
$sql1="SELECT password from $tbl_name1 WHERE mobile ='$phn'";
$result = mysql_query($sql1);
$out=mysql_fetch_array($result);

if($out['password']!=$myoldpassword)
{ 
  echo "<script type='text/javascript'>alert('Enter correct Old password')</script>";
}
else if(strlen($mynewpassword)<5)
{
echo "<script type='text/javascript'>alert('Password length should be at least five characters')</script>";
}
else if($mynewpassword==$confirmpassword)
{
$sql2 = mysql_query("update $tbl_name1 set password ='$mynewpassword' where mobile='$phn'");
echo "<script type='text/javascript'>alert('Password Changed Successfully')</script>";
}
else 
{
echo "<script type='text/javascript'>alert('New Password and Confirm Password fields must match')</script>";
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
<a href="#">
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
</body>
</html>

