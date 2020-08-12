<?php

include_once('db.inc.php');
 
 $first = $_GET['first'];
 
 /*foreach ($first as $first){ 
 mysql_query("DELETE FROM myguests WHERE firstname='$first'");*}*/

 foreach ($first as $first){
$sql ="DELETE FROM products1 WHERE Name= '$first'";
 mysqli_query($conn, $sql);}




header("location: ../index.php?delete=succes");

?>