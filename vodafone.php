<?php
// // Assuming you have already established a database connection
// $conn = mysqli_connect("localhost", "root", "", "myfirstdatabase") or die("Couldn't connect");
  
//    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
//        $phone = $_POST["phone"] ?? "";  
//         $query = "INSERT INTO vodafone (phone) VALUES (?)";
//          $stmt = mysqli_prepare($conn, $query); 
//           mysqli_stmt_bind_param($stmt, "s", $phone);
//           mysqli_stmt_execute($stmt);  
//          mysqli_stmt_close($stmt);
//           header("Location: Payment Methods.html"); exit(); } 
    ///////////////////////////////////////////////////////////////////////
     
$conn = mysqli_connect("localhost", "root", "", "myfirstdatabase") or die("Couldn't connect");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
  $phone = $_POST["phone"] ?? "";

  
  if (!empty($phone)) {
    
    $orderQuery = "SELECT id FROM orders WHERE phone = ?";
    $orderStmt = mysqli_prepare($conn, $orderQuery);
 
    mysqli_stmt_bind_param($orderStmt, "s", $phone);

    mysqli_stmt_execute($orderStmt);
 
    mysqli_stmt_bind_result($orderStmt, $orderId);
 
    if (mysqli_stmt_fetch($orderStmt)) {
     
      mysqli_stmt_close($orderStmt);
 
      $vodafoneQuery = "INSERT INTO vodafone (id_orders, phone) VALUES (?, ?)";
      $vodafoneStmt = mysqli_prepare($conn, $vodafoneQuery);
 
      mysqli_stmt_bind_param($vodafoneStmt, "is", $orderId, $phone);
 
      mysqli_stmt_execute($vodafoneStmt);
 
      mysqli_stmt_close($vodafoneStmt);
 
      header("Location: Payment Methods.html");
      exit();
    } else {
      
      echo " 
        <div style='font-family: Arial, sans-serif;color:  #333333; text-align: center;margin-top: 100px;'>
        <h1>Phone number not found in orders table</h1></div>";
    }
  } else {
    
    echo " 
        <div style='font-family: Arial, sans-serif;color:  #333333; text-align: center;margin-top: 100px;'>
        <h1>Phone number cannot be empty</h1></div> ";
    }
  }
 
 //////////////////////////////////////////////////////////////////
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    // Retrieve the phone number from the form submission
//    $phone = $_POST["phone"] ?? "";
 
//    // Prepare the SQL statement to insert into the orders table
//    $orderQuery = "INSERT INTO orders (phone) VALUES (?)";
//    $orderStmt = mysqli_prepare($conn, $orderQuery);
 
//    // Bind the phone number parameter for the orders table
//    mysqli_stmt_bind_param($orderStmt, "s", $phone);
 
//    // Execute the prepared statement for the orders table
//    mysqli_stmt_execute($orderStmt);
 
//    // Get the ID of the inserted order
//    $orderId = mysqli_insert_id($conn);
 
//    // Close the statement for the orders table
//    mysqli_stmt_close($orderStmt);
 
//    // Prepare the SQL statement to insert into the vodafone table
//    $vodafoneQuery = "INSERT INTO vodafone (id_orders, phone) VALUES (?, ?)";
//    $vodafoneStmt = mysqli_prepare($conn, $vodafoneQuery);
 
//    // Bind the ID and phone number parameters for the vodafone table
//    mysqli_stmt_bind_param($vodafoneStmt, "is", $orderId, $phone);
 
//    // Execute the prepared statement for the vodafone table
//    mysqli_stmt_execute($vodafoneStmt);
 
//    // Close the statement for the vodafone table
//    mysqli_stmt_close($vodafoneStmt);
 
//    // Redirect to the desired link or page
//    header("Location: Payment Methods.html");
//    exit();
//  }
?>

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
      <title>vodafone</title>
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
         <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" name="search" required
            value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>"
            placeholder="What are you looking for?" class="search__input">
            <!-- <button  type="submit" class="btn button">Search</button> -->
         </form>
         <i class="ri-close-line search__close" id="search-close"></i>
         <br>
         <article class="featured__card swiper-slide" style="margin-left: 40%;"  >
         <?php
                     $conn = mysqli_connect("localhost", "root", "", "myfirstdatabase") or die("Couldn't connect");
                     if (isset($_GET['search']))
                     {
                        $filtervalues = $_GET['search'];
                        $query = "SELECT * FROM product WHERE CONCAT(name) LIKE '%$filtervalues%' ";
                        $query_run = mysqli_query($conn,$query);

                        if (mysqli_num_rows($query_run)>0 )
                        {
                           foreach($query_run as $items)
                           {
                              ?>
                        <span class="featured__title"><?= $items['id']; ?></span>
                        <!-- <img src="<?= $items['image']; ?>> -->
                        <h2 class="featured__title"><?= $items['name']; ?></h2>
                        <div class="featured__prices"> 
                        <span class="featured__discount"><?= $items['price']; ?></span>
                        </div>


                         
                              <?php

                           }
                           
                        }
                        else{
                           ?>
                           <div>
                              <h2 colspan="4">NO Record Found</h2>
                          </div>
                           <?php
                        }
                     }
                      ?>
                      </article>
                      </div>
                       

 <br> <br><br><br><br><br>
     
 <form method="POST" action="">
  <div class="container mt-5 new section new__container" style="text-align: center;color: var(--text-color);">
    <div class="row" style="width: 100%;">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header"  style="background-color:var(--container-color);">
            Vodafone Cach
          </div>
          <div class="card-body"style="background-color:var(--white-color);">
            <form>
  <div class="form-group">
    
    <label for="phone">Phone Number</label>
    <input type="text" name="phone" id="phone" style="border-color:var(--border-color);box-shadow:1px var(--container-color)" class="form-control join__input" id="phone" placeholder="Enter your phone number" required>
    <br>
    <a href="Payment Methods.html" ><button type="submit" class="button">Confirm</button> 
     </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </form>

     
</body>
</html>