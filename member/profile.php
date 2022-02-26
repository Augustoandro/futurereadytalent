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
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/styles.css" type="text/css">
    </head>
    <body>
        <div class="container-fluid">
            <?php
            echo $login_session;
            ?>
            <center><h1>Profile</h1></center>
            <div class="col-md-6 float-child">
                <center>
                    <?php
                        $sql1 = "SELECT * FROM users WHERE username = '$login_session'";
                        $rs1 = mysqli_query($db,$sql1);
                        while($resul=mysqli_fetch_assoc($rs1)){
                            echo "Username:".$resul['username']."<br>";
                            echo "Password:".$resul['password']."<br>";
                            echo "Email:".$resul['email']."<br>";
                            echo"Name:".$resul['name']."<br>";
                            echo "Address:".$resul['addr']."<br>";
                            echo "Member Since:".$resul['memberdate']."<br>";
                            echo "Education:".$resul['education']."<br>";
                            echo "Profession:".$resul['profession']>"<br>";
                        }
                        ?>
                    <form action="updateprofile.php" method="post">
                        <input type="text" placeholder="Username" name="usrname"><br><br>
                        <input type="text" placeholder="Email" name="email"><br><br>
                        <input type="text" placeholder="Password" name="password"><br><br>
                        <input type="text" placeholder="Confirm Password" name="password_conf"><br><br>
                        <input type="text" placeholder="Name" name="namem"><br><br>
                        <input type="text" placeholder="Address" name="addr"><br><br>
                        <label for="edu">Qualification:</label>
                        <select name="edu" id="edu">
                            <option value="Below 10th">Below 10th</option>
                            <option value="10th">10th</option>
                            <option value="12th">12th</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Graduate">Graduate</option>
                            <option value="Post Graduate">Post Graduate</option>
                        </select><br><br>
                        <label for="prof">Profession:</label>
                        <select name="prof" id="prof">
                            <option value="Other">Other</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Science">Science</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Medicine">Medicine</option>
                            <option value="Law">Law</option>
                            <option value="Literature">Literature</option>
                        </select><br><br>
                        <input type="submit" value="Signup" name="submit_btn"><br><br>
                    </form>
                    <?php
                    if(isset($_SESSION['message'])){
                        $message = $_SESSION['message'];
                        echo $message;
                    }
                    ?>
                </center>
            </div>
        </div>
    </body>
</html>
