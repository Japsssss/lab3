<!DOCTYPE html>
<html>
<head>
	<title>Guest List</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container mt-3">
		<h2>Guest List</h2>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Subject</th>
					<th>Message</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Connect to MySQL database
				$servername = "192.168.150.213";
				$username = "webprogss211";
				$password = "fancyR!ce36";
				$dbname = "webprogss211";
				$conn = mysqli_connect($servername, $username, $password, $dbname);

				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				// Fetch data from database
				$sql = "SELECT * FROM pgjaoud_myguests";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo "</td><td>".$row["Aname"]."</td><td>".$row["email"]."</td><td>".$row["Asubject"]."</td><td>".$row["Amessage"]."</td></tr>";
					}
				} else {
					echo "<tr><td colspan='5'>No guests found</td></tr>";
				}

				mysqli_close($conn);
				?>
			</tbody>
		</table>
		<a href="index.html" class="btn btn-primary">Go back to Contact Form</a>
	</div>
</body>
</html>
