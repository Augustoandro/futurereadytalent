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
                <a href="stockmanager.php">Stock Manager</a>
                <a href="booktracker.php" class="active">Book Tracker</a>
                <a href = "../logout.php">Sign Out</a>
        </div><br>
        <div>
            <center>
                <form action='issuebook.php' method='post'>
                    <label for="edu">Qualification:</label>
                    <select name='issuername' id='issuername'>
                        <?php
                        $sql2 = "SELECT username FROM users";
                        $rs2 = mysqli_query($db,$sql2);
                        while($resul2=mysqli_fetch_assoc($rs2)){
                                echo "<option value=".$resul2['username'].">".$resul2['username']."</option>";                            
                            }
                        ?>
                        </select>
                <table border="">
                    <tr>
                        <td>Book ID</td>
                        <td>Book Name</td>
                        <td>Author</td>
                        <td>Subject</td>
                        <td>Qualification</td>
                        <td>Issued</td>
                        <td>Total Copies</td>
                        <td>Issue</td>
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
                            echo "<td><input name='bookname' type='hidden' value='".$resul['name']."'>";
                            echo "<input type='submit' value='Issue'></td>";
                            echo "</tr>";
                        }
                        ?>
                </table>
                    </form>
                <?php
                    if(isset($_SESSION['message'])){
                        $rs = $_SESSION['message'];
                        echo $rs;    
                    }
                    ?>
            </center>
        </div>
        <div>
            <center>
        <table border="">
            <tr>
                <td>Book Name</td>
                <td>Issuer</td>
                <td>Issue Date</td>
                <td>Return Date</td>
                <td>Reissue/Return</td>
            </tr>
            <?php
            $sql1 = "SELECT * FROM issued";
            $rs1 = mysqli_query($db,$sql1);
            while($resul=mysqli_fetch_assoc($rs1)){
                echo "<tr>";
                echo "<td>".$resul['book']."</td>";
                echo "<td>".$resul['issuer']."</td>";
                echo "<td>".$resul['issue_date']."</td>";
                echo "<td>".$resul['ret_date']."</td>";
                echo "<td><button>Return</button><button>Reissue</button></td>";
                echo "</tr>";
            }
            ?>
        </table>
                </center>
        </div>
        </div>
    </body>
</html>
