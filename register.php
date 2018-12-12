<?php

$con = mysqli_connect("localhost", "root", "", "social");
if (mysqli_connect_errno()) {
	echo "failed to connect: " . mysqli_connect_errno();
}

	//Declaring variables to prevent errors
	$fname = "";
	$lname = "";
	$em = "";
	$em2 = "";
	$password = "";
	$password2 = "";
	$date = ""; //Sign up date
	$error_array = ""; //Holds error messages

	if(isset($_POST['register_button'])) {

		//Registration form values

		//First name
		$fname = strip_tags($_POST['reg_fname']); //Remove HTML tags
		$fname = str_replace(' ', '', $fname); //Remove spaces
		$fname = ucfirst(strtolower($fname)); //Jpper case first name

		//Last name
		$lname = strip_tags($_POST['reg_lname']); //Remove HTML tags
		$lname = str_replace(' ', '', $lname); //Remove spaces
		$lname = ucfirst(strtolower($lname)); //Jpper case first name

		//Email
		$em = strip_tags($_POST['reg_email']); //Remove HTML tags
		$em = str_replace(' ', '', $em); //Remove spaces
		$em = ucfirst(strtolower($em)); //Jpper case first name

		//Email 2
		$em2 = strip_tags($_POST['reg_email2']); //Remove HTML tags
		$em2 = str_replace(' ', '', $em2); //Remove spaces
		$em2 = ucfirst(strtolower($em2)); //Jpper case first name

		//Password
		$password = strip_tags($_POST['reg_password']); //Remove HTML tags

		//Password2
		$password2 = strip_tags($_POST['reg_password2']); //Remove HTML tags

		//Date
		$date = date("Y-m-d");
		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Swirlfeed</title>
</head>
<body>

	<form action="register.php" method="POST">
		<input type="text" name="reg_fname" placeholder="First Name" required>
		<br>
		<input type="text" name="reg_lname" placeholder="Last Name" required>
		<br>
		<input type="text" name="reg_email" placeholder="Email" required>
		<br>
		<input type="text" name="reg_email2" placeholder="Confirm email" required>
		<br>
		<input type="text" name="password" placeholder="Password" required>
		<br>
		<input type="text" name="reg_password2" placeholder="Confirm Password" required>
		<br>
		<input type="submit" name="register_button" value="Register">


	</form>

</body>
</html>