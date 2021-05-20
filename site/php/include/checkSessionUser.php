<?php
session_start();
if(!isset($_SESSION["name"]) || !isset($_SESSION["email"]) || !isset($_SESSION["id"])){
    header("Location:http://localhost/tododev/control/");
    exit;
}
if(empty($_SESSION["name"]) || empty($_SESSION["email"]) || empty($_SESSION["id"])){
    header("Location:http://localhost/tododev/control/");
    exit;
}