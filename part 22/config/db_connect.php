<?php
 
   $conn = mysqli_connect('localhost', 'mahdi', 'test123', 'opencode_pizza');

   if(!$conn){
      echo 'Connection Error ' . mysqli_connect_error();
   }
?>