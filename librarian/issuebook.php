<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include("../config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       //$myimg = 
       $mybook = mysqli_real_escape_string($db,$_POST['bookname']);
       $myissuer = mysqli_real_escape_string($db,$_POST['issuername']);
       $date_clicked = date('Y-m-d H:i:s');
       $date_clicked2 = Date('y:m:d', strtotime('+14 days'));
       $sql = "INSERT INTO `issued` (`book`, `issuer`, `issue_date`, `ret_date`) VALUES ('$mybook', '$myissuer', '$date_clicked', '$date_clicked2')";
       $result = mysqli_query($db,$sql);
       $sql2 = "UPDATE books SET quantity = quantity - 1, issued = issued + 1 WHERE name = '$mybook'";
       $result2 = mysqli_query($db,$sql2);
   }
   $_SESSION['message'] = "Book successfully issued";
   header('Location: booktracker.php');
?>