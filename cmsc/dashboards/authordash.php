<?php include '../connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission page</title>
    <link rel="stylesheet" href="css/authordash.css">
    <link rel="stylesheet" href="js/authordash.js">
</head>
<body>
    <header>
        <h1>Author Dashboard</h1>
        <nav>
            <ul>
                <li><a href="#">Submitted Papers</a></li>
                <li><a href="#">In Review</a></li>
                <li><a href="#">Join Conferences</a></li>
                <li><a href="../login.php">Log out</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Paper Submission Form</h1>
        <form action="submit_paper.php" method="post" enctype="multipart/form-data">
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" required minlength="5" maxlength="50"><br><br>

            <label for="authors">Authors:</label><br>
            <input type="text" id="authors" name="authors" required minlength="3" maxlength="100"><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="file">File:</label><br>
            <input type="file" id="file" name="file" required accept=".pdf"><br><br>

            <label for="category">Category:</label><br>
            <select id="category" name="category" required>
                <option value="" selected disabled hidden>Select a category</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Physics">Physics</option>
                <option value="Engineering">Engineering</option>
            </select><br><br>

            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">I agree to the terms and conditions</label><br><br>

            <input href="pages/submit_paper.php" type="submit" value="Submit">
        </form>
    </main>
    <footer>
        <p>Copyright &copy; 2023</p>
    </footer>
</body>
</html>
<?php
// check if form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // prepare and bind statement
    $s = $conn->prepare("INSERT INTO papers (title, authors, email, file, category) VALUES (?, ?, ?, ?, ?)");
    $s->bind_param("sssss", $title, $authors, $email, $file, $category);

    // set parameters and execute statement
    $title = $_POST['title'];
    $authors = $_POST['authors'];
    $email = $_POST['email'];
    $file = $_FILES['file']['name'];
    $category = $_POST['category'];

    // move uploaded file to destination folder
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

    $s->execute();

    echo "Paper submitted successfully.";

    // close statement and database connection
    $s->close();
    $conn->close();
}
?>
