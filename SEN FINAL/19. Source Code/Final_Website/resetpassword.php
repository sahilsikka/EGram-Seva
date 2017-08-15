<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="user_entry"; // Database name 
$tbl_name1="users"; // Table name 
$tbl_name2="messageout";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['myphoneno']; 


// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql1="SELECT password FROM $tbl_name1 WHERE username ='$myusername' ";
$result = mysql_query($sql1);
$pass = mysql_fetch_row($result);


// Mysql_num_row is counting table row


// If result matched $myusername and $mypassword, table row must be 1 row
$sql2="INSERT INTO $tbl_name2 (messagefrom, messageto, messagetext) VALUES ('asdt','$myusername','$pass[0]')";
$count = mysql_query($sql2);

 header("Location:../index1.php");




?>
