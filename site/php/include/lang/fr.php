<?php 
    function lang($e) {
         $lang = array(
             // Start page sing Up
                "up" => "création compte",
                "in" => "Se connecter",
                "fullname" => "nom et prénom",
                "email" => "email",
                "password" => "le mot de passe",
                "place" => "nombre de caractères> 10",
                "number" => "numéro de téléphone",
                "fpassword" => "vérifier le mot de passe",
                "create" => "create account",
             // End page sing Up
            // Start footer and footer1
                "en" => "Englais",
                "fr" => "France",
                "ar" => "arabe",
            // End footer and footer1
            // Start footer1 and footer1 and footer1
                "copy" => "copier la liste de tâches 2021",
                "by" => "Par Abdeljalil Khalal",
            // End footer1 and footer1
        );
        return $lang[$e];
    };