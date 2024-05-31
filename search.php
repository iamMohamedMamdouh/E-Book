<?php
$conn = mysqli_connect("localhost", "root", "", "myfirstdatabase") or die("Couldn't connect");

if (isset($_GET['search'])) {
  $filtervalues = $_GET['search'];
  $query = "SELECT * FROM product WHERE CONCAT(name) LIKE '%$filtervalues%' ";
  $query_run = mysqli_query($conn, $query);

  if (mysqli_num_rows($query_run) > 0) {
    while ($items = mysqli_fetch_assoc($query_run)) {
      ?>
      <article class="featured__card swiper-slide" style="margin-left: 40%;">
        <span class="featured__title">Found</span>
        <a href="index.php#featured"> 
          <img src="data:image/png;base64,<?= base64_encode($items['image']); ?>" alt="Product Image">
        </a>
        <h2 class="featured__title"><?= $items['name']; ?></h2>
        <div class="featured__prices"> 
          <span class="featured__discount"><?= $items['price']; ?></span>
        </div>
      </article>
      <?php
    }
  } else {
    ?>
    <div>
    <article class="featured__card swiper-slide" style="margin-left: 40%;">
      <h2 colspan="4">NO Record Found</h2>
      </article>
    </div>
    <?php
  }
}
?>