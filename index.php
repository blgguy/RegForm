<?php
$error = NULL;
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['submit'])) {

	$firstname = $_POST['fname'];
	$surname = $_POST['sname'];
	$username = $_POST['uname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password1 = $_POST['pass1'];
	$password2 = $_POST['pass2'];


	if (strlen($username) < 5) {
		$error = "<p>Your Userame must be atleast 5 character</p>";
	}elseif ($password1 != $password2) {
		$error .= "<p>Your Password don't match</p>";
	}else{
		//Connect to the database
		$conn = new mysqli ("localhost", "root", "", "project");

		//Sanitize..
		$firstname 	 = 	$conn->real_escape_string($firstname);
		$surname 	 = 	$conn->real_escape_string($surname);
		$username 	 = 	$conn->real_escape_string($username);
		$email 		 = 	$conn->real_escape_string($email);
		$phone 		 =	$conn->real_escape_string($phone);
		$password1	 = 	$conn->real_escape_string($password1);
		$password2	 = 	$conn->real_escape_string($password2);


		//Generate VKey
		$vkey = md5(time().$username);

			$sql = "insert into users (`firstname`, `surname`, `username`, `email`, `phone`, `password`, `vkey`) values ('$firstname', '$surname', '$username', '$email', '$phone', '".md5($password1)."', '$vkey')";
			if ($conn->query($sql)==TRUE) {
			
				include_once "PHPMailer/PHPMailer.php";
$mail = new PHPMailer();
$mail->setFrom('username@gmail.com');
$mail->addAddress($email, $firstname);
$mail->Subject = "Please Verify Email";
$mail->isHTML(true);
$mail->Body = "Please click the link below:<br><br><a href='https://gooogle.com'></a>";

if ($mail->send()) {
	$error = "Email have been send!";
}else{
	$error = "Email don't send";
	}

				header('Location: thankyou.php');
  
}else{
	$error = "Something whent wrong";
	}
}

			
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<div align="center" style="background-color: grey;">
		<form method="POST" action="index.php">
			<label>First Name:</label><br>
			<input type="text" name="fname" required><br>
			<label>Surname:</label><br>
			<input type="text" name="sname" required><br>
			<label>Username:</label><br>
			<input type="text" name="uname" required><br>
			<label>Email:</label><br>
			<input type="email" name="email"><br>
			<label>Phone Number:</label><br>
			<input type="tell" name="phone" required><br>
			<label>Password:</label><br>
			<input type="password" name="pass1" required><br>
			<label>Repeat Password:</label><br>
			<input type="password" name="pass2" required><br><br>
			<input type="submit" name="submit" value="Register">
		</form>
		<h4> Already have an Account <a href="signin.php" style="color: #fff; text-decoration: none; background-color: green; ">Sigin</a></h4><br>
	
		<?php
		echo $error;
		?>
	</div>

</body>
</html>