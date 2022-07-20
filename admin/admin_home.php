<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_POST['update_payment'])){

    $order_id = $_POST['order_id'];
    $payment_status = $_POST['payment_status'];
    $update_status = $conn->prepare("UPDATE `orders` SET payment_status = ? WHERE id = ?");
    $update_status->execute([$payment_status, $order_id]);
    echo "
    <script>
        alert('Payment status Update');
    </script>
    ";
 
 }
 
 if(isset($_GET['order_delete'])){
    $delete_id = $_GET['order_delete'];
    $delete_order = $conn->prepare("DELETE FROM `orders` WHERE id = ?");
    $delete_order->execute([$delete_id]);
    header('location:admin_home.php');
 }

 if(isset($_POST['add_product'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $price = $_POST['price'];
    $price = filter_var($price, FILTER_SANITIZE_STRING);
    $category = $_POST['category'];
    $category = filter_var($category, FILTER_SANITIZE_STRING);
 
    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../uploaded_img/'.$image;
 
    $select_products = $conn->prepare("SELECT * FROM `products` WHERE name = ?");
    $select_products->execute([$name]);
 
    if($select_products->rowCount() > 0){
       $message[] = 'product name already exists!';
    }else{
       if($image_size > 2000000){
          $message[] = 'image size is too large';
       }else{
          move_uploaded_file($image_tmp_name, $image_folder);
 
          $insert_product = $conn->prepare("INSERT INTO `products`(name, category, price, image) VALUES(?,?,?,?)");
          $insert_product->execute([$name, $category, $price, $image]);
 
          $message[] = 'new product added!';
       }
 
    }
 
 }
 
 if(isset($_GET['pro_delete'])){
 
    $delete_id = $_GET['pro_delete'];
    $delete_product_image = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
    $delete_product_image->execute([$delete_id]);
    $fetch_delete_image = $delete_product_image->fetch(PDO::FETCH_ASSOC);
    unlink('../uploaded_img/'.$fetch_delete_image['image']);
    $delete_product = $conn->prepare("DELETE FROM `products` WHERE id = ?");
    $delete_product->execute([$delete_id]);
    $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE pid = ?");
    $delete_cart->execute([$delete_id]);
    header('location:admin_home.php');
 
 }
 


 
if(isset($_GET['user_delete'])){
    $delete_id = $_GET['user_delete'];
    $delete_users = $conn->prepare("DELETE FROM `users` WHERE id = ?");
    $delete_users->execute([$delete_id]);
    $delete_order = $conn->prepare("DELETE FROM `orders` WHERE user_id = ?");
    $delete_order->execute([$delete_id]);
    $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
    $delete_cart->execute([$delete_id]);
    header('location:admin_home.php');
 }


 if(isset($_GET['booking_delete'])){
    $delete_id = $_GET['booking_delete'];
    $delete_bookings = $conn->prepare("DELETE FROM `book_form` WHERE id = ?");
    $delete_bookings->execute([$delete_id]);
 }
//  msg deleting 
 if(isset($_GET['message_delete'])){
   $delete_id = $_GET['message_delete'];
   $delete_message = $conn->prepare("DELETE FROM `messages` WHERE id = ?");
   $delete_message->execute([$delete_id]);
   header('location:admin_home.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Admin Home Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">



    <style>
    *{
        font-size: 2rem;
    }
      .bd-placeholder-img {
        font-size: 2.125rem;
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

    
    
   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">
   
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
    
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#" style="font-size:5rem;">Asti Olives</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>
<!-- side dashboard  -->
<div class="container-fluid"  style="background-color: #E7E0D3;">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#dashboard">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#placed_orders">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#products">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#users">
              <span data-feather="users"></span>
              Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#bookings">
              <span data-feather="bar-chart-2"></span>
              Bookings
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#messages">
              <span data-feather="layers"></span>
              Messages
            </a>
          </li>
        </ul>

        
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="heading">Dashboard</h1>
        
      </div>




      
<!-- admin dashboard section starts  -->

<section class="dashboard" id="dashboard">


<div class="box-container">


<div class="box">
   <?php
      $total_pendings = 0;
      $select_pendings = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
      $select_pendings->execute(['pending']);
      while($fetch_pendings = $select_pendings->fetch(PDO::FETCH_ASSOC)){
         $total_pendings += $fetch_pendings['total_price'];
      }
   ?>
   <h3><span>$</span><?= $total_pendings; ?><span>/-</span></h3>
   <p>total pendings</p>
</div>

<div class="box">
   <?php
      $total_completes = 0;
      $select_completes = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
      $select_completes->execute(['completed']);
      while($fetch_completes = $select_completes->fetch(PDO::FETCH_ASSOC)){
         $total_completes += $fetch_completes['total_price'];
      }
   ?>
   <h3><span>$</span><?= $total_completes; ?><span>/-</span></h3>
   <p>total completes</p>
</div>

<div class="box">
   <?php
      $select_orders = $conn->prepare("SELECT * FROM `orders`");
      $select_orders->execute();
      $numbers_of_orders = $select_orders->rowCount();
   ?>
   <h3><?= $numbers_of_orders; ?></h3>
   <p>total orders</p>
</div>

<div class="box">
   <?php
      $select_products = $conn->prepare("SELECT * FROM `products`");
      $select_products->execute();
      $numbers_of_products = $select_products->rowCount();
   ?>
   <h3><?= $numbers_of_products; ?></h3>
   <p>products added</p>
</div>

<div class="box">
   <?php
      $select_users = $conn->prepare("SELECT * FROM `users`");
      $select_users->execute();
      $numbers_of_users = $select_users->rowCount();
   ?>
   <h3><?= $numbers_of_users; ?></h3>
   <p>users accounts</p>
</div>

<div class="box">
   <?php
      $select_bookings = $conn->prepare("SELECT * FROM `book_form`");
      $select_bookings->execute();
      $numbers_of_bookings = $select_bookings->rowCount();
   ?>
   <h3><?= $numbers_of_bookings; ?></h3>
   <p>bookings</p>
</div>

<div class="box">
   <?php
      $select_messages = $conn->prepare("SELECT * FROM `messages`");
      $select_messages->execute();
      $numbers_of_messages = $select_messages->rowCount();
   ?>
   <h3><?= $numbers_of_messages; ?></h3>
   <p>Messages</p>
</div>



</div>

</section> <!-- dashboard section ends here  -->

<!-- placed orders section starts  -->

<section class="placed-orders" id="placed_orders">

   <h1 class="heading">placed orders</h1>

   <div class="box-container">

   <?php
      $select_orders = $conn->prepare("SELECT * FROM `orders`");
      $select_orders->execute();
      if($select_orders->rowCount() > 0){
         while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
      <p> user id : <span><?= $fetch_orders['user_id']; ?></span> </p>
      <p> placed on : <span><?= $fetch_orders['placed_on']; ?></span> </p>
      <p> name : <span><?= $fetch_orders['name']; ?></span> </p>
      <p> email : <span><?= $fetch_orders['email']; ?></span> </p>
      <p> number : <span><?= $fetch_orders['number']; ?></span> </p>
      <p> address : <span><?= $fetch_orders['address']; ?></span> </p>
      <p> total products : <span><?= $fetch_orders['total_products']; ?></span> </p>
      <p> total price : <span>$<?= $fetch_orders['total_price']; ?>/-</span> </p>
      <p> payment method : <span><?= $fetch_orders['method']; ?></span> </p>
      <form action="" method="POST">
         <input type="hidden" name="order_id" value="<?= $fetch_orders['id']; ?>">
         <select name="payment_status" class="drop-down">
            <option value="" selected disabled><?= $fetch_orders['payment_status']; ?></option>
            <option value="pending">pending</option>
            <option value="completed">completed</option>
         </select>
         <div class="flex-btn">
            <input type="submit" value="update" class="btn" name="update_payment">
            <a href="admin_home.php?order_delete=<?= $fetch_orders['id']; ?>" class="delete-btn" onclick="return confirm('delete this order?');">delete</a>
         </div>
      </form>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no orders placed yet!</p>';
   }
   ?>

   </div>

</section>

<!-- placed orders section ends -->




<!-- add products section starts  -->

<section class="add-products" id="products">
<h1 class="heading">Product Section</h1>
   <form action="" method="POST" enctype="multipart/form-data">
      <h3>add product</h3>
      <input type="text" required placeholder="enter product name" name="name" maxlength="100" class="box">
      <input type="number" min="0" max="9999999999" required placeholder="enter product price" name="price" onkeypress="if(this.value.length == 10) return false;" class="box">
      <select name="category" class="box" required>
         <option value="" disabled selected>select category --</option>
         <option value="main dish">main dish</option>
         <option value="fast food">fast food</option>
         <option value="drinks">drinks</option>
         <option value="desserts">desserts</option>
         <option value="platter">platter</option>
      </select>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png, image/webp" required>
      <input type="submit" value="add product" name="add_product" class="btn">
   </form>

</section>

<!-- add products section ends -->

<!-- show products section starts  -->

<section class="show-products" style="padding-top: 0;">

   <div class="box-container">

   <?php
      $show_products = $conn->prepare("SELECT * FROM `products`");
      $show_products->execute();
      if($show_products->rowCount() > 0){
         while($fetch_products = $show_products->fetch(PDO::FETCH_ASSOC)){  
   ?>
   <div class="box">
      <img src="../uploaded_img/<?= $fetch_products['image']; ?>" alt="">
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_products['price']; ?><span>/-</span></div>
         <div class="category"><?= $fetch_products['category']; ?></div>
      </div>
      <div class="name"><?= $fetch_products['name']; ?></div>
      <div class="flex-btn">
         <a href="update_product.php?product_update=<?= $fetch_products['id']; ?>" class="option-btn">update</a>
         <a href="admin_home.php?pro_delete=<?= $fetch_products['id']; ?>" class="delete-btn" onclick="return confirm('delete this product?');">delete</a>
      </div>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
   ?>

   </div>

</section>

<!-- show products section ends -->





<!-- user accounts section starts  -->

<section class="accounts" id="users">

   <h1 class="heading">users account</h1>

   <div class="box-container">

   <?php
      $select_account = $conn->prepare("SELECT * FROM `users`");
      $select_account->execute();
      if($select_account->rowCount() > 0){
         while($fetch_accounts = $select_account->fetch(PDO::FETCH_ASSOC)){  
   ?>
   <div class="box">
      <p> user id : <span><?= $fetch_accounts['id']; ?></span> </p>
      <p> username : <span><?= $fetch_accounts['name']; ?></span> </p>
      <a href="admin_home.php?user_delete=<?= $fetch_accounts['id']; ?>" class="delete-btn" onclick="return confirm('delete this account?');">delete</a>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no accounts available</p>';
   }
   ?>

   </div>

</section>

<!-- user accounts section ends -->






<!-- booking section starts  -->

<section class="accounts" id="bookings">

   <h1 class="heading">See Booking Details</h1>

   <div class="box-container">

    <?php
      $select_bookings = $conn->prepare("SELECT * FROM `book_form`");
      $select_bookings->execute();
      if($select_bookings->rowCount() > 0){
         while($fetch_bookings = $select_bookings->fetch(PDO::FETCH_ASSOC)){  
    ?>

   <div class="box">
      <p> user id : <span><?= $fetch_bookings['user_id']; ?></span> </p>
      <p> username : <span><?= $fetch_bookings['user_name']; ?></span> </p>
      <p> function type : <span><?= $fetch_bookings['function']; ?></span> </p>
      <p> funcion name : <span><?= $fetch_bookings['name']; ?></span> </p>
      <p> date : <span><?= $fetch_bookings['date']; ?></span> </p>
      <p> time : <span><?= $fetch_bookings['time']; ?></span> </p>
      <p> estimated guests : <span><?= $fetch_bookings['guests']; ?></span> </p>
      <p> contact info of user : <span><?= $fetch_bookings['number']; ?></span> </p>
      <a href="admin_home.php?booking_delete=<?= $fetch_bookings['id']; ?>" class="delete-btn" onclick="return confirm('delete this booking?');">delete</a>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no bookings available</p>';
   }
   ?>

   </div>

</section>

<!-- booking section ends -->



<!-- messages section starts  -->

<section class="messages" id="messages">

   <h1 class="heading">messages</h1>

   <div class="box-container">

   <?php
      $select_messages = $conn->prepare("SELECT * FROM `messages`");
      $select_messages->execute();
      if($select_messages->rowCount() > 0){
         while($fetch_messages = $select_messages->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
      <p> name : <span><?= $fetch_messages['name']; ?></span> </p>
      <p> number : <span><?= $fetch_messages['number']; ?></span> </p>
      <p> email : <span><?= $fetch_messages['email']; ?></span> </p>
      <p> message : <span><?= $fetch_messages['message']; ?></span> </p>
      <a href="admin_home.php?message_delete=<?= $fetch_messages['id']; ?>" class="delete-btn" onclick="return confirm('delete this message?');">delete</a>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">you have no messages</p>';
      }
   ?>

   </div>

</section>

<!-- messages section ends -->







    </main>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="dashboard.js"></script>
        <!-- custom js file link  -->
        <script src="../js/admin_script.js"></script>

  </body>
</html>
