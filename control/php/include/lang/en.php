<?php 
    function lang( $e) {
         $lang = array(
        // Start page login admin
            "login" => "login",
            "email" => "Email or phone number",
            "password" => "password",
        // End page login admin  
        // Start footer
            "en" => "English",
            "fr" => "France",
            "ar" => "Arabic",
        // Start footer
        );
        return $lang[$e];
    };