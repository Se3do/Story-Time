<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="Css/admin.css">


</head>

<body>
  <?php
  include("connection.php");
  $Book_id = $_GET['Book_id'];
  session_start();
  if (!isset($_SESSION['Customer_Mail'])) {
  ?>
    <script>
      alert("You have to be Logged in to buy a Book !");
      window.location.href = "final lo.php";
    </script>
  <?php
  }
  $user_Mail = $_SESSION['Customer_Mail'];
  $Book_price;

  $query = "SELECT * FROM `books` where books.Book_id = $Book_id;";
  $sql = mysqli_query($con, $query);
  if (mysqli_num_rows($sql) > 0) {
    while ($row = mysqli_fetch_array($sql)) {
      $Book_price = $row["Book_price"];
    }
  } ?>
  <div class="centered">

    <div style="padding: 80px 300px;">
      <h2 id="title">Payment Details</h2>
      <hr>
      <form action="" method="post" class="add-admin-form" style="margin-top: 15px;">
        <input placeholder="Full Name" type="text" name="Full_name" class="input">
        <input placeholder="Credit Card Number" type="text" name="Card_number" class="input">
        <h4 id="title" style="margin-top: 10px;">Price :<?php echo $Book_price ?>.99$</h4>
        <button type="submit" value="submit" name="action" class="add-admin" style="border: 1px solid black;margin:0px;"> Confirm Payment </button>
      </form>
    </div>

  </div>

  <?php
  include("connection.php");
  if (@$_POST['action']) {
    if ($_POST['action'] == 'submit') {
      $Customer_Mail = $user_Mail;
      $Fullname = $_POST['Full_name'];
      $Card = $_POST['Card_number'];

      // SQL query to add data to table
      $sql = "INSERT INTO orders (Customer_Mail, Book_id, Customer_Full_Name, Order_Card_Number)
        VALUES ('$Customer_Mail', $Book_id, '$Fullname', '$Card')";

      if ($con->query($sql) === TRUE) {
  ?>
        <script>
          alert("Order has been placed successfully");
          window.location.href = 'book-details.php?Book_id=<?php echo $Book_id ?>';
        </script>
  <?php
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
    }
  }
  ?>
</body>

</html>