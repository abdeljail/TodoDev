<?php 
    function lang( $e) {
         $lang = array(
        // Start page login admin
            "login" => "login",
            "email" => "Email or phone number",
            "password" => "password",
        // End page login admin 
        // Start page not found
            "fh1" => "Trouble logging in ?",
            "fp" => "is not associated with any You todolist account.",
            "fbtn" => "Try Again",
        // End page not found 
        // Start footer
            "en" => "English",
            "fr" => "France",
            "ar" => "Arabic",
        // Start footer
        );
        return $lang[$e];
    };