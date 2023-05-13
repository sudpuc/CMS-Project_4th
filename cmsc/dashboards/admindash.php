<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Conference Management System - Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/admindash.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<div class="header">
		<h1>            Conference Admin Dashboard</h1>
        <p>logout</p>
	</div>
	<div class="sidebar">
		<ul>
			<li><a href="pages/users.php">User Management</a></li>
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
		<h2>Welcome, Admin!</h2>
		<p>Here you can manage all aspects of the conference management system.</p>
		<div class="card">
			<i class="fas fa-user fa-3x"></i>
			<h3>User Management</h3>
			<p>View and manage user accounts, including creating, updating, and deleting accounts.</p>
		</div>
		<div class="card">
			<i class="fas fa-calendar-alt fa-3x"></i>
			<h3>Conference Management</h3>
			<p>Create, update, and delete conferences, as well as manage the conference schedule, speakers, and attendees.</p>
		</div>
		<div class="card">
			<i class="fas fa-clipboard-check fa-3x"></i>
			<h3>Registration Management</h3>
			<p>Manage conference registrations, including approving or rejecting registrations, and managing payments.</p>
		</div>
		<div class="card">
			<i class="fas fa-file-alt fa-3x"></i>
			<h3>Content Management</h3>
			<p>Manage content for the conference website, such as adding or updating pages, uploading files, and managing images.</p>
		</div>
		<div class="card">
			<i class="fas fa-chart-bar fa-3x"></i>
			<h3>Reporting</h3>
			<p>Generate reports on conference attendance, registration, revenue, and other relevant data.</p>
		</div>
		<div class="card">
			<i class="fas fa-comments fa-3x"></i>
			<h3>Communication</h3>
			<p>Send email notifications to conference attendees and other users, as well as manage a messaging system for communication between users.</p>
		</div>
		<div class="card">
			<i class="fas fa-lock fa-3x"></i>
			<h3>Access Control</h3>
			<p>Manage user access to different parts of the system, including assigning conference admin roles to specific users.</p>
		</div>
<p>Track metrics such as user engagement, registration numbers, revenue, and more to gain insights into how the system is performing.</p>
</div>

</body>
</html>