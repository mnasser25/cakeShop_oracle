<?php

include "conn.php";


?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>INSERT ORDER </title>
</head>

<ul>
    <li><a href="home.php"> HOME </a></li>
    <li><a href="add.php"> INSERT ORDER  </a></li>
    <li><a href="update.php">EDIT ORDER </a></li>
    <li><a href="delete.php">  DELETE ORDER</a></li>
    <li><a href="search.php"> SEARCH</a></li>
    <li><a href="logout.php">  LOG OUT</a></li>
    <li style="float:right"></li>
    <span style="float:right"><img src="img/logo.png"></span>
</ul>
<h2 align="center"> Products </h2>
<style>
    table {border: 1px solid black; width: 50%}
    td {text-align: center}
    h4 {color: #8a6d3b}
</style>

<?php
$shopname = $_POST['shopname'];
echo"<center><h4>";
if ($shopname == "Mazaj"){
    echo " Welcome to Mazaj, we are happy to choise us.<br>";
    echo"We welcome to you in our shop, visit this link to know about us.";
    echo'<p><a href="https://www.instagram.com/mazajps/">Go to website</a></p>';
} else if ($shopname == "Flavor cake"){
    echo " Welcome to FlAVOR CAKE, we are happy to choise us.<br>";
    echo"We welcome to you in our shop, visit this link to know about us.";
    echo'<p><a href="https://www.instagram.com/abraroabdu/">Go to website</a></p>';
}else if($shopname == "Hamada"){
    echo " Welcome to HAMADA, we are happy to choise us.<br>";
    echo"We welcome to you in our shop, visit this link to know about us.";
    echo'  <p><a href="https://www.instagram.com/ice_cream_hamada/">Go to website</a></p>';

}
echo"</h4><center>";
$query = "select NAME,PRICE,CAKE_ID from CAKES where SHOP_NAME like '%$shopname%'";
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);

print '<table border="1" ; align="center"; width="50%">';
echo '<tr ><td><h4>CAKE NAME</h4> </td>
<td><h4>PRICE</h4></td> <td><h4>CHOOSE</h4></td></tr>';
while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS + OCI_ASSOC)) {
    print '<form action="makeorder.php" method="get"><tr>';

    foreach ($row as $key=>$item) {
        if($key == "NAME" || $key=="PRICE")
            print '<td>' . ($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp') . '</td>';

        print '<input type="hidden" name="'.$key.'" value="'.$item.'">';
        echo '<br>';

    }
    print '<td> <input type="submit" value="add"></td></tr></form>';

}
print '</table>';

include_once 'conn.php';
$conn = oci_connect("ADMIN", "hr", "//localhost:1521/orclpdb");
if (!empty($_GET))
{
    $price = $_GET['PRICE'];
    $name  = $_GET['NAME'];
    $cake_id  = $_GET['CAKE_ID'];
    $shop_name = $_GET['SHOP_NAME'];

    $query = "INSERT INTO ORDER_(CAKE_ID) values ('$cake_id')";
    $compiled = oci_parse($conn, $query);
    oci_bind_by_name($compiled, ':CAKE_ID', $cake_id);
    oci_execute($compiled);

  header('location: makeorder.php');
 // echo "Data added Successfully !";


}
?>

</body>
</html>