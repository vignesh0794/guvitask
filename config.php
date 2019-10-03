<?php 
$url='localhost';
$db_user = "root";
$db_pass = "";
$conn=mysqli_connect($url,$db_user,$db_pass);
if(!$conn)
{
	echo 'Not connected to server';
}

if(!mysqli_select_db($conn,'useraccounts'))
{
	echo 'Database Not selected';
}



if(isset($_POST['register'])){


	
$Firstname = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$Email =   $_POST['email'];
$Phonenumber = $_POST['phonenumber'];
$Password = sha1($_POST['password']);

$rs=mysqli_query($conn,"select * from users where email='$Email'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Email Id is Already Registered</div>";
	header("refresh:2;url=index.php");	
	exit;
}

$sql="INSERT INTO users(firstname,lastname,email,phonenumber,password) VALUES(?,?,?,?,?)";
$stmtinsert = $conn->prepare($sql);
$stmtinsert->bind_param("sssss",$Firstname, $Lastname, $Email, $Phonenumber, $Password);
$result = $stmtinsert->execute();

if(!$result)
{
	echo 'Value not inserted';
}
else{
	echo 'Record inserted Successfully';
}

header("refresh:2;url=index.php");
}
?>
