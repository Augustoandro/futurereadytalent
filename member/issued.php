<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
   error_reporting(0);
   include('../session.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Library - Book Tracking</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../jquery.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="../styles.css" type="text/css">
    </head>
    <body>
        <?php
        // put your code here
        echo $login_session;
        ?>
        <div class="container-fluid">
            <div class="topnav">
                <a href="dash.php">Dashboard</a>
                <a href="catalog.php">Catalog</a>
                <a href="issued.php" class="active">Issued</a>
                <a href = "../logout.php">Sign Out</a>
        </div><br>
        <div>
            <center>
        <table border="">
            <tr>
                <td>Book Name</td>
                <td>Issuer</td>
                <td>Issue Date</td>
                <td>Return Date</td>
            </tr>
            <?php
            $sql1 = "SELECT * FROM issued WHERE issuer = '$login_session'";
            $rs1 = mysqli_query($db,$sql1);
            while($resul=mysqli_fetch_assoc($rs1)){
                echo "<tr>";
                echo "<td>".$resul['book']."</td>";
                echo "<td>".$resul['issuer']."</td>";
                echo "<td>".$resul['issue_date']."</td>";
                echo "<td>".$resul['ret_date']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
                </center>
        </div>
        </div>
    </body>
</html>
