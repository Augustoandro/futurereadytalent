<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['usrname']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $myname = mysqli_real_escape_string($db,$_POST['namem']);
      $myaddr = mysqli_real_escape_string($db,$_POST['addr']);
      $myedu = mysqli_real_escape_string($db,$_POST['edu']);
      $myprof = mysqli_real_escape_string($db,$_POST['prof']);
      $date_clicked = date('Y-m-d H:i:s');
      $sql="INSERT INTO `users` (`username`, `password`, `email`, `name`, `addr`, `memberdate`, `education`, `profession`) VALUES ('$myusername', '$mypassword', '$myemail', '$myname', '$myaddr', '$date_clicked', '$myedu', '$myprof')";
      $result = mysqli_query($db,$sql);
   }
   //$message = "Successfully signed up, proceed to login";
   $_SESSION['message'] = "Successfully signed up, proceed to login";
header('Location: index.php');
?>