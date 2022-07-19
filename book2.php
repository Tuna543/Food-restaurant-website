<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   
   header('location:login.php');

   // $message[] = 'sorry you do not have an account!';
};


if(isset($_POST['submit'])){
  $user_name = $_POST['user_name'];
  $user_name = filter_var($user_name, FILTER_SANITIZE_STRING);
  $number = $_POST['number'];
  $number = filter_var($number, FILTER_SANITIZE_STRING);
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $function = $_POST['function'];
   $function = filter_var($function, FILTER_SANITIZE_STRING);
   $guests = $_POST['guests'];
   $guests = filter_var($guests, FILTER_SANITIZE_STRING);
   $date = $_POST['date'];
   $time = $_POST['time'];


   $select_event = $conn->prepare("SELECT * FROM `book_form` WHERE date = ? AND time = ?");
   $select_event->execute([$date, $time]);
   $row = $select_event->fetch(PDO::FETCH_ASSOC);

    if($select_event->rowCount() > 0){
        $message[] = 'sorry we are already booked at the time you mentioned!';
    }else{
        $insert_user = $conn->prepare("INSERT INTO `book_form`(user_name, number, name, function, guests, date, time, user_id) VALUES(?,?,?,?,?,?,?,?)");
        $insert_user->execute([$user_name,$number,$name, $function, $guests, $date, $time, $user_id]);
        $message[] = 'booking successful!';
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>About Us</title>

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





    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Book</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body> 
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading" style="background:url(images/booking3.jpg) no-repeat">
   <h1 class="title" style="color: #f7f7f7">book now</h1>
</div>

<!-- booking section starts  -->

<!-- form starts here  -->
<div class="container" style="margin-top:10rem;margin-bottom:10rem;">
<h1 class="title">Book Your Events Here</h1>
<form action="" method="post" style="font-size: 5rem;">
  <div class="form-row" style="gap:2rem;">
    <div class="col">
      <span style="font-size: 1.6rem;">Your Name :</span>
      <input type="text" class="form-control" required placeholder="enter your name" name="user_name" style="font-size: 1.6rem;">
    </div>
    <div class="col">
      <span style="font-size: 1.6rem;">Your Contact Info :</span>
      <input type="text" class="form-control" required placeholder="enter your contact number" name="number" style="font-size: 1.6rem;">
    </div>
  </div>
  <div class="form-row" style="gap:2rem;">
    <div class="col">
      <span style="font-size: 1.6rem;">Funtion Title :</span>
      <input type="text" class="form-control" required placeholder="enter a name for your function" name="name" style="font-size: 1.6rem;">
    </div>
    <div class="col">
      <span style="font-size: 1.6rem;">Function type :</span>
      <input type="text" class="form-control" required placeholder="function you want to organize" name="function" style="font-size: 1.6rem;">
    </div>
  </div>
  <div class="form-row" style="gap:2rem;">
    <div class="col">
      <span style="font-size: 1.6rem;">Number of Guests :</span>
      <input type="text" class="form-control"  required placeholder="number of guests" name="guests" style="font-size: 1.6rem;">
    </div>
    <div class="col">
      <span style="font-size: 1.6rem;">Date :</span>
      <input type="date" class="form-control" required name="date" style="font-size: 1.6rem;text-transform: lowercase;">
    </div>
  </div>  
  <div class="form-row" style="gap:2rem;">
    <div class="col">
      <span style="font-size: 1.6rem;">Time :</span>
      <input type="time" class="form-control"  required name="time" style="font-size: 1.6rem;">
    </div>
  </div>
  <input type="submit" value="submit" class="btn" name="submit">
</form>
</div>
<!-- form ends here  -->


<!-- booking section ends -->

<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends  -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>