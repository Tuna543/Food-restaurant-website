<?php

$connection = mysqli_connect('localhost','root','','food_db');

// session_start();

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $function = $_POST['function'];
      $guests = $_POST['guests'];
      $date = $_POST['date'];
      $time = $_POST['time'];

      $request = "INSERT INTO 'book_form'('name', 'email', 'phone', 'address', 'function', 'guests', 'date', 'time') values('$name','$email','$phone','$address','$function','$guests','$date','$time') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 
      echo 'Your booking has been set successfully';

   }else{
      echo 'something went wrong please try again!';
   }

?>