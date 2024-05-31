 /*                 SEARCH                  */
const searchButton=document.getElementById('search-button'),
searchClose=document.getElementById('search-close'),
searchContent=document.getElementById('search-content')
 
/*                  Menu show                  */
if (searchButton) {
searchButton.addEventListener('click', () =>{
searchContent.classList.add('show-search') 
})
}
/*                  Menu hidden                  */
if (searchClose) {
searchClose.addEventListener('click', () =>{
searchContent.classList.remove('show-search') 
})
}

/*              ADD SHADOW HEADER           */
const shadowHeader=() =>{
const header=document.getElementById('header')
this.scrollY >=50 ? header.classList.add('shadow-header')
:header.classList.remove('shadow-header')
}
window.addEventListener('scroll',shadowHeader)


/*                 HOME SWIPER                 */
let swiperHome = new Swiper('.home__swiper', {
loop: true,
spaceBetween: -24,
grabCursor:true,
slidesPerView:'auto',
centeredSlides:'auto',
autoplay:{
  delay:3000,
  disableOnInteraction:false,
},

breakpoints:{
  1220:{
      spaceBetween: -32,
  }

}

});


/*                 FEATURED SWIPER                 */
let swiperFeatured = new Swiper('.featured__swiper', {
loop: true,
spaceBetween: 16,
grabCursor:true,
slidesPerView:'auto',
centeredSlides:'auto',

navigation: {
  nextEl: '.swiper-button-next',
  prevEl: '.swiper-button-prev',
},
breakpoints:{
  1150:{
     slidesPerView: 3,
     centeredSlides: false,
  }
}
});


/*                 NEW SWIPER                 */
let swiperNew = new Swiper('.new__swiper', {
loop: true,
spaceBetween: 16,
slidesPerView:'auto',

breakpoints:{
1150:{
   slidesPerView: 3,

}
}
});
/*                TESTIMONIAL SWIPER                 */
let swiperTestimonial = new Swiper('.testimonial__swiper', {
loop: true,
spaceBetween: 16,
grabCursor:true,
slidesPerView:'auto',
centeredSlides:'auto',


breakpoints:{
1150:{
   slidesPerView: 3,
   centeredSlides: false,
}
}
});


/*                 SHOW SCROLL UP                  */ 
const scrollUp = () =>{
const scrollUp = document.getElementById('scroll-up')

this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
:scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll',scrollUp)

/*                 SCROLL REVEAL ANIMATION                 */
const sr = ScrollReveal({
origin: 'top',
distance:'60px',
duration:2500,
delay:400,
})

sr.reveal(`.home__data, .featured__container, .new__container,
     .join__data`)
sr.reveal(`.home__images`,{delay:600})
sr.reveal(`.services__card`,{interval:100})
sr.reveal(`.discount__data`,{origin:'left'})
sr.reveal(`.discount__images`,{origin:'right'})

/////////////////////////////////////////////////
//=======OPEN & CLOSE CART======

const cartIcon=document.querySelector("#cart-Icon")
const cart=document.querySelector(".Cart")
const closeCart=document.querySelector("#cart-close")

//OPEN
cartIcon.addEventListener('click', () => {
    cart.classList.add('active');
});

// CLOSE
closeCart.addEventListener('click', () => {
    cart.classList.remove('active');
});
// Start when the docoment is ready
if(document.readyState == "loading"){
    document.addEventListener('DOMContentLoaded', start);
}else{
    start();
}

//..............START............
function start(){
addEvents();
}

//=================== UPDATE & RERENDER ===============
function update(){
    addEvents();
    updateTotal();
}

// ============= ADD EVENTS ==============
function addEvents(){
// Remove items from cart
let cartRemove_btns = document.querySelectorAll('#cart-remove');
console.log(cartRemove_btns);
cartRemove_btns.forEach(btn => {
    btn.addEventListener("click", handle_removeCartItem);
});
//Change item quantity
let cartQuantity_inputs = document.querySelectorAll('.cart-quantity');
cartQuantity_inputs.forEach(input => {
input.addEventListener("change", handle_changeItemQuantity);
});
    // Add item to cart
let addCart_btns = document.querySelectorAll(".button");
addCart_btns.forEach(btn => {
    btn.addEventListener("click", handle_addCartItem);
})
//Buy Order
const buy_btn =document.querySelector(".btn-buy");
buy_btn.addEventListener("click",handle_buyOrder);

}
//======= HANDIE EVENTS FUNCTION ======
let itemsAdded = []
function handle_addCartItem(){
    let product = this.parentElement;
let title = product.querySelector(".featured__title").innerHTML;  
let price = product.querySelector(".featured__discount").innerHTML;  
let imgSrc = product.querySelector(".featured__img").src;  
console.log(title, price, imgSrc);
let newToAdd  = {
    title,
    price,
    imgSrc,
};
  // handle item is already exist
if(itemsAdded.find(el => el.title == newToAdd.title)){
    alert("this item is Already Exist!");
    return;
}
else{
    itemsAdded.push(newToAdd);
}


   // Add product to cart
let cartBoxElement = CartBoxComponent(title, price, imgSrc);
let newNode = document.createElement("div");
newNode.innerHTML = cartBoxElement;
const cartContent = cart.querySelector(".cart-content");
 cartContent.appendChild(newNode);

   update();
};


function handle_removeCartItem() {
    this.parentElement.remove();
 itemsAdded = itemsAdded.filter(el=> el.title !=
    this.parentElement.querySelector('.cart-product-title').innerHTML
    );

    update();
}
function handle_changeItemQuantity(){
     if(isNaN(this.value) || this.value < 1) {
         this.value = 1;
     }
     this.value = Math.floor(this.value); // to keep it integer
    
     update();
     }
      function handle_buyOrder(){
    if(itemsAdded.length <= 0){
        alert("There is no Order to place yet! \n please Make an Order first.");
       return;
    }
         const cartContent = cart.querySelector(".cart-content");
    cartContent.innerHTML = '';
    window.location.replace("Checkout.php");
    alert("Your Order is Placed Successfully :)");
itemsAdded = [];

     update();
 }
//======= UPDATE & RERANDER FUNCTION =======
function updateTotal() {
    let cartBoxes =document.querySelectorAll('.cart-box');
    const totalElement =cart.querySelector('.total-price');
let total = 0;
cartBoxes.forEach((cartBox) => {
let priceElement=cartBox.querySelector(".cart-price");
let price = parseFloat(priceElement.innerHTML.replace("$" , ""));
let quantity = cartBox.querySelector(".cart-quantity").value;
total += price * quantity;
});

//  keep 2 digits after the decimal point
 total = total.toFixed(2);



totalElement.innerHTML = "$" + total;
}

 // ========== HTML COMPONANTS ============
function CartBoxComponent(title, price, imgSrc){
    return `
    <div class="cart-box">
    <img src=${imgSrc} alt="" class="cart-img" >  
    <div class="detail-box">
      <div class="cart-product-title">${title}</div>
      <div class="cart-price">${price}</div>
      <input type="number" value="1" class="cart-quantity">
    </div>
    <!-- REMOVE CART -->
    <i class='ri-delete-bin-line' id="cart-remove" title="Delete"></i> 
          </div>`;

}

 