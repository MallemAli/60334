<?php
session_start();
if (($_SESSION['user_level'])==1) {
	echo "<p>User Level: " . $_SESSION['user_login'] . "</p>";
} else{
	echo "Your user level is not granted access to this part of the site.";
	exit();
}
require_once "connect.php";
if ($conn->connect_error) die("Connection failed: ".$conn->connect_error);

$id=$_POST['book_id'];
$author=$_POST['book_author'];
$title=$_POST['book_title'];
$year=$_POST['book_year'];
$isbn=$_POST['book_isbn'];

$query =("DELETE FROM catalogue WHERE id='".$id."' AND author='".$author."' AND title='".$title."' AND year='".$year."' AND ISBN='".$isbn."' LIMIT 1");
$result = $conn->query($query);

if ($result) {
    echo "Book removed successfully. <a href='https://mallem.000webhostapp.com/project/removebooks.html'>Return</a>.";
} else {
    echo "Failed to remove book, please <a href='https://mallem.000webhostapp.com/project/removebooks.html'>try again</a>.";
}
$conn->close();
?>
