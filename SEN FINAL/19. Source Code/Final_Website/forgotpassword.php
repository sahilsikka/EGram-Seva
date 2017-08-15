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
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Subscription <b class="caret"></b></a>  
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

<table class="table">
<tbody>
<tr>
<td class="span8">


<div class="span1"></div>
<div class="span7"><br/>
<form class="form-horizontal span8" method = "post" >  
        <fieldset >  
        
           <h4 align="center">Forgot Your Password?</h4>
           <p>Please enter your registered mobile number. The password will be sent on your phone.</p>
            
          <div class="control-group">  
            <label class="control-label" for="input01"> Enter Phone NO.</label>              
            <div class="controls">  
              <input type="text" value="+91" class="input-xlarge" name="myphoneno" id="input01"><br/>
              
                
          </div><br/>
          
          <div class="span2"></div>
          
          <div class="span1">
          <button name="forgotButton" class="btn btn-large btn-primary span3" type="submit">Submit</button> 
          </div> 
<?php
$ServiceNumber="+919624122862";		//add the Service Number here
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name1="useraccount"; // Table name 
$tbl_name2="messageout";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myphoneno=$_POST['myphoneno']; 


// To protect MySQL injection (more detail about MySQL injection)
$myphoneno = stripslashes($myphoneno);
//$mypassword = stripslashes($mypassword);
$myphoneno = mysql_real_escape_string($myphoneno);
//$mypassword = mysql_real_escape_string($mypassword);
if(isset($_POST['forgotButton']))
{
$sql1="SELECT password FROM $tbl_name1 WHERE mobile ='$myphoneno' ";
$result = mysql_query($sql1);
$pass = mysql_fetch_array($result);
if($pass['password']=="")
{
echo "<script type='text/javascript'>alert('Enter the correct phone number.')</script>";
}
else{
// If result matched $myphoneno and $mypassword, table row must be 1 row
$sql2="INSERT INTO $tbl_name2 (messagefrom, messageto, messagetext) VALUES ('$ServiceNumber','$myphoneno','$pass[0]')";
$count = mysql_query($sql2);
echo "<script type='text/javascript'>alert('Password sent to your mobile phone.')</script>";
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

