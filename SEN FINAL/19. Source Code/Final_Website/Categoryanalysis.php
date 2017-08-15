<?php
	$username = "root";

 	$password = "";
 
	$hostname = "localhost";
	$dbname = "test";
	$tablename = "temp_main_db";
	$link=mysql_connect("$hostname","$username","$password")
	or die('Could not connect: ' . mysql_error());
 	mysql_select_db("$dbname",$link);
	if(mysql_select_db("$dbname",$link))
       	{
          print"Category-wise analysis of no of users subscribed"; //see if you can change the font. 
      	}
	$sql="SELECT s1, COUNT(mobile) AS Users FROM (SELECT mobile, REPLACE(REPLACE(REPLACE(reg_code, '3', 'Weather') , '2', 'Health') , '1', 'Prices') AS s1 from $tablename) AS t1 GROUP BY s1"; 
	$result = mysql_query($sql);
        //$q = mysql_query("UPDATE $result SET SubID = 'Health' WHERE SubID='3'") OR die(mysql_error());
	$graphtitle='BarChart';//Graph Title
	$xname='category'; //X-axis Name
	$yname='users';//y-axis name
	$img_width=400;//image height
	$img_height=300;//image width 
	$margins=70;
	$ymargin=6;
        $graph_width=$img_width - $margins * 2;
	$graph_height=$img_height - $margins * 2; 
	$bar_width=25;
	$total_bars= mysql_num_rows($result);  //(or will it be affected rows??)
	$gap= ($graph_width- $total_bars * $bar_width ) / ($total_bars +1);
	$img=imagecreate($img_width,$img_height);
	$bag_color=imagecolorallocate($img,246,246,246);//Baground color
	$xyline_color=imagecolorallocate($img,135,135,135);//XY-axis color
	$bar_color=imagecolorallocate($img,172,212,123);//Bar color
	$values_color=imagecolorallocate($img,2,2,2);//values color
	$txt_color=imagecolorallocate($img,227,113,39);//text color
	imagefilledrectangle($img,0,0,0,0,$bag_color);
	imageline($img,$margins,$img_height-45,$img_width-20,$img_height-45,$xyline_color);
	imageline($img,$margins,$ymargin,$margins,$img_height-45,$xyline_color);
	$maxvalue="select COUNT(mobile) from $tablename GROUP BY reg_code ORDER BY COUNT(mobile) DESC LIMIT 0,1";//Give your field name for Y axis 
       	$max = mysql_query($maxvalue);
  if(!$max)
             print"could not run";
	while($inf1= mysql_fetch_array($max)) 
  	{
   	$ratio=$graph_height/$inf1[0];
  	}
	$horizontal_lines=8;
	$horizontal_gap=($img_height+20)/$horizontal_lines;
	for($j=1;$j<=$horizontal_lines;$j++)
	{
		$y=($img_height-48) - $horizontal_gap * $j ;
		//imageline($img,$margins+1,$y,$img_width-20,$y,$hline_color);
		$v=intval($horizontal_gap * $j /$ratio);
		imagestring($img,2,$margins-30,$y-5,$v,$values_color);
	}
$i=0;
while($inf = mysql_fetch_array($result)) 
  {
      $x1=($margins+10) + ($gap+5) + $i * ($gap+$bar_width) ;
      $x2=$x1+$bar_width;
      $y1=($img_height-46)- ceil($inf[1] * $ratio) ; 
      $y2=($img_height-46); 
      imagestring($img,2,$x1+1,$y1-15,$inf[1],$values_color); 
      imagestring($img,2,$x2-23,$img_height-43,$inf[0],$values_color);	
      imagefilledrectangle($img,$x1,$y1,$x2,$y2,$bar_color); // Draw bar
   $i++;   
  }
	imagestring($img,8, ($img_width-$margins)/2, 0, $graphtitle, $txt_color);
	imagestring($img,5, ($img_width-$margins)/2, $img_height-($ymargin+10), $xname, $txt_color);
	imagestringup($img,5,10,($img_height-$ymargin)/2, $yname, $txt_color);
//header('Content-type: image/png');
	imagepng($img, 'barchart.jpg');
	echo "<div style='border:1px solid #d8d8d8;width:$img_width'><img src='barchart.jpg'></div>";
	?>
