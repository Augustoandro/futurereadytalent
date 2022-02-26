<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
   error_reporting(0);
   include('../session.php');
   include('../config.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Catalog</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
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
                <a href="catalog.php" class="active">Catalog</a>
                <a href="issued.php">Issued</a>
                <a href = "../logout.php">Sign Out</a>
            </div><br>
        <div>
            <center>
                <table border="">
                    <tr>
                        <td>Book ID</td>
                        <td>Book Name</td>
                        <td>Author</td>
                        <td>Subject</td>
                        <td>Qualification</td>
                        <td>Issued</td>
                        <td>Total Copies</td>
                    </tr>
                        <?php
                        $sql1 = "SELECT * FROM books";
                        $rs1 = mysqli_query($db,$sql1);
                        while($resul=mysqli_fetch_assoc($rs1)){
                            echo "<tr>";
                            echo "<td>".$resul['sno']."</td>";
                            echo "<td>".$resul['name']."</td>";
                            echo "<td>".$resul['author']."</td>";
                            echo"<td>".$resul['subject']."</td>";
                            echo "<td>".$resul['education']."</td>";
                            echo "<td>".$resul['issued']."</td>";
                            echo "<td>".$resul['quantity']."</td>";
                            echo "</tr>";
                        }
                        ?>
                </table>
            </center>
        </div>
        </div>
    </body>
</html>
