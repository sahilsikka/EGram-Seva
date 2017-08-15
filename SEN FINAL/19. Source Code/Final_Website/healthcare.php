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
        <li class="active">
		<a href="index1.php">Home</a></li>
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


<div class="row">  
<div class = "span12">

<table class="table">
<tbody>
<tr>
<td class="span8">


<div class="span1"></div>
<div class="span7"><br/>
<p ><h4><strong>Healthcare </strong></h4><br/>
Subscribe to this option to enable to send query about a disease. The user will then receive information about symptoms and remedies of the disease requested. The user needs to send the code for the disease. Following is the list of diseases and their codes: <br/>
1: Malaria<br/>
2: Asthma<br/>
3: Cholera<br/>
4: Bronchitis<br/>
5: Allergy<br/>
6: Measles<br/> 
7: Burns<br/>
8: Cholesterol<br/>
9: Constipation<br/>
10: Depression<br/>
11: Losemotion<br/>
12: Heart Attack<br/>
13: Stroke<br/>
14: Tuberculosis<br/>
15: Injury<br/>
</p><br/>
<form class="form-horizontal " >  
        <fieldset >  
        
          
           <button class="btn btn-large btn-primary" type="submit" style="column-gap:normal" formaction="healthcareP.php">Subscribe</button>
         </fieldset>
</form>
</div>
           
</td>


<td class="span4">
<table class="table table-striped table-hover">
<tbody>
<tr>
<th align="center"><strong > Latest Healthcare Bulletins</strong></th>
</tr>
<tr>
<table>
<tbody>
<div>
<?php
  include('rssclass.php');
  $feedlist = new rss('http://syndication.indianexpress.com/rss/697/health.xml');
   echo $feedlist->display(5,"<tr> <tr/>");

  ?> 
  </div>
  </tr>
  </tbody>
  </table>
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


