<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Library - Dashboard</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
        <script src="../jquery.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="../styles.css" type="text/css">
    </head>
    <body>
<?php
   include('../session.php');
?>
        <div class="container-fluid">
            <h1>Welcome <?php echo $login_session; ?></h1> 
            <h2><a href = "../logout.php">Sign Out</a></h2>
            <div>
                This is member dash
                <center><h3>New Arrivals</h3></center>
                <marquee direction='left'>
                <?php
                        $sql1 = "SELECT * FROM books ORDER BY sno DESC LIMIT 5";
                        $rs1 = mysqli_query($db,$sql1);
                        while($resul=mysqli_fetch_assoc($rs1)){
                            echo "&nbsp;<button id='arr_but'>".$resul['name']."</button>";
                        }                
                        ?>
                    </marquee>
            </div>            
            <div>
                <div class="col-md-4 float-child">
                    <center><a href = "issued.php"><button class="button1">Issued</button></a></center>
                </div>
                <div class="col-md-4 float-child">
                    <center><a href = "catalog.php"><button class="button2">Catalog</button></a></center>
                </div>
                <div class="col-md-4 float-child">
                    <center><a href = "profile.php"><button class="button2">Profile</button></a></center>
                </div>
            </div>
        </div>
    </body>
</html>
