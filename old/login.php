<?php
include 'conn.php';
$userName=$_REQUEST['username'];
$userPass=$_REQUEST['password'];
$designation="SR";
//$userName="arif";
//$userPass="123456";
$output=array();

$string="select emp_id,name,designation from employees_information where user_id='$userName' and password='$userPass' and designation !='$designation'";

$sqlExec=mysql_query($string);
$recNumber=mysql_num_rows($sqlExec);   
$output['users']=array(); 
$user=array();
if($recNumber>0){
	$row= mysql_fetch_assoc($sqlExec);
	$user['emp_id']=$row['emp_id'];
	$user['name']=$row['name'];
	$user['designation']=$row['designation'];
    array_push($output['users'],$user);
	$output['success']=1;
	print(json_encode($output));
}  else {
  	$user['userid']=0;
    array_push($output['users'],$user);
	$output['success']=0;
  	print(json_encode($output));
}

?>
