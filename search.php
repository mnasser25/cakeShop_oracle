<?php error_reporting(0); ?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<title>بحث</title>
</head>

<body>
		<ul>
			<li><a href="home.php"> الرئيسية </a></li>
  <li><a href="add.php"> طلب منتج </a></li>
  <li><a href="update.php">تعديل منتج</a></li>
 <li><a href="delete.php"> حذف منتج</a></li>
<li><a href="search.php"> بحث</a></li>
		<li><a href="logout.php"> تسجيل خروج</a></li>
		
  <li style="float:left"></li>
  <span style="float:left"><img src="img/logo.png"></span>
</ul>
	
			<h2 align="center">بحث عن منتج</h2>

<div>
  <form action="" method="post">
	   <input type="text" id="namemeal" name="namemeal" placeholder=" اسم الوجبة">
 
    <input type="submit" value="submit" name="submit">
  </form>
</div>
</body>
</html>
<?php


$namemeal = $_POST['namemeal'];
$servername = "localhost";
$username = "root";
$password = "";
$db = "delivery";

$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}


$sql = "select * from delivs where namemeal like '%$namemeal%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["namerestrunt"]."  ".$row["namemeal"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>