<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Admin Page</title>
    <link rel="stylesheet" href="css/assign.css">
    <script src="js/assign.js"></script>
</head>
<body>
    <header>
        <h1>Conference Admin Page</h1>
        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Submissions</a></li>
                <li><a href="#">Reviewers</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Assign Reviewers</h1>
        <div class="paper-list">
            <h2>Papers to Review</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Authors</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A Paper on Computer Science</td>
                        <td>John Doe, Jane Doe</td>
                        <td>Computer Science</td>
                        <td><button class="assign-btn">Assign</button></td>
                    </tr>
                    <tr>
                        <td>A Paper on Mathematics</td>
                        <td>John Smith, Jane Smith</td>
                        <td>Mathematics</td>
                        <td><button class="assign-btn">Assign</button></td>
                    </tr>
                    <tr>
                        <td>A Paper on Physics</td>
                        <td>John Johnson, Jane Johnson</td>
                        <td>Physics</td>
                        <td><button class="assign-btn">Assign</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="reviewer-list">
            <h2>Available Reviewers</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Expertise</th>
                        <th>Assign</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Reviewer 1</td>
                        <td>Computer Science</td>
                        <td><button class="assign-btn">Assign</button></td>
                    </tr>
                    <tr>
                        <td>Reviewer 2</td>
                        <td>Mathematics</td>
                        <td><button class="assign-btn">Assign</button></td>
                    </tr>
                    <tr>
                        <td>Reviewer 3</td>
                        <td>Physics</td>
                        <td><button class="assign-btn">Assign</button></td>
                    </tr>
                    <tr>
                        <td>Reviewer 4</td>
                        <td>Engineering</td>
                        <td><button class="assign-btn">Assign</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <p>Copyright &copy; 2023</p>
    </footer>
    <script src="js/admin.js"></script>
</body>
</html>
