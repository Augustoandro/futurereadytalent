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
        <link rel="stylesheet" href="scripts/chat.css">
    <link rel="stylesheet" href="scripts/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
<?php
   include('../session.php');
?>
        <div class="container-fluid">
            <h1>Welcome <?php echo $login_session; ?></h1> 
            <h2><a href = "../logout.php">Sign Out</a></h2>
            <div>
                <div class="col-md-6 float-child">
                    <center><a href = "stockmanager.php"><button class="button1">Stock Management</button></a></center>
                </div>
                <div class="col-md-6 float-child">
                    <center><a href = "booktracker.php"><button class="button2">Book Tracking</button></a></center>
                </div>
            </div>
            <div>
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
            <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Game Assistant
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>

                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                    onclick="heartButton()"></i>
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="scripts/responses.js"></script>
<script src="scripts/chat.js"></script>
</html>
