<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   
   header('location:home.php');

   // $message[] = 'sorry you do not have an account!';
};


if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $function = $_POST['function'];
   $function = filter_var($function, FILTER_SANITIZE_STRING);
   $address = $_POST['address'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);
   $guests = $_POST['guests'];
   $guests = filter_var($guests, FILTER_SANITIZE_STRING);
   $date = $_POST['date'];
   $time = $_POST['time'];
      
   $insert_user = $conn->prepare("INSERT INTO `book_form`(name, email, number, function, address, guests, date, time) VALUES(?,?,?,?,?,?,?,?)");
   $insert_user->execute([$name, $email, $number, $function, $address, $guests, $date, $time]);
   $message[] = 'booking successful!';
   // header('location:home.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
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

<section class="booking">

   <h1 class="title">book your reservation!</h1>

   <form action="" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" required placeholder="enter your name" name="name" oninput="this.value = this.value.replace(/\s/g, '')">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" required placeholder="enter your email" name="email" oninput="this.value = this.value.replace(/\s/g, '')">
         </div>
         <div class="inputBox">
            <span>number :</span>
            <input type="text" required placeholder="enter your number" name="number" oninput="this.value = this.value.replace(/\s/g, '')">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" required placeholder="enter your address" name="address" oninput="this.value = this.value.replace(/\s/g, '')">
         </div>
         <div class="inputBox">
            <span>function :</span>
            <input type="text" required placeholder="function you want to organize" name="function" oninput="this.value = this.value.replace(/\s/g, '')">
         </div>
         <div class="inputBox">
            <span>guests:</span>
            <input type="text" required placeholder="number of guests" name="guests" oninput="this.value = this.value.replace(/\s/g, '')">
         </div>
         <div class="inputBox">
            <span>date :</span>
            <input type="date" required name="date" oninput="this.value = this.value.replace(/\s/g, '')">
         </div>
         <div class="inputBox">
            <span>time :</span>
            <input type="time" required name="time" oninput="this.value = this.value.replace(/\s/g, '')">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="submit">

   </form>

</section>

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