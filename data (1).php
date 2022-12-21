<?php
session_start();

$connection = new mysqli("localhost", "id19846487_prudhvireddy", "+9jaghl0<(jmQz#R", "id19846487_prudhvi");
 
if ($connection->connect_errno) {
   die("Connection failed to mySQL: ($connection->connect_errno) $connection->connect_error");
}

$proname = $_POST["Pname"];
$_SESSION['Pname'] = $proname;

$warecity = $_POST["Wcity"];
$_SESSION['Wcity'] = $warecity;

$minqty = $_POST["Minquantity"];
$_SESSION['Minquantity'] = $minqty;

$maxqty = $_POST["Maxquantity"];
$_SESSION['Maxquantity'] = $maxqty;

$minprice = $_POST["Minprice"];
$_SESSION['Minprice'] = $minprice;

$maxprice = $_POST["Maxprice"];
$_SESSION['Maxprice'] = $maxprice;

$statement = "SELECT * FROM products WHERE city LIKE ? AND pname LIKE ? AND quantity >= ? AND quantity < ? AND price >= ? AND price < ?";

$bind = $connection->prepare($statement);

if($_POST["Minquantity"] == '') {
    $minqty = 0;
}

if($_POST["Maxquantity"] == '') {
    $maxqty = 123456789987654321;
}

if($_POST["Minprice"] == '') {
    $minprice = 0;
}

if($_POST["Maxprice"] == '') {
    $maxprice = 123456789987654321;
}

$proname = '%'.$proname.'%';

$warecity = '%'.$warecity.'%';
#binding the data to the bind search query
$bind->bind_param('ssssss', $warecity, $proname, $minqty, $maxqty, $minprice, $maxprice);

$bind->execute();
#fetch the result into the collection variable
$collection = $bind->get_result();

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="sample1.css">
</head>
<body>
<h1>REDDY WHOLESALE DEALER</h1>
<h2>Search Product List</h2>
<form>
    <table>
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
            <th>Quantity</th>
            <th>Price</th>
         </tr>
             <?php foreach($collection as $record): ?>
             <tr>
             <td><?php echo $record["pid"]; ?></td>
             <td><?php echo $record["pname"]; ?></td>
             <td><?php echo $record["city"]; ?></td>
             <td><?php echo $record["quantity"]; ?></td>
             <td><?php echo $record["price"]; ?></td>
             </tr>
             <?php endforeach; ?>
      </table>
<a href="sample.php"><input class="Perform" type="button"  value="Perform Another Search"></a>
</form>

</body>
</html>