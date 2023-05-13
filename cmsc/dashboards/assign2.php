<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/assign2.css">
    <script src="js/assign2.js"></script>
</head>
<body>
	<div class="container">
		<header>
			<h1>Conference Admin Dashboard</h1>
			<a href="#" class="logout">Logout</a>
		</header>
		<nav>
			<ul>
				<li><a href="#" class="active">Conference Dates</a></li>
				<li><a href="#">Conference Schedule</a></li>
				<li><a href="#">Manage Submissions</a></li>
				<li><a href="#">User Accounts</a></li>
				<li><a href="#">Settings</a></li>
			</ul>
		</nav>
		<section>
			<h2>Conference Dates</h2>
			<button class="add-button">Add Date</button>
			<table>
				<thead>
					<tr>
						<th>Date</th>
						<th>Description</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>June 1, 2023</td>
						<td>Abstract submission deadline</td>
						<td><button class="edit-button">Edit</button><button class="delete-button">Delete</button></td>
					</tr>
					<tr>
						<td>August 1, 2023</td>
						<td>Early bird registration deadline</td>
						<td><button class="edit-button">Edit</button><button class="delete-button">Delete</button></td>
					</tr>
					<tr>
						<td>October 1-3, 2023</td>
						<td>Conference dates</td>
						<td><button class="edit-button">Edit</button><button class="delete-button">Delete</button></td>
					</tr>
                    <tr>
                        <td>
                            <label for="date-input">Date</label>
                            <input type="date" id="date-input">
                        </td>
                        <td>
                            <label for="description-input">Description</label>
                            <input type="text" id="description-input">
                        </td>
                        <td>
                            <button class="save-button">Save</button>
                            <button class="cancel-button">Cancel</button>
                        </td>
                    </tr>
				</tbody>
			</table>
		</section>
		<footer>
			<p>&copy; 2023 Conference Admin Dashboard</p>
		</footer>
	</div>
</body>
</html>