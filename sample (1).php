<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="sample1.css">
</head>
<body>

<h1>REDDY WHOLESALE DEALER</h1>
<h2>Product Search</h2>
<form method="post" action="data.php">
    <br>
    <label for="Pname" style="color: black; font-size: 20px; margin-left:-290px;"></label>Product Name(substring)</label><br>
    <input type="text" id="Pname" value="<?php echo (isset($_SESSION["Pname"]))?$_SESSION["Pname"]:'';?>" name="Pname"><br><br>
    <label for="Wcity" style="color: black; font-size: 18px; margin-left:-260px;">Warehouse City(substring)</label><br>
    <input type="text" id="Wcity" value="<?php echo (isset($_SESSION["Wcity"]))?$_SESSION["Wcity"]:'';?>" name="Wcity"><br>
<br>
    <label for="Minquantity" style="color: black; font-size: 18px; margin-left:-320px;">Minimum Quantity</label><br>
    <input type="number" name="Minquantity" value="<?php echo (isset($_SESSION["Minquantity"]))?$_SESSION["Minquantity"]:'';?>" id="Minquantity"><br>
    <label for="Maxquantity" style="color: black; font-size: 18px; margin-left:-20px;margin-top: -40px; position:absolute;">Maximum Quantity</label><br>
    <input type="number" name="Maxquantity" value="<?php echo (isset($_SESSION["Maxquantity"]))?$_SESSION["Maxquantity"]:'';?>" id="Maxquantity">
</br> 
<br>
    <label for="Minprice" style="color: black; font-size: 18px; margin-left:-350px;">Minimum Price</label><br>
    <input type="number" name="Minprice" value="<?php echo (isset($_SESSION["Minprice"]))?$_SESSION["Minprice"]:'';?>" id="Minprice"><br>
    <label for="Maxprice" style="color: black; font-size: 18px; margin-left:-20px; margin-top: -40px; position:absolute;">Maximum Price</label>
    <input type="number" name="Maxprice" value="<?php echo (isset($_SESSION["Maxprice"]))?$_SESSION["Maxprice"]:'';?>" id="Maxprice">
</br> 
<br> <br> 
<a href="wanish.php"> <input class="clear" type="button" value="Clear Form"> </a>
<input class="submit" type="submit" value="Search Products"> 
</br>

</form>
</body>
</html>