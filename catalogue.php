<?php
session_start();

if (($_SESSION['user_level']) <= 2) {
	echo "<p>User Level: " . $_SESSION['user_login'] . "</p>";
} else{
	echo "Your user level is not granted access to this part of the site.";
	exit();
}

require_once "connect.php";
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Book Catalogue</title>

  <link rel="stylesheet" type="text/css" href="./css/mainpage.css">
  <center><img src ="./pictures/logo.png" alt="MPL Logo"></center>
</head>

<body>
<table class="navbar">
	<tr>
		<th><a href="https://mallem.000webhostapp.com/project/mainpage.php">Home</a></th>
		<th><a class="active" href="https://mallem.000webhostapp.com/project/catalogue.php">Book Catalogue</a></th>
		<th id="admin1"><a href="https://mallem.000webhostapp.com/project/addbooks.html">Add Books</a></th>
		<th id="admin2"><a href="https://mallem.000webhostapp.com/project/removebooks.html">Remove Books</a></th>
		<th id="user1"><a href="https://mallem.000webhostapp.com/project/borrowbooks.html">Borrow Books</a></th>
		<th><a href="https://mallem.000webhostapp.com/project/logout.php">Logout</a></th>
	</tr>
</table>

</br>
<p>
<?php
    $query ="SELECT * from catalogue";
    $result = $conn->query($query);
    echo "<table>";
	echo "<tr><td><b>Book ID</b>:"."<td><b>Author</b>: "."<td><b>Title</b>: "."<td><b>Year</b>: "."<td><b>ISBN</b>: "."<td><b>Availability</b>: "."</tr>"."</br>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr><td>".$row['id']."<td>".$row['author']."<td>".$row['title']."<td>".$row['year']."<td>".$row['ISBN']."<td>".$row['availability']."</tr>"."</br>";
    }
	echo "</table>";
$conn->close();
?>
</br></br>
<p>
<footer>
    Copyright &copy 2018: Mallem Public Library
</footer>
</body>
</html>
