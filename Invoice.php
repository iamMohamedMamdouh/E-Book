
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="shortcut icon" href="favicon2.ico" type="image/x-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
      <link rel="stylesheet" href="/bootstrap.min.css">
      <link rel="stylesheet" href="swiper-bundle.min.css">
      <link rel="stylesheet" href="styles.css">
      <title>Invoice</title>
</head>
<body>
  <header class="header" id="header">
    <nav class="nav container">
       <a href="index.php" class="nav__logo">
          <i class="ri-book-3-line"></i>DOUHA
       </a>
       <div class="nav__menu">
          <ul class="nav__list">
    
             <li class="nav__item"> 
                <a href="index.php#home" class="nav__link" >
                   <i class="ri-home-line"></i>
                   <span>Home</span>
                </a>
             </li>

             <li class="nav__item">
                <a href="index.php#featured" class="nav__link">
                   <i class="ri-book-3-line"></i>
                   <span>Featured</span>
                </a>
             </li>

             <li class="nav__item">
                <a href="index.php#discount" class="nav__link">
                   <i class="ri-price-tag-3-line"></i>
                   <span>Discount</span>
                </a>
             </li>

             <li class="nav__item">
                <a href="index.php#new" class="nav__link">
                   <i class="ri-bookmark-line"></i>
                   <span>New Books</span>
                </a>
             </li>

             <li class="nav__item">
                <a href="index.php#testimonial" class="nav__link">
                   <i class="ri-message-3-line"></i>
                   <span>Testimonial</span>
                </a>
             </li>

          </ul>
       </div>
       <div class="nav__actions">
          <!-- Serch button -->
          <i class="ri-search-line search-button" id="search-button"></i>

          <!-- login button -->
          <aside class="cartIcon">
            <!-- Nav -->
            <div class="nav-containt">
             <i class="ri-shopping-cart-line" id="cart-Icon" title="Your Cart"></i>
                <!-- cart -->
                <div class="Cart">
                    <h1 class="cartTitle">Your Cart</h1>
                    <!-- cartContent -->
                    <div class="cart-content">
                    </div>
                    <!-- TOTAL -->
                    <div class="total">
                        <div class="total-title">Total</div>
                        <div class="total-price"><sup class="currency">$</sup> 0</div>
                    </div>
                    <!-- BUY BUTTON -->
                    <button type="button" class="btn-buy button  ">BUY NOW!</button>
                    <!-- CART CLOSE -->
                    <i class="ri-close-line" id="cart-close"></i> 
                </div>
            </div>
        </aside>
        
          <!-- Theme button -->
          <a href="About1.html"><i class="ri-moon-line change-theme" id="theme-button"></i></a>


       </div>
    </nav>
    
 </header>

 <!--                 SEARCH                    -->
 <div class="search" id="search-content">
  <form class="search__form">
    <i class="ri-search-line search__icon"></i>
    <input type="search" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" placeholder="What are you looking for?" class="search__input">
  </form>
  <i class="ri-close-line search__close" id="search-close"></i>
  <br>
  <div id="search-results"></div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.search__form').submit(function(e) {
      e.preventDefault();
      var search = $('.search__input').val();
      $.ajax({
        url: 'search.php',
        method: 'GET',
        data: { search: search },
        beforeSend: function() {
          $('#search-results').html('<p>Loading...</p>');
        },
        success: function(response) {
          $('#search-results').html(response);
        }
      });
    });
  });
</script>

 <br> <br>
  
  <div class="container mt-5 new section new__container" style="text-align: center;color: var(--text-color);">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header"   style="background-color:var(--container-color);">
            Invoice
          </div>
          <!-- <div class="card-body"style="background-color:var(--white-color);">
            <div class="row">
              <div class="col-md-6">
                <p><strong>Customer Name:</strong> John Doe</p>
                <p><strong>Email:</strong> john@example.com</p>
                <p><strong>Address:</strong> 123 Street, City, Country</p>
              </div>
              <div class="col-md-6">
                <p><strong>Order Date:</strong> May 5, 2024</p>
                <p><strong>Order ID:</strong> #123456</p>
                <p><strong>Total Amount:</strong> $100.00</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-12">
                <h5>Order Details</h5>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>Quantity</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Product 1</td>
                      <td>1</td>
                      <td>$50.00</td>
                    </tr>
                    <tr>
                      <td>Product 2</td>
                      <td>2</td>
                      <td>$50.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div> -->
          <!-- /////////////////////////////////////////////////////////////// -->
          <div class="card-body" style="background-color: var(--white-color);">
            <div class="row">
                <div class="col-md-6"><?php
$conn = mysqli_connect("localhost", "root", "", "myfirstdatabase") or die("Couldn't connect");
$selectQuery = "SELECT * FROM orders ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $selectQuery);
if (mysqli_num_rows($result)>0) {
    foreach($result as $row)
    {
      ?>
         
      <?php
    }
}
?> 
                    <p><strong>Customer Name:</strong><br><?php echo$row['FirstName'] . " " . $row['LastName']  ; ?> </p>  
                    <p><strong>Email:</strong><br> <?php echo$row['Email'] ; ?></p>
                    <p><strong>Address:</strong><br> <?php echo$row['Address'] . ", " .$row['Area'] ; ?></p>
                    <p><strong>Your Phone:</strong><br> <?php echo$row['Phone'] ; ?></p>
                </div>
                <div class="col-md-6">
                    <p><strong>Order Date:</strong><br> <?php echo date("F j, Y"); ?></p>
                    <p><strong>Delivery Time:</strong><br> <?php echo date("F j, Y", strtotime("+5 days")); ?></p> 
                    <p><strong>Order ID:</strong> #<?php echo$row['Id'] ; ?></p>
                    
                </div>
            </div>
            <hr>
        </div>
          <!-- /////////////////////////////////////////////////////////////// -->
          <div class="card-footer text-muted"style="background-color:var(--body-color);">
            Thank you for shopping with us!
          </div>
        </div>
        <a href="index.php"><button class="button btn-buy">Back</button></a> 
      </div>
    </div>
  </div>
   
  <script src="/bootstrap.min.js"></script>
<script src="/bootstrap.js"></script>
<script src="/bootstrap.bundle.js"></script>
<!--                 SCROLL UP                 -->
 

<script src="scrollreveal.min.js"></script>
 <script src="swiper-bundle.min.js"></script>
<script src="main.js"></script>
</body>
</html>