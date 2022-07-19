<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   

   // $message[] = 'sorry you do not have an account!';
};
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $msg = $_POST['msg'];
    $msg = filter_var($msg, FILTER_SANITIZE_STRING);
 
    $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
    $select_message->execute([$name, $email, $number, $msg]);
 
    if($select_message->rowCount() > 0){
       $message[] = 'already sent message!';
    }else{
 
       $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
       $insert_message->execute([$user_id, $name, $email, $number, $msg]);
 
       $message[] = 'message sent successfully!';
 
    }
 
 }
?>

<!DOCTYPE html>
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

<div class="card bg-dark text-white">
  <img src="images/contact_back2.jpg" class="card-img" alt="...">
  <div class="card-img-overlay" style="margin-top:20rem;">
    <h1 class="card-title" style="text-align:center;">Contact Us</h1>
    <p class="card-text" style="font-size:2rem;text-align:center;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam,<br> molestias libero. Sequi numquam iusto odit architecto minus, nostrum et dolorem <br>maxime provident voluptates delectus obcaecati autem iste corrupti, id velit.</p>
   </div>
</div>


<!-- form starts here  -->
<div class="container" style="margin-top:10rem;">
<h1 class="title">Tell something about us</h1>
<form action="" method="post" style="font-size: 5rem;">
  <div class="form-row" style="gap:2rem;">
    <div class="col">
      <span style="font-size: 1.6rem;">Your Name :</span>
      <input type="text" name="name" class="form-control" required placeholder="enter your name" style="font-size: 1.6rem;">
    </div>
    <div class="col">
      <span style="font-size: 1.6rem;"> Email Address :</span>
      <input type="email" name="email" class="form-control" required placeholder="enter your mail address" style="font-size: 1.6rem;">
    </div>
  </div>
  <div class="form-row" style="gap:2rem;">
    <div class="col">
      <span style="font-size: 1.6rem;">Contact Number :</span>
      <input type="number" name="number" class="form-control"  required placeholder="enter your contact number" style="font-size: 1.6rem;">
    </div>
    <div class="col">
      <span style="font-size: 1.6rem;"> Your opinion about us :</span>
      <textarea name="msg" class="form-control" id="exampleFormControlTextarea1" rows="3" required placeholder="say something about us" style="font-size: 1.6rem;text-transform: lowercase;"></textarea>
    </div>
  </div>  
  <input type="submit" value="submit" class="btn" name="submit">
</form>
</div>
<!-- form ends here  -->


<div class="col-12" style="float:right;margin-right:55rem;">
    <div class="row my-5" style="gap: 1rem;float:right">
        <div class="row my-5 ">
            <div class="card card-outline card-navy rounded-0 shadow">
                <div class="card-header">
                    <h4 class="card-title" style="font-size:2rem;">Contact Information</h4>
                </div>
                <div class="card-body rounded-0">
                    <dl>
                        <dt class="text-muted" style="font-size: 1.6rem;"><i class="fa fa-envelope"></i> Email</dt>
                        <dd class="pl-4" style="font-size: 1.6rem;text-transform:lowercase;">astiolives@gmail.com</dd>
                        <dt class="text-muted" style="font-size: 1.6rem;"><i class="fa fa-phone"></i> Contact</dt>
                        <dd class="pl-4" style="font-size: 1.6rem;">0123456789</dd>
                        <dt class="text-muted" style="font-size: 1.6rem;"><i class="fa fa-map-marked-alt"></i> Location</dt>
                        <dd class="pl-4" style="font-size: 1.6rem;">Dhanmondi, Dhaka-1205</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div> <!-- div class col-12  -->

<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends  -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>