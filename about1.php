<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
   // if((time()-$_SESSION['last_login_time'])>5){
   //    header('location:components/user_logout.php');
   // }
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Blog Template · Bootstrap v4.6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/blog/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">



    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">
    
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
  <?php include 'components/user_header.php'; ?>



  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h3 style="font-size:5rem;">why you should choose us</h3>
      <p style="font-size:1.8em;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit accusamus sed qui ipsam officiis ducimus facilis suscipit dolore, non sint. Magni dolores totam incidunt quam consectetur dolorem expedita, illo laudantium!</p>
      </div>
  </div>
      
<!-- about section starts  -->

<section class="about" style="margin-bottom: 7rem;">

<div class="row">

<div class="swiper reviews-slider">

  <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/chefimage1.jpg" alt="">
         </div>
      </div>
      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/restaurent_table1.jpg" alt="">
         </div>
      </div>
      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/service.jpg" alt="">
         </div>
      </div>
      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home2.jpg" alt="">
         </div>
      </div>
      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/chefimage2.jpg" alt="">
         </div>
      </div>
  </div>

   <div class="swiper-pagination"></div>

</div>

   <div class="content">
      <h3>We are committed to providing our customers with best experience </h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, neque debitis incidunt qui ipsum sed doloremque a molestiae in veritatis ullam similique sunt aliquam dolores dolore? Quasi atque debitis nobis!</p>
      <a href="menu.php" class="btn">our menu</a>
   </div>

</div>

</section>

<!-- about section ends -->

<div class="container">
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 style="font-size:3rem;">Manager</h3>
          <p style="font-size:1.8rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, earum. Illum assumenda fuga sunt nisi magnam optio sed in. Fugiat error dolore cupiditate ipsam recusandae corporis culpa dolor excepturi distinctio?</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <img class="bd-placeholder-img" width="200" height="250" src="images/restaurant-manager1.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 style="font-size:3rem;">our chefs</h3>
          <p style="font-size:1.8rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, earum. Illum assumenda fuga sunt nisi magnam optio sed in. Fugiat error dolore cupiditate ipsam recusandae corporis culpa dolor excepturi distinctio?</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <img class="bd-placeholder-img" width="200" height="250" src="images/chefimage.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 style="font-size:3rem;">organizer committee</h3>
          <p style="font-size:1.8rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, earum. Illum assumenda fuga sunt nisi magnam optio sed in. Fugiat error dolore cupiditate ipsam recusandae corporis culpa dolor excepturi distinctio?</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <img class="bd-placeholder-img" width="200" height="250" src="images/eventorganizer.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 style="font-size:3rem;">waiter</h3>
          <p style="font-size:1.8rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, earum. Illum assumenda fuga sunt nisi magnam optio sed in. Fugiat error dolore cupiditate ipsam recusandae corporis culpa dolor excepturi distinctio?</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <img class="bd-placeholder-img" width="200" height="250" src="images/serviceboy.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      

      <div class="blog-post">
        <h2 class="blog-post-title" style="font-size:3rem;">Know More About Us</h2>

        <p style="font-size:2rem;">A dedicate team to provide you with the best service</p>
        <hr>
        <p style="font-size:1.5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima deleniti ab ullam veniam, natus rem dolorem? Repellat sapiente, optio, quae provident fuga impedit placeat perferendis doloribus, sequi maxime mollitia ipsam!</p>
        <blockquote>
          <p style="font-size:1.5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima deleniti ab ullam veniam, natus rem dolorem?<strong>This is how we do it</strong>. I'm not sticking around to watch you go down. You think you're so rock and Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima deleniti ab ullam veniam, natus rem dolorem?</p>
        </blockquote>
        <p style="font-size:1.5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quia. Cupiditate doloremque blanditiis aperiam dolorem at? Minima nesciunt sequi praesentium, quo alias dolore aliquam, quia omnis laudantium dolores voluptate nulla!<em>tasty foods</em> in the pool. </p>
        
      </div><!-- /.blog-post -->

    

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic" style="font-size:2rem;">About</h4>
        <p class="mb-0" style="font-size:1.5rem;">Saw you downtown singing the Blues. Watch you circle the drain. Why don't you let me stop by? Heavy is the head that <em>wears the crown</em>. Yes, we make angels cry, raining down on earth from up above.</p>
      </div>


      <div class="p-4">
        <h4 class="font-italic" style="font-size:2rem;">Follow Us</h4>
        <ol class="list-unstyled">
          <li><a href="#"  style="font-size:1.5rem;">GitHub</a></li>
          <li><a href="#"  style="font-size:1.5rem;">Twitter</a></li>
          <li><a href="#"  style="font-size:1.5rem;">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->


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