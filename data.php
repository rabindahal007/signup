<?php 

$host="localhost";
$pass ="";
$user="root";
$dbname="signup";
$conn=mysqli_connect($host,$user,$pass,$dbname) or die();



session_start();

$name=$_POST['username'];
$fail=0;

$password1=$_POST['password'];
$cpassword=$_POST['cpassword'];
$email=$_POST['email'];


$error="SELECT * FROM signup WHERE `E-mail`='$email'";
$errResult=mysqli_query($conn,$error);
$count=mysqli_num_rows($errResult);





 if ($password1==$cpassword) {
 	if ($count>0) {
 		echo "<h1>Email already in use</h1>";
 	}
 	else{

 
	$sql= "INSERT INTO signup(Name,Password,`E-mail`) VALUES('$name','$password1','$email')";
	
	$result=mysqli_query($conn,$sql);
	
	
	

 	

	if ($result) {
		header("Location:./login/loginIndex.php");

		
	}
else{
	echo"password didn't matched";
}
}

}




 ?>