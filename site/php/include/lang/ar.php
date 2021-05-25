<?php 
    function lang($e) {
         $lang = array(
             // Start page sing Up // 
                "up" => "إنشاء حساب جديد ", 
                "in" => " تسجيل الدخول",
                "fullname" => "الاسم بالكامل",
                "email" => "البريد الإلكتروني",
                "password" => "كلمه السر",
                "place" => "رقم الحرف> 10",
                "number" => "رقم الهاتف",
                "fpassword" => "اكد كلمة المرور",
                "create" => "إنشاء حساب ",
             // End page sing Up
            // Start footer
                "en" => "الإنجليزية",
                "fr" => "فرنسا",
                "ar" => "العربية",
            // Start footer
            // Start footer1
                "copy" => "نسخ 2021 قائمة المهام",
                "by" => "بقلم عبد الجليل خليل",
            // Start footer1
            // Start page not found
                "fh1" => "مشكلة في تسجيل الدخول؟",
                "fp" => " todolist غير مرتبط بأي حساب .",
                "fbtn" => "حاول مرة أخري",
            // End page not found 
        );
        return $lang[$e];
    };