<?php 
    function lang($e) {
         $lang = array(
        // Start page login admin
            "login" => "تسجيل الدخول",
            "email" => "البريد الإلكتروني أو رقم الهاتف",
            "password" => "كلمه السر",
        // End page login admin 
        // Start page not found
            "fh1" => "مشكلة في تسجيل الدخول؟",
            "fp" => " todolist غير مرتبط بأي حساب .",
            "fbtn" => "حاول مرة أخري",
        // End page not found 
        // Start footer
            "en" => "الإنجليزية",
            "fr" => "فرنسا",
            "ar" => "العربية",
        // Start footer
        );
        return $lang[$e];
    };