<?php 
    function lang($e) {
         $lang = array(
             // Start page sing Up
                "up" => "sing up",
                "in" => "sing in",
                "fullname" => "full name",
                "email" => "email",
                "password" => "password",
                "place" => "number de character > 10",
                "number" => "number phone",
                "fpassword" => "Verify Password",
                "create" => "create account",
             // End page sing Up
            // Start page not found
                "fh1" => "Trouble logging in ?",
                "fp" => "is not associated with any You todolist account.",
                "fbtn" => "Try Again",
            // End page not found
            // Start footer and footer1
                "en" => "English",
                "fr" => "France",
                "ar" => "Arabic",
            // End footer and footer1
            // Start footer1 and footer1
                "copy" => "copy 2021 todo list",
                "by" => "By Abdeljalil Khalal",
            // End footer1 and footer1
         );
        return $lang[$e];
    };