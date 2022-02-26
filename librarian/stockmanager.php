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
        <title>My Library - Stock Management</title>
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
                <a href="stockmanager.php" class="active">Stock Manager</a>
                <a href="booktracker.php">Book Tracker</a>
                <a href = "../logout.php">Sign Out</a>
        </div><br>
        <div>
            <center>
                <h3>Add New Book</h3>
                <form method="post" action="addbook.php">
                    <input type="text" placeholder="Book name" name="bname"><br><br>
                    <input type="text" placeholder="Author" name="author"><br><br>
                    <label for="subject">Subject:</label>
                    <select name="subject" id="subject">
                        <option value="Social Science">Social Science</option>
                        <option value="Commerce">Commerce</option>
                        <option value="Science">Science</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Medicine">Medicine</option>
                        <option value="Law">Law</option>
                        <option value="Literature">Literature</option>
                    </select><br><br>
                    <label for="edu">Qualification:</label>
                    <select name="edu" id="edu">
                        <option value="Below 10th">Below 10th</option>
                        <option value="10th">10th</option>
                        <option value="12th">12th</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Graduate">Graduate</option>
                        <option value="Post Graduate">Post Graduate</option>
                    </select><br><br>
                    <input type="number" min="1" max="100" name="quantity" value="1"><br><br>
                    <input type="submit" value="Add Book">
                </form>
                    <?php
                    if(isset($_SESSION['message'])){
                        $rs = $_SESSION['message'];
                        echo $rs;    
                    }
                    ?>
            </center>
        </div><br><br>
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
