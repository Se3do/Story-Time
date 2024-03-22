<?php include("header.php");?>


<main>
    <img
      src="//dispatch.barnesandnoble.com/content/dam/ccr/global/global-nav-banner/2024/03/PROD-28803_Global_Nav_Banner_Easter_02-15.jpg"
      class="globalNavBannerImg" alt="Easter Gift Collection - Shop Now ">
    <div class="premium">Premium Members Get 10% Off and Earn Rewards <a href="">Find Out More</a></div>

    
      <section>
      <div class="section-top">
        <h2 class="section-name">Featured: </h2>
        <a class="see-all" href="">See All</a>
      </div>
      <div class="section-content">
        <?php 
          include("connection.php");
          $query="SELECT * FROM `books` ;";
          $sql=mysqli_query($con,$query); 
          if(mysqli_num_rows($sql)>0)
{
while($row=mysqli_fetch_array($sql))
{ 
?>
        <div class="book">
          <img class="book-img" src="<?php echo  $row['Book_img'];?>">
        </div>
<?php }}?>
      </div>
      
    </section>
</main>
<?php include("footer.php");?>
