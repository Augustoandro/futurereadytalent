<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include("../config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       //$myimg = 
       $mybook = mysqli_real_escape_string($db,$_POST['bname']);
       $myauthor = mysqli_real_escape_string($db,$_POST['author']);
       $mysub = mysqli_real_escape_string($db,$_POST['subject']);
       $myedu = mysqli_real_escape_string($db,$_POST['edu']);
       $myquantity = mysqli_real_escape_string($db,$_POST['quantity']);
       $sql = "INSERT INTO `books` (`name`, `author`, `subject`, `education`, `issued`,`quantity`) VALUES ('$mybook', '$myauthor', '$mysub', '$myedu', '0','$myquantity')";
       $result = mysqli_query($db,$sql);
   }
   $_SESSION['message'] = "Book record added";
   header('Location: stockmanager.php');
?>