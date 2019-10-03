
<!DOCTYPE html>
<html class="signup-bg">
<head>
	<title>Registration Form</title>
	<script src="signup.js"></script>
	<link rel="stylesheet" href="page.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<tr>
<div>
	<form action="config.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<hr class="mb-3">
					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<label for="phonenumber"><b>Phone Number</b></label>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" pattern="[6-9]{1}[0-9]{9}" required>

					<label for="password"><b>Password</b>
                    <input class="form-control" id="password"  type="password" name="password" title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
					</label>
					
                    <label for="Confirmpassword"><b>Confirm Password</b>
					<input class="form-control" id="Cpassword"  type="password" name="password" onchange ='check()' required>
					<span id='message'></span>
					</label>

					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="register" value="Sign Up">

					<p>Already Registered <a href="login.php">Login here</a></p>
				</div>
			</div>
		</div>
	</form>
</div>
</tr>
</body>
</html>