<!DOCTYPE html>
<html class="userdet-bg">
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="page.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<tr>
<div>
	<form action="userconfig.php" method="post">
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
                    <br>
                    <tr>
                    <td>
                    <label class="form-control" for="Gender"><b>Gender</b></label>
                    </td>
                    <td>
                    <select name="gender">
                    <option value="male" selected>Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                    </select>   
                    </td>
                    <br>
                    <label for="Degree"><b>Degree</b></label>
					<input class="form-control" id="degree"  type="text" name="degree" required>

                    <label for="college"><b>College Name</b></label>
					<input class="form-control" id="college"  type="text" name="college" required>

                    <label for="CGPA"><b>CGPA</b></label>
					<input class="form-control" id="cgpa"  type="text" name="cgpa" pattern="[0-9]{1,2}+.[0-9]{1,2}" required>

                    <label for="Address"><b>Address</b></label>
					<input class="form-control" id="address"  type="text" name="address" required>

					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="submit" name="submit" value="Submit">

				</div>
			</div>
		</div>
	</form>
</div>
</tr>
</body>
</html>