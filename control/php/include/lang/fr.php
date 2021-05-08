<?php 
    function lang( $e) {
         $lang = array(
        // Start page login admin
            "login" => "Se connecter",
            "email" => "Email ou numéro de téléphone",
            "password" => "Mot de passe",
        // End page login admin  
        // Start footer
            "en" => "Anglais",
            "fr" => "France",
            "ar" => "L'arabe",
        // Start footer
        );
        return $lang[$e];
    }