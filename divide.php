<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>
<h1>The Quotient of two Numbers</h1>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$Quotient=$num1/$num2;
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$space=" ";
	$fullname=$fname.$space.$lname;
	if ($num2== 0) {
		echo "it is impossible";
	}
	else{
	echo "Hello, $fullname<br>";
	echo "<p>The Quotient of $num1 and $num2 is $Quotient</p>";
}
}
?>
</body>
</html>