<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="shortcut icon" href="favicon1.ico" type="image/x-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
      <link rel="stylesheet" href="/bootstrap.min.css">
      <link rel="stylesheet" href="swiper-bundle.min.css">
      <link rel="stylesheet" href="styles1.css">
  <title>Checkout</title>
</head>
<body>
  <header class="header" id="header">
    <nav class="nav container">
       <a href="index.html" class="nav__logo">
          <i class="ri-book-3-line"></i>DOUHA
       </a>
       <div class="nav__menu">
          <ul class="nav__list">
    
             <li class="nav__item"> 
                <a href="index.html#home" class="nav__link" >
                   <i class="ri-home-line"></i>
                   <span>Home</span>
                </a>
             </li>

             <li class="nav__item">
                <a href="index.html#featured" class="nav__link">
                   <i class="ri-book-3-line"></i>
                   <span>Featured</span>
                </a>
             </li>

             <li class="nav__item">
                <a href="index.html#discount" class="nav__link">
                   <i class="ri-price-tag-3-line"></i>
                   <span>Discount</span>
                </a>
             </li>

             <li class="nav__item">
                <a href="index.html#new" class="nav__link">
                   <i class="ri-bookmark-line"></i>
                   <span>New Books</span>
                </a>
             </li>

             <li class="nav__item">
                <a href="index.html#testimonial" class="nav__link">
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
          <a href=" "><i class="ri-moon-line change-theme" id="theme-button"></i></a>


       </div>
    </nav>
    
 </header>

 <!--                 SEARCH                    -->
 <div class="search" id="search-content">
         <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="What are you looking for?" class="search__input">
         </form>
         <i class="ri-close-line search__close" id="search-close"></i>
      </div>
 <br><br>
 <form action="Checkoutphp.php" method="post"> 
  <div class="container mt-5 new section new__container" style="text-align: center;color: var(--text-color);border: 2px solid var(--border-color);">
    <div class="row" style="width: 100%;">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header"  style="background-color:var(--container-color);">
            Checkout
          </div>
          <div class="card-body"style="background-color:var(--white-color);">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="FirstName">First Name</label>
                  <input name="FirstName" style="border-color:var(--border-color);box-shadow:1px var(--container-color)" type="text" class="form-control join__input" id="firstName" placeholder="Enter your first name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="LastName">Last Name</label>
                  <input name="LastName" style="border-color:var(--border-color);box-shadow:1px var(--container-color)" type="text" class="form-control join__input" id="lastName" placeholder="Enter your last name" required>
                </div>
              </div>
              <div class="form-group">
                <label for="Address">Address</label>
                <textarea name="Address" style="border-color:var(--border-color);box-shadow:1px var(--container-color)" class="form-control join__input" id="address" rows="3" placeholder="Enter your address" required></textarea>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="Area">Area</label>
                  <input name="Area" style="border-color:var(--border-color);box-shadow:1px var(--container-color)" type="text" class="form-control join__input" id="area" placeholder="Enter your area" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="Email">Email</label>
                  <input name="Email"style="border-color:var(--border-color);box-shadow:1px var(--container-color)" type="email" class="form-control join__input" id="email" placeholder="Enter your email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="Phone">Phone</label>
                <input name="Phone" style="border-color:var(--border-color);box-shadow:1px var(--container-color)" type="text" class="form-control join__input" id="phone" placeholder="Enter your phone number" required>
              </div>
              <button class="button btn-buy">Checkout</button>
            </form>
             <!-- <a href="Payment Methods.html"><button class="button btn-buy">Checkout</button></a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
  <script src="/bootstrap.min.js"></script>
<script src="/bootstrap.js"></script>
<script src="/bootstrap.bundle.js"></script>
<!--                 SCROLL UP                 -->
<script src="scrollreveal.min.js"></script>
 <script src="swiper-bundle.min.js"></script>
<script src="main1.js"></script>
</body>
</html>

