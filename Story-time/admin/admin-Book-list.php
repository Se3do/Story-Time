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
  <link rel="stylesheet" href="../Css/admin-books.css">
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
          <h2 id="title">Books List</h2>
        </div>
        <div>
          <?php
          include("../connection.php");
          $query = "SELECT * FROM `books` ;";
          $sql = mysqli_query($con, $query);
          if (mysqli_num_rows($sql) > 0) {
            while ($row = mysqli_fetch_array($sql)) {
          ?>
              <hr>
              <div id="book-id">
                <div><img id="book-img-id" src="../<?php echo  $row['Book_img']; ?>"></div>
                <div id="book-info">
                  <h3 id="book-name"><?php echo  $row['Book_title']; ?></h3>
                  <div id="price-buy">
                    <h4>Price: <?php echo  $row['Book_price']; ?>.99$</h4>
                  </div>
                  <form action="" method="post" id="edit-delete">
                    <a href="update-book.php?Book_id=<?php echo  $row['Book_id']; ?>" class="button1">edit</a>
                    <input type="submit" name="action" value="delete" class="button1">
                    <input type="hidden" name="id" value="<?php echo $row['Book_id']; ?>" />
                  </form>
                </div>
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
      $sql = " DELETE FROM books WHERE Book_id = $id ";

      if ($con->query($sql) === TRUE) {
  ?>
        <script>
          alert("Book deleted successfully");
          window.location.href = 'admin-Book-list.php';
        </script>
  <?php
      }
    }
  }
  ?>
</body>