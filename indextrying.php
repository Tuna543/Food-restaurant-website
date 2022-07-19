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

</head>

<body>

    <?php include 'components/user_header.php'; ?>



    <section class="hero">

        <div class="swiper hero-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <!-- <div class="content">
               <span>order online</span>
               <h3>delicious pizza</h3>
               <a href="menu.php" class="btn">see menus</a>
            </div> -->
                    <div class="image">
                        <img src="images/home.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <!-- <div class="content">
               <span>order online</span>
               <h3>chezzy hamburger</h3>
               <a href="menu.php" class="btn">see menus</a>
            </div> -->
                    <div class="image">
                        <img src="images/home-img-2.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <!-- <div class="content">
               <span>order online</span>
               <h3>rosted chicken</h3>
               <a href="menu.php" class="btn">see menus</a>
            </div> -->
                    <div class="image">
                        <img src="images/home-img-3.png" alt="">
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section class="category">

        <h1 class="title">food category</h1>

        <div class="box-container">

            <a href="category.php?category=fast food" class="box">
                <img src="images/cat-1.png" alt="">
                <h3>fast food</h3>
            </a>

            <a href="category.php?category=main dish" class="box">
                <img src="images/cat-2.png" alt="">
                <h3>main dishes</h3>
            </a>

            <a href="category.php?category=drinks" class="box">
                <img src="images/cat-3.png" alt="">
                <h3>drinks</h3>
            </a>

            <a href="category.php?category=desserts" class="box">
                <img src="images/cat-4.png" alt="">
                <h3>desserts</h3>
            </a>

        </div>

    </section>
    <!-- menu section starts -->

    <section class="my_menu" id="my_menu">
        <h1 class="title"> our special items </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/g-1.jpg" alt="">
                <div class="content">
                    <h3>burger</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ab quia voluptates perferendis
                        quo molestias. Repellendus nisi vel eveniet iste distinctio facilis dolorum porro, nostrum velit
                        eius veniam repellat at.</p>
                    <!--<a href="#" class="btn">order now</a>-->
                </div>
            </div>
            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <div class="content">
                    <h3>sandwich</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ab quia voluptates perferendis
                        quo molestias. Repellendus nisi vel eveniet iste distinctio facilis dolorum porro, nostrum velit
                        eius veniam repellat at.</p>
                    <!--<a href="#" class="btn">order now</a>-->
                </div>
            </div>
            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <div class="content">
                    <h3>tacos</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ab quia voluptates perferendis
                        quo molestias. Repellendus nisi vel eveniet iste distinctio facilis dolorum porro, nostrum velit
                        eius veniam repellat at.</p>
                    <!--<a href="#" class="btn">order now</a>-->
                </div>
            </div>
            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <div class="content">
                    <h3>cake</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ab quia voluptates perferendis
                        quo molestias. Repellendus nisi vel eveniet iste distinctio facilis dolorum porro, nostrum velit
                        eius veniam repellat at.</p>
                    <!--<a href="#" class="btn">order now</a>-->
                </div>
            </div>
            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <div class="content">
                    <h3>chicken fry</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ab quia voluptates perferendis
                        quo molestias. Repellendus nisi vel eveniet iste distinctio facilis dolorum porro, nostrum velit
                        eius veniam repellat at.</p>
                    <!--<a href="#" class="btn">order now</a>-->
                </div>
            </div>
            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <div class="content">
                    <h3>icecream</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ab quia voluptates perferendis
                        quo molestias. Repellendus nisi vel eveniet iste distinctio facilis dolorum porro, nostrum velit
                        eius veniam repellat at.</p>
                    <!--<a href="#" class="btn">order now</a>-->
                </div>
            </div>
            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <div class="content">
                    <h3>breakfast</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ab quia voluptates perferendis
                        quo molestias. Repellendus nisi vel eveniet iste distinctio facilis dolorum porro, nostrum velit
                        eius veniam repellat at.</p>
                    <!--<a href="#" class="btn">order now</a>-->
                </div>
            </div>
            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <div class="content">
                    <h3>chocolate</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ab quia voluptates perferendis
                        quo molestias. Repellendus nisi vel eveniet iste distinctio facilis dolorum porro, nostrum velit
                        eius veniam repellat at.</p>
                    <!--<a href="#" class="btn">order now</a>-->
                </div>
            </div>
            <div class="box">
                <img src="images/g-9.jpg" alt="">
                <div class="content">
                    <h3>pizza</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ab quia voluptates perferendis
                        quo molestias. Repellendus nisi vel eveniet iste distinctio facilis dolorum porro, nostrum velit
                        eius veniam repellat at.</p>
                    <!--<a href="#" class="btn">order now</a>-->
                </div>
            </div>
        </div>

    </section>

    <!-- menu section ends -->

    <!--gallery section starts-->

    <section class="gallery" id="gallery">
        <h1 class="title"> our gallery </h1>
        <div class="box-container">
            <div class="slider"></div>
        </div>
    </section>

    <!--gallery section ends-->

    <!-- event section starts -->
    <section class="events" id="events">
        <h1 class="title">events</h1>
        <!-- contains image+paragraph -->
        <div class="row">
            <!-- sliding image -->
            <div class="image">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h2>event birthday</h2>
                            <h4>only at $99</h4>
                            <img src="images/event-birthday.jpg" class="d-block w-100" alt="event-birthday">
                        </div>
                        <div class="carousel-item">
                            <h2>event custom</h2>
                            <h4>only at $105</h4>
                            <img src="images/event-custom.jpg" class="d-block w-100" alt="event-custom">
                        </div>
                        <div class="carousel-item">
                            <h2>event private</h2>
                            <h4>only at $299</h4>
                            <img src="images/event-private.jpg" class="d-block w-100" alt="event-private">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>

            <div class="des">

                <div class="inputBox">
                    <h1>we organize events</h1><br><br><br>
                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus reiciendis autem quos,
                        corrupti ad ipsam totam sint. Assumenda nihil quae aperiam voluptatem repudiandae tenetur illum
                        similique velit. Obcaecati, perspiciatis quas! Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Sint ipsa dicta neque distinctio ex architecto molestias? Voluptates
                        consequuntur assumenda illum fugit minima expedita quisquam! Quam totam et laudantium eos ad!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi obcaecati voluptate architecto ab
                        accusantium dolor numquam reiciendis soluta laboriosam sunt corrupti nobis officia ipsum eum
                        explicabo laborum, iusto accusamus qui.
                    </h3>
                </div>

                <a href="#" class="btn">book now</a>
            </div>
            <!-- end of image+paragraph -->
    </section>
    <!-- event section ends -->



    <?php include 'components/footer.php'; ?>


    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <script>

        var swiper = new Swiper(".hero-slider", {
            loop: true,
            grabCursor: true,
            effect: "flip",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

    </script>

</body>

</html>