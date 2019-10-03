<!DOCTYPE html>
<html class="home-bg">
<head>
<title>Login</title>
<link rel="stylesheet" href="page.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<center>
<div class="floating-box">

<form action="loginconfig.php" method="post">


   <label for="Email">Email</label>
   <input type="text" id="email" name="email" required><br><br>

   <label for="password">Password</label>
   <input type="password" id="password" name="password" required><br><br>
   <input name="submit" type="submit" id="submit" value="Login"><br>

<p>New User <a href="signup.php">Register Here</a></p>

 </center>
</form>

</div>
</body>
</html>