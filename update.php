<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<title> تعديل منتج</title>
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
	
	<h2 align="center">تعديل منتج</h2>

<div>
  <form action="" method="post">
	   <input type="text" id="id" name="id" placeholder="رقم الطلب">
    <input type="text" id="	namerestrunt" name="namerestrunt" placeholder="اسم المطعم">
    <input type="text" id="namemeal" name="namemeal" placeholder="اسم الوجبة">


  
    <input type="submit" value="submit" name="submit">
  </form>
</div>
</body>
</html>

<?php 

include "conn.php";

     if (isset($_POST['submit'])) {

    $namerestrunt = $_POST['namerestrunt'];

    $namemeal = $_POST['namemeal'];

        $id = $_POST['id'];

 


        $sql = "UPDATE `delivs` SET `namerestrunt`='$namerestrunt',`namemeal`='$namemeal' WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 


    ?>


