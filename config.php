<?php

$con = mysql_connect("localhost","root","");
$con_db = mysql_select_db('smp',$con);
if(!$con_db){
die('could not connecty:'. mysql_error());
mysql_close($con_db);
}
?>