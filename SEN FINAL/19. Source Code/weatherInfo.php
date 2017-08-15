<?php $json_string = file_get_contents("http://api.wunderground.com/api/9dd6a3a020f1d3ff/forecast/lang:HI/q/India/Ahmedabad.json");
header('Content-Type: text/html; charset=utf-8');
 $parsed_json = json_decode($json_string);
//ini_set('default_charset', 'utf-8');
$fcast_day = $parsed_json->{'forecast'}->{'txt_forecast'}->{'forecastday'}{2}->{'title'}; 
$fcast_info = $parsed_json->{'forecast'}->{'txt_forecast'}->{'forecastday'}{2}->{'fcttext_metric'}; 

$host="localhost";
$user="root";
$pass="";
$database="test";
$conn= mysql_connect($host, $user, $pass);
$charset="UTF8";
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db($database, $conn);
if(function_exists("mysql_set_charset")){
    mysql_set_charset($charset, $conn);
}else{
    mysql_query("SET NAMES $charset");   
}
echo 'Your current character set is: ' .  mysql_client_encoding($conn);
$fcast_day = html_entity_decode($fcast_day, ENT_COMPAT, 'UTF-8');
$fcast_info = html_entity_decode($fcast_info, ENT_COMPAT, 'UTF-8');
$command = "UPDATE weather SET info_date='$fcast_day', description='$fcast_info'";
$ret= mysql_query($command);
if(!$ret)
{
  die('Could not enter data: ' . mysql_error());
}
mysql_close($conn);

echo "${fcast_day}: ${fcast_info}\n"; ?>