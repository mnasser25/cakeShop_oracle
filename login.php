<?php include('server.php') ?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<title>طلب منتج</title>
</head>

<body>
<ul>
  <li><a href="new_users.php">تسجيل جديد </a></li>
  <li><a href="login.php">تسجيل دخول</a></li>
  <li style="float:left"></li>
  <span style="float:left"><img src="img/logo.png"></span>
</ul>
	<h2 align="center">تسجيل دخول</h2>

<div>
 <form method="post" action="">
    <?php include('errors.php'); ?>
   
      <input type="text" name="username" placeholder=" name">
    
      <input type="password" name="password" placeholder=" password">
   
      <input type="submit" value="submit" name="login_user">

  </form>
</div>
</body>
</html>

