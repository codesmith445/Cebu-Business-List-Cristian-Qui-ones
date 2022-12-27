<?php 
  
 $connection = mysqli_connect('localhost', 'root');
 mysqli_select_db($connection, "cebubizlist");

 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];
 $message = $_POST['message'];

 $query = "INSERT INTO `bizlist`(`firstname`, `lastname`, `email`, `message`) VALUES('$firstname', '$lastname', '$email', '$message') ";

 mysqli_query($connection,$query);
  echo '<script type="text/javascript">';
 echo ' alert("Message has been sent")';  //not showing an alert box.
 echo '</script>';

 
?>