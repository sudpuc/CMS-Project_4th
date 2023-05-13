<!DOCTYPE html>
<html>
<head>
	<title>Conference Paper Review</title>
    <link rel="stylesheet" href="css/reviewer.css">
</head>
<body>
	<h1>Conference Paper Review System</h1>
	<h2>Reviewer Login</h2>
	<form action="reviewer_login.php" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Login">
	</form>
	
	<h2>Conference Admin Login</h2>
	<form action="admin_login.php" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Login">
	</form>
	
	<h2>Assigned Papers</h2>
	<table>
		<tr>
			<th>Paper ID</th>
			<th>Title</th>
			<th>Abstract</th>
			<th>Reviewer</th>
			<th>Feedback</th>
			<th>Submit Review</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Example Paper Title</td>
			<td>Example Paper Abstract</td>
			<td>Reviewer A</td>
			<td><textarea></textarea></td>
			<td><input type="submit" value="Submit"></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Another Paper Title</td>
			<td>Another Paper Abstract</td>
			<td>Reviewer B</td>
			<td><textarea></textarea></td>
			<td><input type="submit" value="Submit"></td>
		</tr>
		<!-- Add more rows for additional papers -->
	</table>
</body>
</html>
