<?php include('server.php') ?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<title>تسجيل جديد</title>
</head>
<ul>
  <li><a href="login.php">تسجيل جديد </a></li>
  <li><a href="login.php">تسجيل دخول</a></li>
  <li style="float:left"></li>
  <span style="float:left"><img src="img/logo.png"></span>
</ul>
	<h2 align="center">تسجيل مستخدم جديد </h2>

<div>
  <form method="post" action="">
  	<?php include('errors.php'); ?>
  	
  	
  	  <input type="text" name="username" value="<?php echo $username; ?>"  placeholder=" name">


  	  <input type="email" name="email" value="<?php echo $email; ?>" placeholder=" email">
  	

  	  <input type="password" name="password_1" placeholder=" password">
  

  	  <input type="password" name="password_2" placeholder=" Confirm password">
  
  	  <input type="submit" name="reg_user" value="submit">

  </form>
</div>

</body>
</html>

