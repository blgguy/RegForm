<?php
//Connection..
$conn = new mysqli ("localhost", "root", "", "project");
//Query the database
		$sql = "SELECT * FROM users WHERE id = 6 LIMIT 1";
		$resultset = $conn->query($sql);

		if ($resultset->num_rows > 0) {
			//Process Login,,
			$row = $resultset->fetch_assoc();
			$name = $row['firstname'];
			$username = $row['username'];
			//$email = $row['email'];
			//$phone = $row['phone'];
			$datee = $row['reg_date'];

			
			$current_date = date("Y");
			$datee = strtotime($datee);
			$datee = date('Y');
echo $datee;
			$year = $current_date-$datee;

			}else{
			echo "Wrong";
		}
		


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Welcome Mr. <?php echo "$name $username"; ?></h1>
	<h5><?php echo "been in the org.. for morethan $year year."; ?></h5>


</body>
</html>