<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>

<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<title>صفحة رئيسية</title>
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


<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        
    <?php endif ?>
</div>
<div><table>
  <tbody>
    <tr>
      <th scope="col">LONDON CENTER</th>
      <th scope="col">LONDON WEST</th>
      <th scope="col">LONDON EAST</th>
    </tr>
    <tr>
      <td>Royal Plate Indoors,<br>22nd Sunrise street, Royal Club Avenue,
<br>London, UK <br><br></td>
      <td>Royal Plate Indoors,<br>22nd Sunrise street, Royal Club Avenue,
<br>London, UK</td>
      <td>Royal Plate Indoors,<br>22nd Sunrise street, Royal Club Avenue,
<br>London, UK<br><br><br><br><br></td>
    </tr>
    <tr>
      <td><span style="color : rebeccapurple">OPENING HOURS:</span><br>
Mon - Fri: 08:00 am - 10:00 pm<br>
Sat - Sun: 10:00 am - 11:00 pm<br><br><br><br></td>
      <td><span style="color : rebeccapurple">OPENING HOURS:</span><br>
Mon - Fri: 08:00 am - 10:00 pm<br>
Sat - Sun: 10:00 am - 11:00 pm<br><br><br><br></td>
      <td><span style="color : rebeccapurple">OPENING HOURS:</span><br>
Mon - Fri: 08:00 am - 10:00 pm<br>
Sat - Sun: 10:00 am - 11:00 pm<br><br><br><br><br></td>
    </tr> 
	      <tr>
      <td><span style="color : rebeccapurple">CONTACT:<br> </span><br>
+00 42 587 9685<br>
info@royal-plate.com</td>
      <td><span style="color : rebeccapurple">CONTACT:<br> </span><br>
+00 42 587 9685<br>
info@royal-plate.com</td>
    <td><span style="color : rebeccapurple">CONTACT:<br> </span><br>
+00 42 587 9685<br>
info@royal-plate.com</td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>