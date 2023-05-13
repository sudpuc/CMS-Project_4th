<!DOCTYPE html>
<html>
  <head>
    <title>Reviewer Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/reviewnot.css">
    <link rel="stylesheet" type="text/css" href="css/notification.css">
  </head>
  <body>
    <div class="container">
      <header>
        <h1>Reviewer Dashboard</h1>
        <div class="notifications">
          <a href="notifications.html" class="notification-icon">
            <img src="images/bell.png" width="25" height="30" alt="Notification Icon">
            <span class="notification-count">3</span>
          </a>
        </div>
        <a href="#" class="logout">Logout</a> 
      </header>
      <nav>
        <ul>
          <li><a href="#" class="active">Assigned Papers</a></li>
          <li><a href="#">Completed Reviews</a></li>
          <li><a href="#">Account Settings</a></li>
        </ul>
      </nav>
      <section>
        <h2>Assigned Papers</h2>
        <table>
          <thead>
            <tr>
              <th>Paper Title</th>
              <th>Author</th>
              <th>Status</th>
              <th>Score</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Paper 1 Title</td>
              <td>Author Name</td>
              <td>In Progress</td>
              <td>--</td>
              <td><button class="review-button">Review</button></td>
            </tr>
            <tr>
              <td>Paper 2 Title</td>
              <td>Author Name</td>
              <td>Submitted</td>
              <td>8.5</td>
              <td><button class="view-button">View</button></td>
            </tr>
            <!-- Add more rows for additional assigned papers -->
          </tbody>
        </table>
      </section>
      <footer>
        <p>&copy; 2023 Reviewer Dashboard</p>
      </footer>
    </div>
    <script src="script.js"></script>
  </body>
</html>


