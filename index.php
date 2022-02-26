<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Library</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styles.css" type="text/css">
    </head>
    <body>
        <div class="row">
        <div class="container-fluid">
            <center><h1>My Library</h1></center>
            <div class="col-md-6 float-child">
                <center>Signup</center><br>
                <center>
                    <form action="signup.php" method="post">
                        <input type="text" placeholder="Username" name="usrname"><br><br>
                        <input type="text" placeholder="Email" name="email"><br><br>
                        <input type="password" placeholder="Password" name="password"><br><br>
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
            <div class="col-md-6 totheright">
                <center>Login</center><br>
                <center>
                    <form action="login.php" method="post">
                        <input type="text" placeholder="Username" name="usrname"><br><br>
                        <input type="password" placeholder="Password" name="password"><br><br>
                        <input type="submit" value="Login" name="submit_btn"><br>
                    </form>
                </center>
            </div>
        </div>
        </div>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
