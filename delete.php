<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<title>حذف منتج </title>
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
	
		<h2 align="center">حذف منتج</h2>

<div>
  <form action="" method="get">
	   <input type="number" id="id" name="id" value="<?php echo $id;?>" placeholder="رقم الطلب">
 
    <input type="submit" value="submit" name="submit">
  </form>
</div>
</body>
</html>

<?php 

include "conn.php"; 

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `delivs` WHERE `id`='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>