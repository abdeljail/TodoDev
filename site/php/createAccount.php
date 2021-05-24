<?php
require_once "./include/init.php";
$fn         = filter_var($_POST["data_0"],FILTER_SANITIZE_STRING);
$email      = filter_var($_POST["data_1"],FILTER_VALIDATE_EMAIL);
$phone      = filter_var($_POST["data_2"],FILTER_SANITIZE_STRING);
$pas        = password_hash(filter_var($email,FILTER_SANITIZE_STRING), PASSWORD_DEFAULT);


// echo json_encode(array("message" => createAccount(array($email,$phone,$pas,$fn))));
try{
    if(userFound(array("_email",$email)) != "not found"){
        echo json_encode(array("message" => "Found"));
        exit;
    }
    if(userFound(array("_phone",$phone)) != "not found"){
        echo json_encode(array("message" => "Found"));
        exit;
    }
    if(createAccount(array($email,$phone,$pas,$fn)) == "add"){
        echo json_encode(array("message" => "add"));
        exit;
    }
    echo json_encode(array("message" => "Error Server"));
}catch(PDOExcepyion $e){
    echo json_encode(array("message" => "err"));
}
