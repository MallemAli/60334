<?php
session_start();
if (($_SESSION['user_level']) <= 4) {
echo "<p>User Level: " . $_SESSION['user_login'] . "</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>

  <link rel="stylesheet" type="text/css" href="./css/mainpage.css">
  <center><img src ="./pictures/logo.png" alt="MPL Logo"></center>
</head>
<body>
<table class="navbar">
	<tr>
		<th><a class="active" href="https://mallem.000webhostapp.com/project/mainpage.php">Home</a></th>
		<th><a href="https://mallem.000webhostapp.com/project/catalogue.php">Book Catalogue</a></th>
		<th id="admin1"><a href="https://mallem.000webhostapp.com/project/addbooks.html">Add Books</a></th>
		<th id="admin2"><a href="https://mallem.000webhostapp.com/project/removebooks.html">Remove Books</a></th>
		<th id="user1"><a href="https://mallem.000webhostapp.com/project/borrowbooks.html">Borrow Books</a></th>
		<th><a href="https://mallem.000webhostapp.com/project/logout.php">Logout</a></th>
	</tr>
</table>

</br></br></br>

<p>
Welcome to the home page of the Mallem Public Library! From here, depending on your user type, you can carry out many types of transactions using the navigation bar above! </br></br>

News:</br>

August 22nd, 2018:</br>
Lorem ipsum dolor sit amet, molestie interesset qui no, sea at epicurei similique. Pro in stet autem similique. Ea timeam philosophia ius. His et sumo repudiare, eos ea </br>
copiosae referrentur disputationi, aliquid molestie ea has. Alii deterruisset vix ne, minim reprimique cum ut, in nec odio melius lucilius. Quo posse possit an, mollis </br>
accusam accusamus eu per, id vis dicunt vituperata.</br></br>

No commodo salutatus sea. Nam veniam audire quaestio et. Qui timeam adipiscing posidonium ne. No denique quaerendum cum, no sensibus disputando his. Id libris senserit consulatu eam.</br>
Dicant ponderum eos id, ei mucius senserit duo. Mel an audiam quaerendum signiferumque. Ullum utinam temporibus pro eu, ut mel brute decore moderatius. Ex vix dicta convenire, cum no</br>
amet reque, ad liber utinam essent eum.</br></br>

In erat efficiantur per, ad tacimates recusabo reprehendunt pro. Vero oblique postulant his id. Id probo qualisque forensibus usu. An mutat appellantur vix. Illum aeque eruditi ea </br>
eum. Ea ludus numquam qui, pro ut forensibus appellantur, eam viderer nostrum ea. Adhuc eripuit ex has, eos mucius consulatu at, eripuit numquam salutandi eu duo. Eum petentium </br>
incorrupte ad, elit fugit indoctum est ut. Sea ea habeo solum, brute phaedrum assentior vel id, usu case rationibus in. Esse patrioque an mei, id vis aliquid oportere assueverit.</br></br>

August 16th, 2018:</br>
Lorem ipsum dolor sit amet, molestie interesset qui no, sea at epicurei similique. Pro in stet autem similique. Ea timeam philosophia ius. His et sumo repudiare, eos ea </br>
copiosae referrentur disputationi, aliquid molestie ea has. Alii deterruisset vix ne, minim reprimique cum ut, in nec odio melius lucilius. Quo posse possit an, mollis </br>
accusam accusamus eu per, id vis dicunt vituperata.</br></br>

No commodo salutatus sea. Nam veniam audire quaestio et. Qui timeam adipiscing posidonium ne. No denique quaerendum cum, no sensibus disputando his. Id libris senserit consulatu eam.</br>
Dicant ponderum eos id, ei mucius senserit duo. Mel an audiam quaerendum signiferumque. Ullum utinam temporibus pro eu, ut mel brute decore moderatius. Ex vix dicta convenire, cum no</br>
amet reque, ad liber utinam essent eum.</br></br>

August 1st, 2018:</br>
In erat efficiantur per, ad tacimates recusabo reprehendunt pro. Vero oblique postulant his id. Id probo qualisque forensibus usu. An mutat appellantur vix. Illum aeque eruditi ea </br>
eum. Ea ludus numquam qui, pro ut forensibus appellantur, eam viderer nostrum ea. Adhuc eripuit ex has, eos mucius consulatu at, eripuit numquam salutandi eu duo. Eum petentium </br>
incorrupte ad, elit fugit indoctum est ut. Sea ea habeo solum, brute phaedrum assentior vel id, usu case rationibus in. Esse patrioque an mei, id vis aliquid oportere assueverit.</br></br>
</p>

<footer>
    Copyright &copy 2018: Mallem Public Library
</footer>
</body>
</html>