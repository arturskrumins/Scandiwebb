
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown:hover .dropdown-content {display: block;}




</style>



</head>
<body>
<h1>Product add</h1>
<form action="signup.inc.php" method="POST">
<input type="text" name="skuv" placeholder="SKU">
<br>
<input type="text" name="names" placeholder="Name">
<br>
<input type="text" name="prices" placeholder="Prices">
<br>
<input type="text" name="specials" placeholder="Special">
<br>
<button type="submit">Sign up</button>
<br>
<br>
</form>


<div class="dropdown">
  <button class="dropbtn">Type switch</button>
  <div class="dropdown-content">
    <a href="#">Size</a>
    <a href="#">Dimension</a>
    <a href="#">Weight</a>
  </div>
</div>

<form  method="POST">
<input type="text" name="size" placeholder="Size">
<br>


<br>
<br>
</form>



  


  


</body>
</html>