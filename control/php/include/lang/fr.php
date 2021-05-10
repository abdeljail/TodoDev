<?php 
    function lang( $e) {
         $lang = array(
        // Start page login admin
            "login" => "Se connecter",
            "email" => "Email ou numéro de téléphone",
            "password" => "Mot de passe",
        // End page login admin
        // Start page not found
            "fh1" => "Problème de connexion?",
            "fp" => "n'est associé à aucun compte Vous todolist.",
            "fbtn" => "Réessayer",
        // End page not found
        // Start footer
            "en" => "Englais",
            "fr" => "France",
            "ar" => "arabe",
        // Start footer
        );
        return $lang[$e];
    }