<?php
/*	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;*/
 include_once('db.inc.php');
 
	
?>
<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; 
  <!-- background-color: grey; -->
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container {
  padding: 2px 16px;
}

* {
  box-sizing: border-box;
}
/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  background-color:#abc;
  
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the four columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

.dropdown-check-list {
  display: inline-block;
}
.dropdown-check-list .anchor {
  position: relative;
  cursor: pointer;
  display: inline-block;
  padding: 5px 50px 5px 10px;
  border: 1px solid #ccc;
}
.dropdown-check-list .anchor:after {
  position: absolute;
  content: "";
  border-left: 2px solid black;
  border-top: 2px solid black;
  padding: 5px;
  right: 10px;
  top: 20%;
  -moz-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
  transform: rotate(-135deg);
}
.dropdown-check-list .anchor:active:after {
  right: 8px;
  top: 21%;
}
.dropdown-check-list ul.items {
  padding: 2px;
  display: none;
  margin: 0;
  border: 1px solid #ccc;
  border-top: none;
}
.dropdown-check-list ul.items li {
  list-style: none;
}
.dropdown-check-list.visible .anchor {
  color: #0094ff;
}
.dropdown-check-list.visible .items {
  display: block;
}



</style>

</head>
<body>
<div id="container" style="white-space:nowrap">

   
      <h1 style="display:inline;">Product list</h1>
	  <form action="/inserttable.php" style="display:inline;">
    <input type="submit" value="Go to add page" />
</form>
	  
	  
	  
  </div>


<form id="formName" class="menu" action="deletetable.php" method="get" style="position: absolute;
  right: 10px; top: 0px; background-color:#abc;">
   <div id="list1" class="dropdown-check-list" tabindex="100">
        <span class="anchor">Mass delete</span>
	<?php 

$conn = mysqli_connect("localhost","root","","productlistdb");
$sql = "SELECT Name from products1"; 
$result =$conn-> query($sql);
echo "<ul class='items'>";
if ($result -> num_rows > 0){
	while($row = $result -> fetch_assoc()){
	echo "<li class='element'><input type ='checkbox' name='first[]' id='first' value = '".$row["Name"]."'>".$row["Name"]."</li>";
       
	}
echo  "</ul>";
}
else {echo "0 result";
 }
 $conn-> close();


 ?>
 
	

<input type="submit" value="Apply">
</form>

</div>




<div class="row">
<?php

$conn = mysqli_connect("localhost","root","","productlistdb");
$sql = "SELECT  SKU, Name, Price, Special from products1";
$result =$conn-> query($sql);


 if ($result -> num_rows > 0){
	while($row = $result -> fetch_assoc()){
	echo "<div class='column'><div class='card'><div class='container'>
	<h4><b>".$row["SKU"]."</b></h4>
	<p>"
	.$row["Name"]."</p><p>"
	.$row["Price"]." $ </p><p>"
	.$row["Special"]."</p></div></div></div>";
}
echo "</div>";
}
else {echo "0 result";
 }
 $conn-> close();

?>


	
	
	

    <script type="text/javascript">

        var checkList = document.getElementById('list1');
        checkList.getElementsByClassName('anchor')[0].onclick = function (evt) {
            if (checkList.classList.contains('visible'))
                checkList.classList.remove('visible');
            else
                checkList.classList.add('visible');
        }
    </script>





</body>
</html>







<!--Something is wrong with the XAMPP installation :-(-->
