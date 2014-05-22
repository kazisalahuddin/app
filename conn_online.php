<?php
$con = mysql_connect("localhost","pnpnews2_binary","Bangla_1971_");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("pnpnews2_sr", $con);
?>