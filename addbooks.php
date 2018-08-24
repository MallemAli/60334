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
$availability='available';

$query =("INSERT INTO catalogue (id, author, title, year, ISBN, availability) VALUES ('$id', '$author', '$title', '$year', '$isbn', '$availability')");
$result = $conn->query($query);

if ($result) {
    echo "Book added successfully. <a href='https://mallem.000webhostapp.com/project/addbooks.html'>Return</a>.";
} else {
    echo "Failed to add book, please <a href='https://mallem.000webhostapp.com/project/addbooks.html'>try again</a>. Book ID must be unique.";
}
$conn->close();
?>
