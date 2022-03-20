<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include("../config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       //$myimg = 
       if(isset($_POST['issue_but'])){
           $mybook = mysqli_real_escape_string($db,$_POST['bookname']);
           $myissuer = mysqli_real_escape_string($db,$_POST['issuername']);
           $date_clicked = date('Y-m-d H:i:s');
           $date_clicked2 = Date('y:m:d', strtotime('+14 days'));
           $sql = "INSERT INTO `issued` (`book`, `issuer`, `issue_date`, `ret_date`) VALUES ('$mybook', '$myissuer', '$date_clicked', '$date_clicked2')";
           $result = mysqli_query($db,$sql);
           $sql2 = "UPDATE books SET quantity = quantity - 1, issued = issued + 1 WHERE name = '$mybook'";
           $result2 = mysqli_query($db,$sql2);
           $_SESSION['message'] = "Book successfully issued";
       }
       else if(isset($_POST['ret_but'])){
           $mybook = mysqli_real_escape_string($db,$_POST['bookopname']);
           $myissuer = mysqli_real_escape_string($db,$_POST['useropname']);
           $sql3 = "DELETE FROM `issued` WHERE `book` = '$mybook' AND `issuer` = '$myissuer'";
           $result3 = mysqli_query($db,$sql3);
           $sql4 = "UPDATE books SET quantity = quantity + 1, issued = issued - 1 WHERE name = '$mybook'";
           $result4 = mysqli_query($db,$sql4);
           $_SESSION['message'] = "Book successfully returned";
       }
       else if(isset($_POST['reissue_but'])){
           $mybook = mysqli_real_escape_string($db,$_POST['bookopname']);
           $myissuer = mysqli_real_escape_string($db,$_POST['useropname']);
           $sql6 = "SELECT ret_date FROM `issued` WHERE `book` = '$mybook' AND `issuer` = '$myissuer'";
           $result6 = mysqli_query($db,$sql6);
           while ($row = $result6->fetch_assoc()) {
               $retstring = $row['ret_date'];               
           }
           $sql5 = "UPDATE issued SET ret_date = DATE_ADD('$retstring', INTERVAL 14 DAY) WHERE book = '$mybook' and issuer = '$myissuer'";
           $result5 = mysqli_query($db,$sql5);
           $_SESSION['message'] = "Book successfully reissued";
       }       
   }
   
   header('Location: booktracker.php');
?>