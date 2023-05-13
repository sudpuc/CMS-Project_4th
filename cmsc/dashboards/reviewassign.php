<?php include '../connection.php' ?>
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
			<h1>Conference Admin Dashboard</h1>
			<a href="../login.php" class="logout">Logout</a>
		</header>
		<nav>
			<ul>
				<li><a href="condash.php">Conference Dates</a></li>
				<li><a href="createcon.php">Create Conference</a></li>
				<li><a href="#" class="active">Assign Reviews</a></li>
				<li><a href="#">Settings</a></li>
                <li><a href="#">Settings</a></li>
			</ul>
		</nav>
		<section>
	
		</section>
        <h1>Assign Reviewer</h1>
        <form action="assign_reviewer.php" method="post">
            <label for="paper_title">Paper Title:</label>
            <input type="text" id="paper_title" name="paper_title" required>

            <label for="reviewer">Select a Reviewer:</label>
            <select id="reviewer" name="reviewer">
                <?php
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Get all reviewers from user table
                $s = "SELECT * FROM user WHERE role='reviewer'";
                $result = $conn->query($s);

                // Create an option for each reviewer
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
                    }
                }

                // Close database connection
                $conn->close();
                ?>
            </select>

            <input type="submit" value="Assign Reviewer">
        </form>
		<footer>
			<p>&copy; 2023 Conference Admin Dashboard</p>
		</footer>
	</div>
</body>
</html>
</html>

