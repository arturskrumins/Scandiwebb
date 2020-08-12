<?php


 include_once('db.inc.php');
 
 $skuv = $_POST['skuv'];
 $names = $_POST['names'];
 $prices = $_POST['prices'];
 $specials = $_POST['specials'];
 
 

$sql ="INSERT INTO products1 ( SKU, Name, Price, Special)
 Values('$skuv', '$names','$prices','$specials');";
mysqli_query($conn, $sql);

header("location: ../inserttable.php?signup=succes");

?>