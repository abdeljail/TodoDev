<?php
if($_SERVER["REQUEST_METHOD"]!="POST"){
        header('Location: http://localhost/tododev/control/php/logOut.php');
        exit;
}