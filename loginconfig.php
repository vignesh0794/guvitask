<?php 
$url='localhost';
$db_user = "root";
$db_pass = "";
$conn=mysqli_connect($url,$db_user,$db_pass); 

if(!mysqli_select_db($conn,'useraccounts'))
{
	echo 'Database Not selected';
}

if(isset($_POST['submit'])){
 
 $email1 = $_POST["email"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[] 
 $password = sha1($_POST["password"]); 
 $sql= "SELECT email,password from users where email=?";
 $stmt= $conn->prepare($sql);
 $stmt->bind_param("s", $email1); 
 $stmt->execute();
 $result=$stmt->get_result();
 $user=$result->fetch_assoc();


if($password==$user['password'])
{
   echo"logged in successfully";
   header('location:/Registration/userdetails.php');
}
 else
 {
    echo "Incorrect username or password"; 
    header("location:/Registration/index.php"); 
 } 
 } 
?>
