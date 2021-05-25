<?php
require_once "./include/init.php";
try{
    $emailPhone = "_email";
    $data_0 = filter_var($_POST["data_0"], FILTER_SANITIZE_STRING);
    $data_1 = filter_var($_POST["data_1"], FILTER_SANITIZE_STRING);
    if(is_numeric($data_0)) { $emailPhone = "_phone"; }
    $inf = "$emailPhone,_password";
    $row = userFound(array($emailPhone,$data_0));
    if($row != "not found"){
        if(password_verify($data_1 . "php" , $row["_password"])){
            session_start();
            $_SESSION["email"]  = $row["_email"];
            echo json_encode(array("message"=>"found"));
            exit;
        }
        echo json_encode(array("message"=>"password"));
        exit;
    }
    echo json_encode(array("message"=>$row));
}catch(PDOExcepyion $e){
    echo json_encode(array("message"=>$e->getMessage()));
}
