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

if(isset($_POST['submit'])){
	
$Firstname = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$Email =   $_POST['email'];
$Phonenumber = $_POST['phonenumber'];
$Gender = $_POST['gender'];
$Degree = $_POST['degree'];
$College = $_POST['college'];
$CGPA = $_POST['cgpa'];
$Address = $_POST['address'];

$sql="INSERT INTO userdetails(firstname,lastname,email,phonenumber,gender,degree,college,cgpa,address) VALUES(?,?,?,?,?,?,?,?,?)";
$stmtinsert = $conn->prepare($sql);
$stmtinsert->bind_param("sssssssss",$Firstname, $Lastname, $Email, $Phonenumber, $Gender,$Degree,$College,$CGPA,$Address);
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
<?php

if(isset($_POST['submit'])){
	if(file_exists('userdata.json'))
	{
		$current_data=file_get_contents('userdata.json');
		$array_data=json_decode($current_data,true);
		$data=array(
			'firstname'=> $_POST['firstname'],
			'lastname'=>$_POST['lastname'],
			'email'=>$_POST['email'],
			'phonenumber'=>$_POST['phonenumber'],
			'gender'=>$_POST['gender'],
			'degree'=>$_POST['degree'],
			'college'=>$_POST['college'],
			'cgpa'=>$_POST['cgpa'],
			'address'=>$_POST['address'],
		);
		$array_data[]=$data;
		$final_data=json_encode($array_data);
		if(file_put_contents('userdata.json',$final_data))
		{
			echo" and data saved successfully";
		}
	}
}