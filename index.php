<!DOCTYPE html>
<html>
<head>
	<title>MySQL Table Viewer</title>
</head>
<body>
	<h1>MySQL Table Viewer-2</h1>
	<?php
	    echo "Hello World";
		// Define database connection variables
		$servername = "ss-azuresqlserver.mysql.database.azure.com";
		$username = "ss_sqlserver_admin";
		$password = "Jks@4231";
		$dbname = "ss_hrms_db";
		$port="3306";
		echo $servername;
		echo "xxxxxxxxxxxxxxxx";
		// Create database connection
		$conn = new mysqli($servername, $username, $password, $dbname,$port);
        echo "ss1";
		echo $conn;
		// Check connection
		if ($conn->connect_error) {
			echo "connecton Error";
			die("Connection failed: " . $conn->connect_error);
		}

		// Query database for all rows in the table
		$sql = "SELECT * FROM employee";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// Display table headers
			echo "<table><tr><th>Employee ID</th><th>Employee Name</th><th>Email</th></tr>";
			// Loop through results and display each row in the table
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["employee_id"] . "</td><td>" . $row["employee_name"] . "</td><td>" . $row["email"] . "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}

		// Close database connection
		$conn->close();
	?>
</body>
</html>
