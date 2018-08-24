<?php
session_start();
if (($_SESSION['user_level'])==2) {
	echo "<p>User Level: " . $_SESSION['user_login'] . "</p>";
} else{
	echo "Your user level is not granted access to this part of the site.";
	exit();
}
require_once "connect.php";
if ($conn->connect_error) die("Connection failed: ".$conn->connect_error);

$id=$_POST['book_id'];
$query1 = ("SELECT availability FROM catalogue WHERE id='$id'");
$status = $conn->query($query1);

if($row["availability"]='available'){
		$query2 = ("UPDATE catalogue SET availability='taken' WHERE id='$id'");
		$updateStatus = $conn->query($query2);
		$query3 = ("INSERT INTO borrowed (id, username) VALUES ('$id', ".$_SESSION['user_login'].")");
		$final = $conn->query($query3);
}

if($updateStatus){
    echo "Book borrowed successfully. <a href='https://mallem.000webhostapp.com/project/borrowbooks.html'>Return</a>.";
} else {
    echo "Failed to borrow book, please <a href='https://mallem.000webhostapp.com/project/borrowbooks.html'>try again</a>. Ensure book isn't already borrowed and exists.";
}

$conn->close();
?>