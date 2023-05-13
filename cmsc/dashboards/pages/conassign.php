<!DOCTYPE html>
<html>
<head>
	<title>Assign Conference Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<form action="assign-conference-admin.php" method="post">
			<h2>Assign Conference Admin</h2>
			<label for="conference"><b>Conference</b></label>
			<select name="conference">
			  <option value="conf1">Conference 1</option>
			  <option value="conf2">Conference 2</option>
			  <option value="conf3">Conference 3</option>
			</select>

			<label for="admin"><b>Admin</b></label>
			<select name="admin">
			  <?php
			  	// Retrieve list of admins from database
			  	$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "conference_management";

				$conn = mysqli_connect($servername, $username, $password, $dbname);

				if (!$conn) {
				  die("Connection failed: " . mysqli_connect_error());
				}

				$sql = "SELECT * FROM users WHERE role = 'admin'";
				$result = mysqli_query($conn, $sql);

				while($row = mysqli_fetch_assoc($result)) {
					echo "<option value='" . $row['username'] . "'>" . $row['username'] . "</option>";
				}

				mysqli_close($conn);
			  ?>
			</select>

			<button type="submit" class="registerbtn">Assign</button>
		</form>
	</div>
</body>
</html>
<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "con_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$conference = $_POST['conference'];
$admin = $_POST['admin'];

// Update conference admin in database
$sql = "UPDATE conferences SET conference_admin='$admin' WHERE conference_name='$conference'";

if (mysqli_query($conn, $sql)) {
  echo "Conference admin assigned successfully!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
