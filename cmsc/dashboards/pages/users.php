<?php
include 'connection.php';
// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Execute the SQL query to retrieve data from the table
$s = "SELECT * FROM users";
$result = mysqli_query($conn, $s);

// Get the list of databases
$result = mysqli_query($conn, "SHOW tables");




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Conference Management System - Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/users.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<div class="header">
		<h1>            Conference Admin Dashboard</h1>
        <p>logout</p>
	</div>
	<div class="sidebar">
		<ul>
			<li><a href="#">User Management</a></li>
			<li><a href="#">Conference Management</a></li>
			<li><a href="#">Registration Management</a></li>
			<li><a href="#">Content Management</a></li>
			<li><a href="#">Reporting</a></li>
			<li><a href="#">Communication</a></li>
			<li><a href="#">Access Control</a></li>
			<li><a href="../login.php">Logout</a></li>
		</ul>
	</div>
	<div class="main">
		<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>role</th>
  </tr>
  <?php
    // Loop through the result set
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["role"]. "</td></tr>";
    }
  ?>
</table>
    </div>

</body>
</html>
<?php 
    // Close the database connection
    mysqli_close($conn);
?>