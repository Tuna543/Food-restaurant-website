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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Book</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/carousel/">

    

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


<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

 <!-- bootstrap4 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
     integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
 
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

      .col-md-5{
         overflow: hidden;
      }
      .col-md-5 img{
         transition: all .5s ease;
      }
      .col-md-5:hover img{
         transform: scale(1.1);
      }
      
   </style>

    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    

  <?php include 'components/user_header.php'; ?>

  <main role="main">
<!-- sliding part start here  -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="bd-placeholder-img" width="100%" height="100%" src="images/booking1.jpg" role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice" focusable="false"><title> </title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"> </text></svg>

      <div class="container">
        <div class="carousel-caption text-left">
          <h1>Best Place to Organize </h1>
          <p style="font-size:1.5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam corrupti magnam eos veritatis non beatae.</p>
          <p><a class="btn btn-lg btn-primary" href="book2.php">Book Now</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="bd-placeholder-img" width="100%" height="100%" src="images/booking17.jpg" role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice" focusable="false"><title> </title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"> </text></svg>

      <div class="container">
        <div class="carousel-caption">
          <h1>Ready For Dinner With Someone Special</h1>
          <p style="font-size:1.5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam corrupti magnam eos veritatis non beatae.</p>
          <p><a class="btn btn-lg btn-primary" href="book2.php">Book Now</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="bd-placeholder-img" width="100%" height="100%" src="images/booking11.jpg" role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice" focusable="false"><title> </title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"> </text></svg>

      <div class="container">
        <div class="carousel-caption text-right">
          <h1>Get Lost in Nature</h1>
          <p style="font-size:1.5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam corrupti magnam eos veritatis non beatae.</p>
          <p><a class="btn btn-lg btn-primary" href="book2.php">Book Now</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<!-- sliding part ends here  -->

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7" style="margin-top:8rem;">
      <h2 class="featurette-heading" >Best environment </h2>
      <p class="lead" style="font-size:1.5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, exercitationem, ex modi sunt ea ab incidunt dicta et ratione pariatur esse minus eligendi ullam dolor placeat unde explicabo? Repudiandae, saepe. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque similique asperiores culpa, maiores tenetur, illum minima quia neque suscipit quisquam iste facere veniam molestiae, unde laboriosam deleniti. Ut, accusantium maxime.</p>
    </div>
    <div class="col-md-5">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="images/booking12.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/>

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2"style="margin-top:18rem;">
      <h2 class="featurette-heading">Healthy Foods</h2>
      <p class="lead" style="font-size:1.5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis culpa at quod illum, quibusdam soluta, et, porro animi facilis temporibus molestias? Enim repellat tempore perspiciatis quisquam labore quidem deserunt architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque similique asperiores culpa, maiores tenetur, illum minima quia neque suscipit quisquam iste facere veniam molestiae, unde laboriosam deleniti. Ut, accusantium maxime.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="images/booking18.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/>

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7"style="margin-top:6rem;">
      <h2 class="featurette-heading">Best Orgnizers</h2>
      <p class="lead" style="font-size:1.5rem;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae doloremque at id, consequatur obcaecati sed doloribus maiores consequuntur assumenda quasi quo, saepe ea maxime inventore a corrupti aliquid ducimus cumque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque similique asperiores culpa, maiores tenetur, illum minima quia neque suscipit quisquam iste facere veniam molestiae, unde laboriosam deleniti. Ut, accusantium maxime.</p>
    </div>
    <div class="col-md-5">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="images/booking6.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/>

    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

</div><!-- /.container -->

</main>


<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends  -->



  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    
<!-- custom js file link  -->
<script src="js/script.js"></script>
    
</body>
</html>