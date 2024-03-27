<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>
<h1>The Product of two Numbers</h1>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$space=" ";
	$fullname=$fname.$space.$lname;
	if ($num1>$num2) {
		$diff=$num1-$num2;
		echo "<p>The Product of $num1 and $num2 is $diff</p>";
	}else if ($num1<$num2) 
	{
		$diff=$num2-$num1;
		echo "<p>The Product of $num2 and $num1 is $diff</p>";
	}
	else{
		echo "The number are Equal! so the difference are Zero<br>";
	}
	echo "Hello, $fullname<br>";
}
?>
</body>
</html>