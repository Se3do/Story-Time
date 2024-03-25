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

  <div class="new-wrapper">

    <div id="main">

      <div id="main-contents">
        <div>
          <h2 id="title">Login as Admin</h2>
          <hr>
          <form method="post" action="" class="add-admin-form">
            <input placeholder="Admin Username" type="text" name="Admin_Username" class="input">
            <input placeholder="Admin Password" type="text" name="Admin_Password" class="input">
            <button name="action" type="submit" value="submit" class="add-admin"> Login </button>
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
      $query = "SELECT * FROM `admins` WHERE `Admin_Username` ='$Admin_Username' and `Admin_Password`='$Admin_Password'";
      $sql = mysqli_query($con, $query);

      if ($sql->num_rows > 0) {
        session_start();
        $_SESSION['Admin_Username'] = $Admin_Username;

  ?>
        <script type="text/javascript">
          alert("Logged in successfully");
          window.location.href = 'admins.php';
        </script>
      <?php

      } else {
      ?>
        <script type="text/javascript">
          alert("Incorrect Username or Password !");
        </script>

  <?php
      }
    }
  }
  ?>
</body>