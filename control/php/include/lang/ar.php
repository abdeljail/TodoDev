<?php 
    function lang( $e) {
         $lang = array(
        // Start page login admin
            "login" => "تسجيل الدخول",
            "email" => "البريد الإلكتروني أو رقم الهاتف",
            "password" => "كلمه السر",
        // End page login admin  
        // Start footer
            "en" => "الإنجليزية (المملكة المتحدة)",
            "fr" => "فرنسا",
            "ar" => "العربية",
        // Start footer
        );
        return $lang[$e];
    };