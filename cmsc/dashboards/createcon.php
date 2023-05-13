<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/condash.css">
    <script src="js/condash.js"></script>
</head>
<body>
	<div class="container">
		<header>
			<h1>Create Conference</h1>
			<a href="../login.php" class="logout">Logout</a>
		</header>
		<nav>
			<ul>
				<li><a href="condash.php" >Conference Dates</a></li>
				<li><a href="#" class="active">Create Conference</a></li>
				<li><a href="reviewassign.php">Assign Review</a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>
		</nav>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Conference</title>
    <link rel="stylesheet" href="css/createcon.css">
</head>
<body>
    <main>
        <form action="create_conference.php" method="POST">
            <label for="title">Conference Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="date">Conference Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="description">Conference Description:</label>
            <textarea id="description" name="description" required></textarea>

            <label for="venue">Conference Venue:</label>
            <input type="text" id="venue" name="venue" required>

            <input type="submit" value="Create Conference">
        </form>
    </main>
    <footer>
        <p>&copy; 2023 Conference Management System</p>
    </footer>
</body>
</html>

<?php
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind parameters
$stmt = $conn->prepare("INSERT INTO conferences (title, date, description, venue) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $title, $date, $description, $venue);

// Set parameters and execute
$title = $_POST['title'];
$date = $_POST['date'];
$description = $_POST['description'];
$venue = $_POST['venue'];
$stmt->execute();

echo "Conference created successfully";

$stmt->close();
$conn->close();
?>
