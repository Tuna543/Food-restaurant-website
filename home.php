<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- bootstrap4 -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      /* .inner{
         overflow: hidden;
      } */
      .inner img{
         transition: all .5s ease;
      }
      .inner:hover img{
         transform: scale(1.1);
      }
   </style>

</head>
<body>

<?php include 'components/user_header.php'; ?>


<!-- home section starts here  -->
<!-- home section starts  -->

<section class="home" id="home">
        <div class="content">
            <h3>prepared with care</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas accusamus tempore temporibus rem amet
                laudantium animi optio voluptatum. Natus obcaecati unde porro nostrum ipsam itaque impedit incidunt rem
                quisquam eos!</p>
            <a href="menu.php" class="btn">order now</a>
        </div>
</section>

    <!-- home section ends -->

<!-- home section ends here  -->

<!-- menu section starts -->
<?php include 'components/my_menu.php'; ?>

<!--gallery section starts-->

<section class="gallery" id="gallery">
    <h1 class="title"> our gallery </h1>
    <div class="box-container">
        <div class="slider"></div>
    </div>
</section>

<!--gallery section ends-->

<!-- event section starts here  -->
<div class="container" style="margin-bottom: 15rem;">
   <div class="col-lg-12 py-5">
   <h1 class="title"> organize events </h1>
    <div class="row my-5" style="gap:2rem;">
        <div class="card" style="height: 25rem;">
            <div class="inner">
               <img src="images/event-birthday1.jpg" class="card-img-top" alt="..." style="width: 35rem;">
            </div>
            <div class="card-body">
                <h1>birthday</h1>
                <p class="card-text" style="font-size:2rem;">$99</p>
                <a href="book2.php" class="btn">book now</a>
            </div>
        </div>
        <div class="card" style="height: 25rem;">
            <div class="inner">
               <img src="images/event-custom.jpg" class="card-img-top" alt="..." style="width: 35rem;">
            </div>
            <div class="card-body">
               <h1>private events</h1>
                <p class="card-text" style="font-size:2rem;">$199</p>
                <a href="book2.php" class="btn">book now</a>
            </div>
        </div>
        <div class="card" style="height: 25rem;">
            <div class="inner">
               <img src="images/event-private.jpg" class="card-img-top" alt="..." style="width: 35rem;">
            </div>
            <div class="card-body">
               <h1>custom events</h1>
                <p class="card-text" style="font-size:2rem;">$100</p>
                <a href="book2.php" class="btn">book now</a>
            </div>
        </div>
        <!-- <div class="card" style="height: 25rem;">
            <img src="images/events-bg.jpg" class="card-img-top" alt="..." style="width: 35rem;">
            <div class="card-body">
               <h1>garden party</h1>
                <p class="card-text" style="font-size:2rem;">$200</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div> -->
    </div>
   </div>
</div>
<!-- event section ends here  -->



<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->

<!-- steps section starts  -->
<div class="container" style="margin-bottom: 15rem;">
   <div class="col-lg-12 py-5" style="margin-left: 2rem;">
      <div class="row my-5" style="gap:2rem;">
         <div class="card">
            <img src="images/step-8.gif" class="card-img-top" alt="..." width="220px" height="220px">
            <div class="card-body">
                <h1>Choose</h1>
            </div>
         </div>
         <div class="card">
            <img src="images/step-6.gif" class="card-img-top" alt="..." width="220px" height="220px">
            <div class="card-body">
               <h1>Delivery</h1>
            </div>
         </div>
         <div class="card">
            <img src="images/step-9.gif" class="card-img-top" alt="..." width="220px" height="220px">
            <div class="card-body">
               <h1>Pay</h1>
            </div>
         </div>
         <div class="card">
            <img src="images/step-5.gif" class="card-img-top" alt="..." width="220px" height="220px">
            <div class="card-body">
               <h1>Enjoy</h1>
            </div>
         </div>
      </div> <!-- row my-5  -->
   </div> <!-- col-lg-12 py-5 -->
</div><!--  container  -->

<!-- steps section ends -->


<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends  -->

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>