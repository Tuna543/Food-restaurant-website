<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_GET['booking_delete'])){
   $delete_id = $_GET['booking_delete'];
   $delete_bookings = $conn->prepare("DELETE FROM `book_form` WHERE id = ?");
   $delete_bookings->execute([$delete_id]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>users accounts</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php' ?>

<!-- user accounts section starts  -->

<section class="accounts">

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
      <a href="see_bookings.php?booking_delete=<?= $fetch_bookings['id']; ?>" class="delete-btn" onclick="return confirm('delete this booking?');">delete</a>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no bookings available</p>';
   }
   ?>

   </div>

</section>

<!-- user accounts section ends -->







<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>