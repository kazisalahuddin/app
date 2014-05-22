<?php
include 'conn.php';

$output=array();

$string="select emp_id,name,designation from employees_information where designation='sr'";

$sqlExec=mysql_query($string);
$recNumber=mysql_num_rows($sqlExec);   
$output['users']=array(); 
$user=array();
if($recNumber>0){
	while ($row= mysql_fetch_array($sqlExec)){
	$user['emp_id']=$row['emp_id'];
	$user['name']=$row['name'];
	$user['designation']=$row['designation'];
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
