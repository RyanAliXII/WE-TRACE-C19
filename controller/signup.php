<?php
include "../models/user.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['pwd'];

  if(empty($email) || empty($password)){
        $_SESSION['error'] = "One or more field is empty";
        header("Location: ../signup.php");
  }
  else{
    $user = new User();
    $user->registerUser($email, $password); 
  }
  
}

if($_SERVER["REQUEST_METHOD"] == "GET"){

}


?>