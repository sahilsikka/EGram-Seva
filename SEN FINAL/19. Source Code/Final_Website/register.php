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
<td class="span12" align="center">

<div class="span4"></div>
<div class="span4">
<h4>Register for Mobile updates</h4>
</div>
</td>
</tr>


<tr>
<td class="span12" align="center">
<div class="pre-scrollable">
<div class="span1"></div>
<div class="span7">
<form class="form-horizontal span8" method = "post" >  
        <fieldset >  
            
          <div class="control-group">  
            <label class="control-label" for="input01">Phone NO.</label>  
            <div class="controls">  
              <input type="text" value="+91" class="input-xlarge" name="myphoneno" id="input01">  
              <p class="help-block">Only Enter 10 digit mobile no.</p>  
            </div>  
          </div>  
          
          <div class="control-group">  
            <label class="control-label" for="input01">Enter Password</label>  
            <div class="controls">  
              <input type="password" class="input-xlarge" name="mypassword" id="input01">  
              <p class="help-block">Password should be minimum 5 characters.</p>  
            </div>  
          </div> 
          
          <div class="control-group">  
            <label class="control-label" for="input01">Confirm Password.</label>  
            <div class="controls">  
              <input type="password" class="input-xlarge" name="confirmpassword" id="input01">  
            </div>  
          </div> 
          <div class="control-group">  
            <label class="control-label" for="optionsCheckbox">Subscription</label>  
            <div class="controls">  
              <label class="checkbox">  
                <input type="checkbox"  id="subs[]" name="sub[]"  value="optionCrop">  
                Crop-Prices  
              </label> 
              <label class="checkbox">  
                <input type="checkbox" id="subs[]" name="sub[]" value="optionWeather">  
                Weather Bulletin
              </label> 
              <label class="checkbox">  
                <input type="checkbox" id="subs[]"name="sub[]" value="optionHealth">  
                Healthcare News
              </label>  
            </div>  
          </div> 
           
          
           <button name="RegButton" class="btn btn-large btn-primary span3" type="submit" value="submit" >Register</button>
           
           <button class="btn btn-large span3" type="reset" value="reset">Reset</button>
          
         <?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name1="useraccount"; // Table name 
$tbl_name2="temp_main_db";
// Connect to server and select databse.
mysql_connect("$host", "$username","$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
date_default_timezone_set("Asia/Calcutta");

// username and password sent from form 
if(isset($_POST['RegButton']))
{
$myphoneno=$_POST['myphoneno'];
$mypassword=$_POST['mypassword'];
$confirmpassword = $_POST['confirmpassword'];



// To protect MySQL injection (more detail about MySQL injection)
$myphoneno = stripslashes($myphoneno);
$mypassword = stripslashes($mypassword);
$confirmpassword = stripslashes($confirmpassword);
$myphoneno = mysql_real_escape_string($myphoneno);
$mypassword = mysql_real_escape_string($mypassword);
$confirmpassword = mysql_real_escape_string($confirmpassword);

$newS = "";
$c=0;
$w=0;
$h=0;

// username and password sent from form 
//if(isset($_POST['sub'])){
	foreach($_POST['sub'] as $val)
	{
	if($val=="optionCrop") {$c=1;} 
	if($val=="optionWeather") {$w=2;}
	if($val=="optionHealth") {$h=3;} 
	} 
    if($c==0 && $w==0 && $h==0)
	{
	echo "<script type='text/javascript'>alert('Please subscribe to at least one service')</script>";
	}
	else
	{
	if($c==1) 
	{
		$newS=$newS.$c;		
	}
	if($w==2) 
	{
		$newS=$newS.$w;
	}
	if($h==3) 
	{
		$newS=$newS.$h;
	}
 // }
}
 
  $date = date("d-m-Y");
  $time = time("h-m-s");
  $localtime =  localtime();
  if(strlen($localtime[0])==1) {$localtime[0]="0".$localtime[0];}
  if(strlen($localtime[1])==1) {$localtime[1]="0".$localtime[1];}
  if(strlen($localtime[2])==1) {$localtime[2]="0".$localtime[2];}
  $t=$localtime[2].":".$localtime[1].":".$localtime[0];
  
   $lp=strlen($mypassword);
   $lu=strlen($myphoneno);
   if( $lp < 5)
    {
	 echo "<script type='text/javascript'>alert('Password too short.')</script>";
	}
   if( $lu != 13  )
    {
	 echo "<script type='text/javascript'>alert('Phone No. should have 10 digits.')</script>";
	}
	if($mypassword!=$confirmpassword )
	{
	echo "<script type='text/javascript'>alert('Confirm password does not match the password')</script>";
	}
	if($mypassword==$confirmpassword && $lp>=5 && $lu==13 && !($c==0 && $w==0 && $h==0))
	{
	 $datetime = $date." ".$t;
	 $flag=0;
	 $phnres=mysql_query("select mobile from $tbl_name1");
	 while ($row = mysql_fetch_array($phnres, MYSQL_ASSOC)) {
      if($row['mobile']==$myphoneno)
	  {
	  echo "<script type='text/javascript'>alert('Already Registered')</script>";
			$flag=1;
		}
    }
	 if($flag!=1)
	 {
     $q="insert into $tbl_name1(mobile,reg_date,reg_mod_date,password,subs) values('$myphoneno','$datetime','$datetime','$mypassword','$newS')";
	 $res=mysql_query($q);
	 if($c==1)
	 {
		$q="insert into $tbl_name2(reg_code, mobile) values('1','$myphoneno')";
		$res=mysql_query($q);
	 }
	 if($w==2)
	 {
		$q="insert into $tbl_name2(reg_code, mobile) values('2','$myphoneno')";
		$res=mysql_query($q);
	 }
	 if($h==3)
	 {
		$q="insert into $tbl_name2(reg_code, mobile) values('3','$myphoneno')";
	  $res=mysql_query($q);
	  }
	 header("Location:../signin.php");
	}
	}
}

// To protect MySQL injection (more detail about MySQL injection)
/*$myphoneno = stripslashes($myphoneno);
$mypassword = stripslashes($mypassword);
$myphoneno = mysql_real_escape_string($myphoneno);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT mobile , password FROM $tbl_name WHERE mobile='$myphoneno' and password='$mypassword'";
$result=mysql_query($sql);*/

?>

        </fieldset>  
</form>
</div>

 </div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="row" >  
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
