<!DOCTYPE html>
<html>
  <head>
    <title>Login Failed</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      .container {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        box-sizing: border-box;
        padding: 0 20px;
      }
      .error-message {
        text-align: center;
        color: red;
        font-size: 24px;
        margin-bottom: 20px;
      }
      .try-again {
        text-align: center;
      }
      .try-again a {
        color: #007bff;
        text-decoration: none;
      }
      .try-again a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="error-message">Login failed. Please try again.</div>
      <div class="try-again">
        <a href="login.php">Try Again</a>
      </div>
    </div>
  </body>
</html>
<?php session_destroy(); ?>