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
          <h2 id="title">Story Time Users</h2>
          <hr>
          <?php
          include("../connection.php");
          $query = "SELECT * FROM `customers` ;";
          $sql = mysqli_query($con, $query);
          if (mysqli_num_rows($sql) > 0) {
            while ($row = mysqli_fetch_array($sql)) {
          ?>
              <div class="admin-name">
                <h3><?php echo  $row['Customer_UserName']; ?></h3>
                <form action="" method="post">
                  <button type="submit" name="action" value="delete" class="button">
                    <svg viewBox="0 0 448 512" class="svgIcon">
                      <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                    </svg>
                  </button>
                  <input type="hidden" name="id" value="<?php echo $row['Customer_id']; ?>" />
                </form>
              </div>
          <?php }
          } ?>
        </div>
      </div>

    </div>

  </div>
  <script src="/Js/admin.js"></script>
  <?php
  if (@$_POST['action'] && $_POST['id']) {
    if ($_POST['action'] == 'delete') {
      $id = $_POST['id'];

      // SQL query to delete data from table
      $sql = " DELETE FROM customers WHERE Customer_id = $id ";

      if ($con->query($sql) === TRUE) {
  ?>
        <script>
          alert("User deleted successfully");
          window.location.href = 'users.php';
        </script>
  <?php
      }
    }
  }
  ?>
</body>