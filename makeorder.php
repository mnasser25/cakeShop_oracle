<?php
include "conn.php";
?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>YOUR ORDER </title>
</head>

<ul>
    <li><a href="home.php"> HOME </a></li>
    <li><a href="add.php"> INSERT ORDER  </a></li>
    <li><a href="delete.php">  DELETE ORDER</a></li>
    <li><a href="search.php"> SEARCH</a></li>
    <li><a href="logout.php">  LOG OUT</a></li>
    <li style="float:right"></li>
    <span style="float:right"><img src="img/logo.png"></span>
</ul>
<h2 align="center"> YOUR ORDER </h2>
<?php
    $price = $_GET['PRICE'];
    $name  = $_GET['NAME'];
    $cake_id  = $_GET['CAKE_ID'];
    ?>
<form action="" method="post">

<b>CUSTOMER NAME </b>
    <input type="text" id="custname" name="custname" placeholder=" customer name"><br>

    <b>CAKE ID </b>
    <input type="text" id="cake_id" name="cake_id" value="<?php echo $cake_id;?>"><br>

    <b>CAKE NAME </b>
    <input type="text" id="cake_name" name="cake_name" value="<?php echo $name;?>"><br>
    <b>QUANTITY </b>
    <input type="number" id="quantity" name="quantity" placeholder="quantity"><br>
    <b>SIZE </b>
    <input type="text" id="size" name="size" placeholder="size" list="sizes">
    <datalist id="sizes">
        <option value="S">SMALL</option>
        <option value="M">MEDIUM</option>
        <option value="L">LARGE</option>

    </datalist>

  <input type="submit" name="submit" value="CONFIRM ORDER">
  </form>


<?php

$conn = oci_connect("ADMIN", "hr", "//localhost:1521/orclpdb");
if(isset($_POST['submit'])) {
    $cakeid = $_POST['cake_id'];
    $quantity = $_POST['quantity'];
    $size = $_POST['size'];
  //  $totalprice = $price * $quantity;
    $N = 00;
    $query = "INSERT INTO ORDER_(ORDER_ID,CUSTOMER_ID,CAKE_ID,CAKE_SHOP_ID,QUANTITY,SIZE,DESCRIPTION)
 values ('$N','$N','$cakeid','$N','$quantity','$size','$N')";
    $sql ="SELECT CAKES_SHOP_ID FROM CAKE_SHOP AS CS, CAKES AS C 
WHERE C.CAKE_ID = '$cakeid' && C.SHOP_NAME = CS.NAME  ";

    $compiled = oci_parse($conn, $query);
    oci_bind_by_name($compiled, ':CUSTOMER_ID', $N);
    oci_bind_by_name($compiled, ':CAKE_ID', $cakeid);
    oci_bind_by_name($compiled, ':CAKE_SHOP_ID', $N);
    oci_bind_by_name($compiled, ':QUANTITY', $quantity);
    oci_bind_by_name($compiled, ':SIZE', $size);
    oci_bind_by_name($compiled, ':DESCRIPTION', $N);

    oci_execute($compiled);
    echo"Your order is confirm ♥";
}

?>

</body>
</html>