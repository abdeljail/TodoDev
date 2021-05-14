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
        // Start page state
            "h4" => "ما هي قائمة المهام",
            "send" => "إرسال",
        // End page state
        // Start page header
            "em" => "تعديل الصورة",
            "lo" => "تسجيل خروج",
        // End page header
        // Start page aside
            "link1" => "لوحة القيادة",
            "link2" => "مستخدمي الإدارة",
            "link3" => "المستخدمين رتبة",
            "link4" => "إعلان المستخدمين",
            "link5" => "رسول الكل",
            "link6" => "البريد الإلكتروني",
        // Start page aside 
        // Start Page dach
            "h31" => "المستخدمين رتبة",
            "h32" => "إنشاء حساب",
            "h33" => "ميسانجر",
            "h34" => "المعلومات كاملة",
            "show1" => "مشاهدة الكل",

        // End Page dach
        // Start footer
            "en" => "الإنجليزية",
            "fr" => "فرنسا",
            "ar" => "العربية",
        // Start footer
        // Start footer1
            "copy" => "نسخ 2021 قائمة المهام",
            "by" => "بقلم عبد الجليل خليل",
        // Start footer1
        );
        return $lang[$e];
    };