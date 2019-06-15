<?php
$error = NULL;
if (isset($_POST['submit'])) {
	//Connect to the database
		$conn = new mysqli ("localhost", "root", "", "project");

		//Get form data
		
		$user_id 	 = 	$conn->real_escape_string($_POST['u_id']);
		$password	 = 	$conn->real_escape_string($_POST['pass']);
		$password 	 =	md5($password);

		//Query the database
		$sql = "SELECT * FROM users WHERE username = '$user_id' AND password = '$password' LIMIT 1";
		$resultset = $conn->query($sql);


		if ($resultset->num_rows > 0) {
			//Process Login,,
			$row = $resultset->fetch_assoc();
			$verified = $row['verified'];
			$name = $row['firstname'];
			$email = $row['email'];
			$phone = $row['phone'];
			$date = $row['reg_date'];
			$date = strtotime($date);
			$date = date('M d Y');

			if ($verified == 1) {
				//Continue processing
				echo "<script type='text/javascript'>alert('Successfully Login');</script>";
				//header("Location: home.php");
			}else{
				$error = "This Account has not yet been verified. an email was send to $email on $date";
			}
		}else{
			//Invalid credentials
			$error = "The Username or password you entered is incorrect";
		}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<!--db=project, tbl=users, flds= id, firstname, surname, username, email, phone, vkey, verified, reg_date-->
	<div align="center" style="background-color: grey;">
		<form method="POST" action="">
			<label>Username/Email/Phone No</label><br>
			<input type="text" name="u_id" required><br>
			<label>Password</label><br>
			<input type="password" name="pass" required><br><br>
			<input type="submit" name="submit" value="SigIn">
		</form>
	<h4>Don't have an Account <a href="index.php" style="color: #fff; text-decoration: none; background-color: green; ">SignUp</a></h4><br>
	<?php
		echo $error;
		?>
	</div>

</body>
</html>