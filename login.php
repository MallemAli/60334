<?php
require_once 'connect.php';

if ($conn->connect_error) die("Connection Failed: " . $conn->connect_error);

$username=$_POST['username'];
$password=$_POST['password'];

$username=stripcslashes($username);
$password=stripcslashes($password);
$username=$conn->real_escape_string($username);
$password=$conn->real_escape_string($password);

$levelQuery="SELECT user_code FROM user_codes WHERE username = '$username'";
$levelResult=mysqli_query($conn, $levelQuery);
$levelResult=$conn->query($levelQuery);
$level=mysqli_fetch_array($levelResult);

$checkQuery="SELECT * FROM user_codes WHERE username = '$username' AND password = '$password'";
$checkResult=mysqli_query($conn, $checkQuery);
$checkResult=$conn->query($checkQuery);
$rows=mysqli_fetch_array($checkResult);

if($rows['username']==$username && $rows['password']==$password){
	session_start();
	$_SESSION['user_login']=$username;
	$_SESSION['user_level']=$level['user_code'];
	header("Location: https://mallem.000webhostapp.com/project/mainpage.php");
} else{
	echo "<center><p>Username or password incorrect, please <a href='https://mallem.000webhostapp.com/project/login.html'>try again</a>.</p></center>";
}
?>
