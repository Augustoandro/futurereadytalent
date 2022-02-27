<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
define('DB_SERVER', 'frt.database.windows.net');
   define('DB_USERNAME', 'augusto');
   define('DB_PASSWORD', 'pacman@1729');
   define('DB_DATABASE', 'futurereadytalent');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
