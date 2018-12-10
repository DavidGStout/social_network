<?php

$con = mysqli_connect("localhost", "root", "", "social");
if (mysqli_connect_errno()) {
	echo "failed to connect: " . mysqli_connect_errno();
}

$query = mysqli_query($con, "INSERT INTO test VALUES('', 'Theresa')");

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
lorem dec 10
</body>
</html>