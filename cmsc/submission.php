<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission page</title>
    <link rel="stylesheet" href="css/submission.css">
</head>
<body>
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
    
    <input type="submit" value="Submit">
</form>
</body>
</html>