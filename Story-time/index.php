<?php include("header.php");?>


<main>
  <img src="//dispatch.barnesandnoble.com/content/dam/ccr/global/global-nav-banner/2024/03/PROD-28803_Global_Nav_Banner_Easter_02-15.jpg" class="globalNavBannerImg" alt="Easter Gift Collection - Shop Now ">
  <div class="premium">Premium Members Get 10% Off and Earn Rewards <a href="">Find Out More</a></div>


  <section id="Featured">
    <div class="section-top">
      <h2 class="section-name">Featured: </h2>
      <a class="see-all" href="">See All</a>
    </div>
    <div class="section-wrapper">
      <button class="left" type="button" onclick="" id="l1"><img src="images/left-arrow.png" alt="left"></button>
      <div class="section-content" id="section1">
        <?php
        include("connection.php");
        $query = "SELECT * FROM `books` ;";
        $sql = mysqli_query($con, $query);
        if (mysqli_num_rows($sql) > 0) {
          while ($row = mysqli_fetch_array($sql)) {
        ?>
            <div class="book">
              <a href="book-details.php?Book_id=<?php echo  $row['Book_id'];?>">
                <img class="book-img" src="<?php echo  $row['Book_img']; ?>">
              </a>
            </div>
        <?php }
        } ?>
      </div>
      <div class="right-cont"><button class="right" type="button" onclick="" id="r1"><img src="images/right-arrow.png" alt="left"></button></div>
    </div>
    <hr>
  </section>
  <section id="Trending">
    <div class="section-top">
      <h2 class="section-name">Trending: </h2>
      <a class="see-all" href="">See All</a>
    </div>
    <div class="section-wrapper">
      <button class="left" type="button" onclick="" id="l2"><img src="images/left-arrow.png" alt="left"></button>
      <div class="section-content" id="section2">
        <?php
        include("connection.php");
        $query = "SELECT * FROM `books` WHERE books.book_type LIKE 'book';";
        $sql = mysqli_query($con, $query);
        if (mysqli_num_rows($sql) > 0) {
          while ($row = mysqli_fetch_array($sql)) {
        ?>
            <div class="book">
              <a href="book-details.php?Book_id=<?php echo  $row['Book_id'];?>">
                <img class="book-img" src="<?php echo  $row['Book_img']; ?>">
              </a>
            </div>
        <?php }
        } ?>
      </div>
      <div class="right-cont"><button class="right" type="button" onclick="" id="r2"><img src="images/right-arrow.png" alt="left"></button></div>
    </div>
    <hr>
  </section>
  <section id="Novels">
    <div class="section-top">
      <h2 class="section-name">Novels: </h2>
      <a class="see-all" href="">See All</a>
    </div>
    <div class="section-wrapper">
      <button class="left" type="button" onclick="" id="l3"><img src="images/left-arrow.png" alt="left"></button>
      <div class="section-content" id="section3">
        <?php
        include("connection.php");
        $query = "SELECT * FROM `books` WHERE books.book_type LIKE 'novel';";
        $sql = mysqli_query($con, $query);
        if (mysqli_num_rows($sql) > 0) {
          while ($row = mysqli_fetch_array($sql)) {
        ?>
            <div class="book">
              <a href="book-details.php?Book_id=<?php echo  $row['Book_id'];?>">
                <img class="book-img" src="<?php echo  $row['Book_img']; ?>">
              </a>
            </div>
        <?php }
        } ?>
      </div>
      <div class="right-cont"><button class="right" type="button" onclick="" id="r3"><img src="images/right-arrow.png" alt="left"></button></div>
    </div>
    <hr>
  </section>
  <section id="Manga">
    <div class="section-top">
      <h2 class="section-name">Manga: </h2>
      <a class="see-all" href="">See All</a>
    </div>
    <div class="section-wrapper">
      <button class="left" type="button" onclick="" id="l4"> <img src="images/left-arrow.png" alt="left"></button>
      <div class="section-content" id="section4">
        <?php
        include("connection.php");
        $query = "SELECT * FROM `books` WHERE books.book_type LIKE 'manga';";
        $sql = mysqli_query($con, $query);
        if (mysqli_num_rows($sql) > 0) {
          while ($row = mysqli_fetch_array($sql)) {
        ?>
            <div class="book">
              <a href="book-details.php?Book_id=<?php echo  $row['Book_id'];?>">
                <img class="book-img" src="<?php echo  $row['Book_img']; ?>">
              </a>
            </div>
        <?php }
        } ?>
      </div>
      <div class="right-cont"><button class="right" type="button" onclick="" id="r4"><img src="images/right-arrow.png" alt="left"></button></div>
    </div>
    <hr>
  </section>
  <section id="Fiction">
    <div class="section-top">
      <h2 class="section-name">Fiction: </h2>
      <a class="see-all" href="">See All</a>
    </div>
    <div class="section-wrapper">
      <button class="left" type="button" onclick="" id="l5"><img src="images/left-arrow.png" alt="left"></button>
      <div class="section-content" id="section5">
        <?php
        include("connection.php");
        $query = "SELECT * FROM `books` WHERE books.book_genre LIKE '%fiction%';";
        $sql = mysqli_query($con, $query);
        if (mysqli_num_rows($sql) > 0) {
          while ($row = mysqli_fetch_array($sql)) {
        ?>
            <div class="book">
              <a href="book-details.php?Book_id=<?php echo  $row['Book_id'];?>">
                <img class="book-img" src="<?php echo  $row['Book_img']; ?>">
              </a>
            </div>
        <?php }
        } ?>
      </div>
      <div class="right-cont"><button class="right" type="button" onclick="" id="r5"><img src="images/right-arrow.png" alt="left"></button></div>
    </div>
    <hr>
  </section>
  <section id="Kids">
    <div class="section-top">
      <h2 class="section-name">Kids: </h2>
      <a class="see-all" href="">See All</a>
    </div>
    <div class="section-wrapper">
      <button class="left" type="button" onclick="" id="l6"><img src="images/left-arrow.png" alt="left"></button>
      <div class="section-content" id="section6">
        <?php
        include("connection.php");
        $query = "SELECT * FROM `books` WHERE books.book_genre LIKE '%kids%';";
        $sql = mysqli_query($con, $query);
        if (mysqli_num_rows($sql) > 0) {
          while ($row = mysqli_fetch_array($sql)) {
        ?>
            <div class="book">
              <a href="book-details.php?Book_id=<?php echo  $row['Book_id'];?>">
                <img class="book-img" src="<?php echo  $row['Book_img']; ?>">
              </a>
            </div>
        <?php }
        } ?>
      </div>
      <div class="right-cont"><button class="right" type="button" onclick="" id="r6"><img src="images/right-arrow.png" alt="left"></button></div>
    </div>
  </section>
</main>
<?php include("footer.php"); ?>