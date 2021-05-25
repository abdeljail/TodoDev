<?php
// include file connect 
include_once "connect.php";
// include file fun
include_once "function/fun.php";
// function search user has account or has not account
function userFound ($arr) {
        global $conn;
        global $inf;
        $stmt   =   $conn->prepare("SELECT $inf FROM users WHERE  $arr[0] = '$arr[1]' ;");
        $stmt->execute();
        $c      =   $stmt->rowCount();
        if($c == 0) return "not found";
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
}
// function for create account for users
function createAccount($arrIndex) {
    global $conn;
    $stmt   =   $conn->prepare("INSERT INTO users(_email,_phone,_password,_full_name,_date_create) VALUES(?,?,?,?,CURRENT_DATE())");
    // for($i=1;$i<=count($arrIndex); $i++){
        $stmt->bindValue(1,$arrIndex[0]);
        $stmt->bindValue(2,$arrIndex[1]);
        $stmt->bindValue(3,$arrIndex[2]);
        $stmt->bindValue(4,$arrIndex[3]);
    // }
    $stmt->execute();
    return "add";
}


