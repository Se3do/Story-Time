<?php include("header.php"); ?>

<main style="margin-bottom: 50px">

  <?php

  include("connection.php");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];

    // Process the data (for example, save to a database)
    // Here, we'll just print the data for demonstration
    $query = "SELECT * FROM `books` where books.Book_title like '%$name%';";
  } else {
    $Book_id = $_GET['Book_id'];

    $query = "SELECT * FROM `books` where books.Book_id = $Book_id;";
  }
  $count = 0;
  $sql = mysqli_query($con, $query);
  if (mysqli_num_rows($sql) > 0) {
    while ($row = mysqli_fetch_array($sql)) {
  ?>
      <div class="order-cont">
        <?php if ($count > 0) {
          echo "<br>";
          echo "<hr>";
        }
        $count++;
        ?>

        <div id="book-id">
          <div><img id="book-img-id" src="<?php echo  $row['Book_img']; ?>"></div>
          <div id="book-info">
            <h1 id="book-name"><?php echo  $row['Book_title']; ?></h1>
            <p id="Genres"><b>Genres:</b> <?php echo  $row['Book_genre']; ?></p>
            <p id="book-description"><?php echo  $row['Book_description']; ?></p>
            <div id="price-buy">
              <input type="text" name = "Book_id" value = "<?php echo $row['Book_id']; ?>" hidden>
              <a class="fancy" href="payment.php?Book_id=<?php echo $row['Book_id']; ?>">
                <span class="top-key"></span>
                <span class="text">Buy This Book</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
              </a>
              <h2>Price: <?php echo  $row['Book_price']; ?>.99$</h2>
            </div>
          </div>
        </div>

      </div>
  <?php }
  } else {
  }

  ?>

</main>

<?php include("footer.php"); ?>