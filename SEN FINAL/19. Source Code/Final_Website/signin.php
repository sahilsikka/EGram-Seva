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
<script src="js/bootstrap-dropdown.js"></script>  
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
            <li><a href="register.php">Register</a></li>
            </div>
            
             <div class="span1">   
            <li><a href="signin.php">Sign In</a></li> 
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


<div class="span1"></div>
<div class="span1"></div>
<div class="span9"><br/>
<form class="form-horizontal span8" method="post" >  
        <fieldset >  
            
          <div class="control-group">  
            <label class="control-label" for="input01">Phone NO.</label>  
            <div class="controls">  
              <input type="text" value="+91" class="input-xlarge" name ="myphoneno" id="input01">  
                
          </div><br/> 
          <div class="control-group">  
            <label class="control-label" for="input01">Enter Password</label>  
            <div class="controls">  
              <input type="password" class="input-xlarge" name ="mypassword" id="input01">  
             </div>  
             </div>
         <button name="SigninButton" class="btn btn-large btn-primary span3" type="submit" >Sign In</button>
		 <button class="btn btn-large  span3" type="submit" formaction="forgotpassword.php">Forgot Password</button>
<?php
$adminno="admin"; //add admin's number here
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="useraccount"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
if(isset($_POST['SigninButton']))
{
// username and password sent from form 
$myphoneno=$_POST['myphoneno']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myphoneno = stripslashes($myphoneno);
$mypassword = stripslashes($mypassword);
$myphoneno = mysql_real_escape_string($myphoneno);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT mobile , password FROM $tbl_name WHERE mobile='$myphoneno' and password='$mypassword'";
$result=mysql_query($sql);


// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_start();
$_SESSION['loggedin']=true;
$_SESSION['uname'] = $myphoneno;
// session_register("mypassword"); 
//echo"success";
$adpass=mysql_query("SELECT password FROM $tbl_name WHERE mobile='$adminno'");
$adpassA= mysql_fetch_array($adpass);
if($myphoneno==$adminno && $mypassword==$adpassA[0])
{
 header("Location:../admin.php");
}
else {
 header("Location:../user.php");
//<a href="luser.php"></a> 
}
}

else {
echo "<script type='text/javascript'>alert('Incorrect Password/Phone no.')</script>";
}
}
?>


           
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
</body>

</html>
