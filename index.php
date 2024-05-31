<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="shortcut icon" href="favicon2.ico" type="image/x-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
      <link rel="stylesheet" href="/bootstrap.min.css">
      <link rel="stylesheet" href="swiper-bundle.min.css">
      <link rel="stylesheet" href="styles.css">
      <title>Book website</title>
   </head>
   <body>
      <!--                  HEADER                   -->
      <header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">
               <i class="ri-book-3-line"></i>DOUHA
            </a>
            <div class="nav__menu">
               <ul class="nav__list">
         
                  <li class="nav__item"> 
                     <a href="#home" class="nav__link">
                        <i class="ri-home-line"></i>
                        <span>Home</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="#featured" class="nav__link">
                        <i class="ri-book-3-line"></i>
                        <span>Featured</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="#discount" class="nav__link">
                        <i class="ri-price-tag-3-line"></i>
                        <span>Discount</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="#new" class="nav__link">
                        <i class="ri-bookmark-line"></i>
                        <span>New Books</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="#testimonial" class="nav__link">
                        <i class="ri-message-3-line"></i>
                        <span>Testimonial</span>
                     </a>
                  </li>

               </ul>
            </div>
            <div class="nav__actions">
               <!-- Serch button -->
               <i class="ri-search-line search-button" id="search-button"></i>

               <!-- shopping button -->

 
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
              <a href="index1.html"><i class="ri-moon-line change-theme" id="theme-button"></i></a>


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
          $('#search-results').html('');
        },
        success: function(response) {
          $('#search-results').html(response);
        }
      });
    });
  });
