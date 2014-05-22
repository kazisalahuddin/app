<?php
	include('conn.php');
	$device_id=$_REQUEST['device_id'];
	$latitude=$_REQUEST['latitude'];
	$longitude=$_REQUEST['longitude'];
	/*$userName='saka';
	$password='123';
*/
	$string="insert into device_mov_info(imei,latitude,longitude) values('$device_id','$latitude','$longitude')";
	$stringExe=mysql_query($string);
	if($stringExe){
		echo '1';	
	}else{
		echo '0';
	}
?>