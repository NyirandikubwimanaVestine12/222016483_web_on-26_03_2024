<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>
<h1>The Sum of two Numbers</h1>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$sum=$num1+$num2;
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$space=" ";
	$fullname=$fname.$space.$lname;
	echo "Hello, $fullname<br>";
	echo "<p>The sum of $num1 and $num2 is $sum</p>";
}
?>
</body>
</html>