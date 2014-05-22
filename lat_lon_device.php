<?php
include 'conn.php';

$output=array();


$string="SELECT mov.latitude lat ,mov.longitude lon FROM device_mov_info mov,device_alloc_information alloc,employees_information emp WHERE mov.imei=alloc.imei and alloc.emp_id=emp.emp_id and emp.emp_id=3 and DATE(mov.data_date)='2014-04-21'";
//echo $str;
$sqlExec=mysql_query($string);
$recNumber=mysql_num_rows($sqlExec);   
$output['users']=array(); 
$user=array();
if($recNumber>0){
	while ($row= mysql_fetch_array($sqlExec)){
	$user['lat']=$row['lat'];
	$user['lon']=$row['lon'];
        array_push($output['users'],$user);
	}
	$output['success']=1;
	print(json_encode($output));
        }else {
  	$user['userid']=0;
        array_push($output['users'],$user);
	$output['success']=0;
  	print(json_encode($output));
}
?>
