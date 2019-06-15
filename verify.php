<?php

if (isset($_GET['vkey'])) {
	//process verification
	$vkey = $_GET['vkey'];
	//Connect to the database
		$conn = new mysqli ("localhost", "root", "", "project");
		$sql = "SELECT * FROM users WHERE verified = 0 AND vkey = '$vkey' LIMIT 1";
		$resultset = $conn->query($sql);

		if ($resultset->num_rows == 1) {
			//Validate The Email
			$sql1 = "UPDATE users SET verified = 1 WHERE vkey = '$vkey' LIMIT 1";
			$update = $conn->query($sql1);

			if ($update) {
				echo "Your account has been verified. you may now <a href='http://localhost/form'>login.</a> <a href='http://localhost/form'>click here</a>";
			}else{
				echo $conn->error;
			}
		}else{
			echo "This account invalid or already verified";
		}

}else{
	die("Something went wrong");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>