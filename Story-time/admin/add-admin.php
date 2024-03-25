<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap" rel="stylesheet">
  <title>Home</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../Css/admin.css">
</head>

<body>
  <div class="primary-nav">

    <button href="#" class="hamburger open-panel nav-toggle">
      <span class="screen-reader-text">Menu</span>
    </button>

    <nav role="navigation" class="menu">

      <a href="#" class="logotype">Story<span>Time</span></a>

      <div class="overflow-container">

        <ul class="menu-dropdown">
          <br>
          <li><a href="admins.php">Admins</a><span class="icon"><i class="fa fa-dashboard"></i></span></li>

          <li><a href="add-admin.php">Add new Admin</a><span class="icon"><i class="fa fa-envelope"></i></span></li>

          <li><a href="admin-Book-list.php">Books List</a><span class="icon"><i class="fa fa-dashboard"></i></span></li>

          <li><a href="add-book.php">Add Books</a><span class="icon"><i class="fa fa-dashboard"></i></span></li>

          <li><a href="users.php">Users</a><span class="icon"><i class="fa fa-heart"></i></span></li>

          <li><a href="admin-login.php" onclick="logout()">Logout</a><span class="icon"><i class="fa fa-envelope"></i></span></li>
          <script>
            function logout() {
              <?php unset($_SESSION['Admin_Username']) ?>
              alert("Logged out successfully");
            }
          </script>
        </ul>

      </div>

    </nav>

  </div>

  <div class="new-wrapper">

    <div id="main">

      <div id="main-contents">
        <div>
          <h2 id="title">Add an Admin</h2>
          <hr>
          <form action="" method="post" class="add-admin-form">
            <input placeholder="Admin Username" type="text" name="Admin_Username" class="input">
            <input placeholder="Admin Password" type="text" name="Admin_Password" class="input">
            <button name="action" type="submit" value="submit" class="add-admin"> Submit! </button>
          </form>
        </div>
      </div>

    </div>

  </div>
  <script src="/Js/admin.js"></script>
  <?php
  include("../connection.php");
  if (@$_POST['action']) {
    if ($_POST['action'] == 'submit') {
      $Admin_Username = $_POST['Admin_Username'];
      $Admin_Password = $_POST['Admin_Password'];

      // SQL query to add data to table
      $sql = "INSERT INTO admins (Admin_Username, Admin_Password) VALUES ('$Admin_Username', '$Admin_Password')";

      if ($con->query($sql) === TRUE) {
  ?>
        <script>
          alert("New admin has been added successfully");
          window.location.href = 'add-admin.php';
        </script>
  <?php
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
    }
  }
  ?>
</body>