</script>
                      <!-- ///////////////////////////////////////// -->
                      
            
      <!--                  MAIN                       -->
      <main class="main">
         <!--                 HOME                  -->
         <section class="home section" id="home">
            <div class="home__container container grid">
               <div class="home__data">
                  <h1 class="home__title">
                     Browse & <br>
                     Select E-Books
                  </h1>

                  <p class="home__discription">
                     Find the best e-books from your favorite 
                     writers, explore hundreds of books with all 
                     possible categories, take advantage of the 
                     50% discount and much more.
                  </p>

                  <a href="#" class="button">Explore Now</a>
               </div>
               <div class="home__images">
                  <div class="home__swiper swiper">
                     <div class="swiper-wrapper" >

                        <article class="home__article swiper-slide">
                           <img src="home-book-1.png" alt="image" class="home__img">
                        </article>

                        <article class="home__article swiper-slide">
                           <img src="book-10.png" alt="image" class="home__img">
                        </article>

                        <article class="home__article swiper-slide">
                           <img src="home-book-3.png" alt="image" class="home__img">
                        </article>

                        <article class="home__article swiper-slide">
                           <img src="home-book-4.png" alt="image" class="home__img">
                        </article>

                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!--                 SERVICES                  -->
         <section class="services section">
            <div class="services__container container grid">

               <article class="services__card">
                  <i class="ri-truck-line"></i>
                  <h3 class="services__title">Free Shipping</h3>
                  <p class="services__discription">Order More Than $100</p>
               </article>

               <article class="services__card">
                  <i class="ri-lock-2-line"></i>
                  <h3 class="services__title">Secure Payment</h3>
                  <p class="services__discription">100% Secure Payment</p>      
               </article>

               <article class="services__card">
                  <i class="ri-customer-service-2-line"></i>
                  <h3 class="services__title">24/7 Support</h3>
                  <p class="services__discription">Call us anytime</p>
               </article>
            </div>
         </section>

         <!--                 FEATURED                 -->
         <section class="featured section" id="featured">
            <h2 class="section__title">
               Featured Books
            </h2>

            <div class="featured__container container">
               <div class="featured__swiper swiper">
                  <div class="swiper-wrapper">
                     <!-- 1 -->
                     <article class="featured__card  swiper-slide">
                        <img src="book-1.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Java Programming</h2>
                        <div class="featured__prices">
                        <span class="featured__discount">$14.99</span>
                        <span class="featured__price">$19.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>
                      <!-- 2 -->
                     <article class="featured__card swiper-slide">
                        <img src="book-2.png" alt="image" class="featured__img">

                        <h2 class="featured__title">A Tour of C++</h2>
                        <div class="featured__prices">
                        <span class="featured__discount">$15.99</span>
                        <span class="featured__price">$19.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>
                      <!-- 3 -->
                     <article class="featured__card swiper-slide">
                        <img src="book-3.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Muted Poster</h2>
                        <div class="featured__prices">
                        <span class="featured__discount">$10.99</span>
                        <span class="featured__price">$19.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>
                      <!-- 4 -->
                     <article class="featured__card swiper-slide">
                        <img src="book-4.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Poring Dreams</h2>
                        <div class="featured__prices">
                        <span class="featured__discount">$17.99</span>
                        <span class="featured__price">$24.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>
                      <!-- 5 -->
                     <article class="featured__card swiper-slide">
                        <img src="book-5.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Customize Your Autumn Clothes</h2>
                        <div class="featured__prices">
                        <span class="featured__discount">$18.99</span>
                        <span class="featured__price">$29.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>
                      <!-- 6 -->
                     <article class="featured__card swiper-slide">
                        <img src="book-6.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Designed For Work</h2>
                        <div class="featured__prices">
                        <span class="featured__discount">$9.99</span>
                        <span class="featured__price">$19.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>
                      <!-- 7 -->
                     <article class="featured__card swiper-slide">
                        <img src="book-7.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Plant Tree For The Future</h2>
                        <div class="featured__prices">
                        <span class="featured__discount">$17.99</span>
                        <span class="featured__price">$26.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>
                      <!-- 8 -->
                     <article class="featured__card swiper-slide">
                        <img src="book-8.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Modern Abstract Poster</h2>
                        <div class="featured__prices">
                        <span class="featured__discount">$11.99</span>
                        <span class="featured__price">$20.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>
                      <!-- 9 -->
                     <article class="featured__card swiper-slide">
                        <img src="book-9.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Bird Park</h2>
                        <div class="featured__prices">
                        <span class="featured__discount">$17.99</span>
                        <span class="featured__price">$28.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>
                      <!-- 10 -->
                     <article class="featured__card swiper-slide">
                        <img src="book-10.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Memories Of The Sword</h2>
                        <div class="featured__prices">
                        <span class="featured__discount">$16.99</span>
                        <span class="featured__price">$22.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>
                  </div>

                  <div class="swiper-button-prev">
                     <i class="ri-arrow-left-s-line"></i>
                  </div>
                  <div class="swiper-button-next">
                     <i class="ri-arrow-right-s-line"></i>
                  </div>
               </div>
            </div>
         </section>

         <!--                 DISCOUNT                 -->
         <section class="discount section" id="discount">
               <div class="discount__container container grid">
                  <div class="discount__data">
                     <h2 class="discount__title section__title">Up To 50% Discount</h2>
                     <p class="discount__description">
                        Take advantage of the discount days we 
                        have for you, buy books from your favorite 
                        writers, the more you buy, the more 
                        discounts we have for you.
                     </p>

                     <a href="#featured" class="button">Shop Now</a>
                  </div>
                  <div class="discount__images">
                     <img src="discount-book-1.png" alt="image" class="discount__img-1">
                     <img src="discount-book-2.png" alt="image" class="discount__img-2">
                  </div>

               </div>

            
         </section>

         <!--                  NEW BOOKS                  -->
         <section class="new section" id="new">
            <h2 class="section__title">New Books</h2>
            <div class="new__container container">
               <div class="new__swiper swiper">
                  <div class="swiper-wrapper">
                      <!-- 1 -->
                     <a href="#featured" class="new__card swiper-slide">
                        <img src="book-1.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">The Lord Of The Kings</h2>
                           <div class="new__prices">
                              <span class="new__discount">$14.99</span>
                              <span class="new__price">$19.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>
                      <!-- 2 -->
                     <a href="#featured" class="new__card swiper-slide">
                        <img src="book-2.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Simple & Minimalist</h2>
                           <div class="new__prices">
                              <span class="new__discount">$15.99</span>
                              <span class="new__price">$19.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>
                      <!-- 3 -->
                     <a href="#featured" class="new__card swiper-slide">
                        <img src="book-3.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Muted Poster</h2>
                           <div class="new__prices">
                              <span class="new__discount">$10.99</span>
                              <span class="new__price">$19.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>
                      <!-- 4 -->
                     <a href="#featured" class="new__card swiper-slide">
                        <img src="book-4.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Poring Dreams</h2>
                           <div class="new__prices">
                              <span class="new__discount">$17.99</span>
                              <span class="new__price">$24.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>
                      <!-- 5 -->
                     <a href="#featured" class="new__card swiper-slide">
                        <img src="book-5.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Customize Your Autumn Clothes</h2>
                           <div class="new__prices">
                              <span class="new__discount">$18.99</span>
                              <span class="new__price">$29.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>
                      <!-- 6 -->
                     <a href="#featured" class="new__card swiper-slide">
                        <img src="book-6.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Designed For Work</h2>
                           <div class="new__prices">
                              <span class="new__discount">$9.99</span>
                              <span class="new__price">$19.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>
                      <!-- 7 -->
                     <a href="#featured" class="new__card swiper-slide">
                        <img src="book-7.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Plant Tree For The Future</h2>
                           <div class="new__prices">
                              <span class="new__discount">$17.99</span>
                              <span class="new__price">$26.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>
                      <!-- 8 -->
                     <a href="#featured" class="new__card swiper-slide">
                        <img src="book-8.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Modern Abstract Poster</h2>
                           <div class="new__prices">
                              <span class="new__discount">$11.99</span>
                              <span class="new__price">$20.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>
                      <!-- 9 -->
                     <a href="#featured" class="new__card swiper-slide">
                        <img src="book-9.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Bird Park</h2>
                           <div class="new__prices">
                              <span class="new__discount">$17.99</span>
                              <span class="new__price">$28.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>
                      <!-- 10 -->
                     <a href="#featured" class="new__card swiper-slide">
                        <img src="book-10.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Memories Of The Sword</h2>
                           <div class="new__prices">
                              <span class="new__discount">$16.99</span>
                              <span class="new__price">$22.99</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            
         </section>

         <!--                 JOIN                  -->
         <section class="join section">
            <div class="join__container">
                  <img src="join-bg.jpg" alt="image" class="join__bg">

                  <div class="join__data container grid">
                     <h2 class="join__title section__title">
                        Subscribe To Receive <br>
                        The Latest Updates
                     </h2>

                     <form action="" class="join__form">
                        <input type="email" placeholder="Enter email" class="join__input">
                        <button type="submit" class="join__button button">Subscribe</button>

                     </form>
                  </div>
            </div>
         </section>

         <!--TESTIMONIAL-->
         <section class="testimonial section" id="testimonial">
            <h2 class="section__title">
               Customer Opinions
            </h2>

            <div class="testimonial__container container">
               <div class="testimonial__swiper swiper">
                  <div class="swiper-wrapper">
                     <article class="testimonial__card swiper-slide">
                        <img src="testimonial-perfil-1.png" alt="image" class="testimonial__img">
                        <h2 class="testimonial__title">Rial Loz</h2>
                        <p class="testimonial__description">
                        I love the vibrant community at Company E-book.
                         It's wonderful to engage in discussions, share book recommendations.
                        </p>
   
                        <div class="testimonial__stars">
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-line"></i>
                           <i class="ri-star-line"></i>
                        </div>
                     </article>
   
   
                     <article class="testimonial__card swiper-slide">
                        <img src="testimonial-perfil-2.png" alt="image" class="testimonial__img">
                        <h2 class="testimonial__title">John Wick</h2>
                        <p class="testimonial__description">
                           I have been using Company E-book for a few months now,
                           and I'm amazed by the vast collection of e-books they offer.
                           The platform is user-friendly.
                             
                        </p>
   
                        <div class="testimonial__stars">
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-half-fill"></i>
                           <i class="ri-star-line"></i>
   
                        </div>
                     </article>
   
   
                     <article class="testimonial__card swiper-slide">
                        <img src="testimonial-perfil-6.jpg" alt="image" class="testimonial__img">
                        <h2 class="testimonial__title">Shaizada Zine</h2>
                        <p class="testimonial__description">
                           Whenever I encounter any issues or have questions,
                           the support team at Company E-book is quick to respond and provide helpful solutions. 
                        </p>
   
                        <div class="testimonial__stars">
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-half-fill"></i>
                        </div>
                     </article>
   
   
                     <article class="testimonial__card swiper-slide">
                        <img src="testimonial-perfil-5.jpg" alt="image" class="testimonial__img">
                        <h2 class="testimonial__title">Mohamed Mamdouh</h2>
                        <p class="testimonial__description">
                           As an author, I'm thrilled to be a part of the Company E-book community.
                            They provide excellent support to authors and offer great visibility for our books.
                        </p>
   
                        <div class="testimonial__stars">
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-half-fill"></i>
                        </div>
                     </article>
   
   
                  </div>
               </div>
            </div>
            
         </section>
      </main>
      <!--FOOTER-->
      <footer class="footer">
         <div class="footer__container container grid">
            <div>
               <a href="#" class="footer__logo">
                  <i class="ri-book-3-line"></i> DOUHA
               </a>
               <p class="footer__description">
                  Find and explore the best <br>
                  eBooks from all your <br>
                  favorite writers.
               </p>
            </div>
            <div class="footer__data grid">
               <div>
                  <h3 class="footer__title">About</h3>
                  <ul class="footer__links">
                     <li>
                        <a href="About.html" class="footer__link">Awards</a>
                     </li>

                     <li>
                        <a href="About.html" class="footer__link">FAQs</a>
                     </li>

                     <li>
                        <a href="About.html" class="footer__link">Privacy policy</a>
                     </li>

                     <li>
                        <a href="About.html" class="footer__link">Terms of services</a>
                     </li>
                  </ul>
               </div>

               <div>
                  <h3 class="footer__title">Company</h3>
                  <ul class="footer__links">
                     <li>
                        <a href="Company.html" class="footer__link"> Blogs</a>
                     </li>
   
                     <li>
                        <a href="Company.html" class="footer__link">Community</a>
                     </li>
   
                     <li>
                        <a href="Company.html" class="footer__link">Our team</a>
                     </li>
   
                     <li>
                        <a href="Company.html" class="footer__link">Help center</a>
                     </li>
                  </ul>
               </div>

               <div>
                  <h3 class="footer__title">Contact</h3>
                  <ul class="footer__links">
                     <li>
                         <address class="footer__info">
                           Av. Hacienda <br>
                           Lima 4321, Perú 
                         </address>
                     </li>

                     <li>
                         <address class="footer__info">
                           e.book@email.com <br>
                           0987-654-321
                         </address>
                     </li>

                            
                  </ul>
               </div>

               <div>
                  <h3 class="footer__title">Social</h3>
                   <div class="footer__social">
                     <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-circle-line"></i>
                     </a>

                     <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-line"></i>
                     </a>

                     <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-x-line"></i>
                     </a>
                     
                   </div>
               </div>
            </div>
         </div>
         <span class="footer__copy">
            &#169; All Rights Reserved By Bedimcode 2023-2024
         </span>
      </footer>
      <script src="/bootstrap.min.js"></script>
      <script src="/bootstrap.js"></script>
      <script src="/bootstrap.bundle.js"></script>
      <!--                 SCROLL UP                 -->
      <a href="#" class="scrollup" id="scroll-up">
         <i class="ri-arrow-up-line"></i>
      </a>
 
      <script src="scrollreveal.min.js"></script>
       <script src="swiper-bundle.min.js"></script>
      <script src="main.js"></script>
   </body>
</html>