<?php 
include("connectiom.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    header {
      background-color: black;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    .logo {
      display: inline-block;
      /* Make sure it's an inline block */
      vertical-align: middle;
      /* Align vertically to the middle */
    }

    .header-text {
      display: inline-block;
      /* Make sure it's an inline block */
      vertical-align: middle;
      /* Align vertically to the middle */
    }

    body {
      background-color: #ffffff;
    }

    .login-container {
      margin-top: 150px;
    }
  </style>
</head>

<body>

  <header>
    <div class="logo">
      <img src="logo.png" alt="Logo" width="50" height="50">
    </div>
    <div class="header-text">
      <h8>MAHAVIR EDUCATION TRUST'S</h8>
      <h2>Shah & Anchor Kutchhi Engineering college</h2>

    </div>
  </header>

  <div class="container login-container">
    <div class="row">
      <!-- Student Login -->
      <div class="col-md-6" id="form1">
        <h2>Student Login</h2>
        <form name="form1" method="post" action="index.html">
          <div class="form-group">
            <label for="smartCardId">Smartcard ID No:</label>
            <input type="text" class="form-control" id="smartCardId" placeholder="Enter Smartcard ID No" required>
          </div>
          <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" class="form-control" id="dob" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>

      <!-- Admin Login -->
      <div class="col-md-6" id="form2">
        <h2>Admin Login</h2>
        <form name="form2" method="post">
          <div class="form-group" name="form2">
            <label for="adminUsername">Username:</label>
            <input type="text" class="form-control" id="adminUsername" placeholder="Enter Admin Username" required>
          </div>
          <div class="form-group">
            <label for="adminPassword">Password:</label>
            <input type="password" class="form-control" id="adminPassword" placeholder="Enter Admin Password" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>