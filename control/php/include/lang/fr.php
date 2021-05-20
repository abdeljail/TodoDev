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
        // Start page state
            "h4" => "Qu'est-ce qu'une liste de tâches",
            "send" => "envoyer",
        // End page state
        // Start page header
            "em" => "Éditer l'image",
            "lo" => "Se déconnecter",
        // End page header
        // Start page aside
            "link1" => "tableau de bord",
            "link2" => "Utilisateurs de gestion",
            "link3" => "Utilisateurs de Ranke",
            "link4" => "déclaration Utilisateurs",
            "link5" => "messager Tout",
            "link6" => "e-mail",
            "link7" => "créer un compte", 
        // Start page aside 
        // Start Page dach
            "h31" => "Utilisateurs de Ranke",
            "h32" => "Créer un compte",
            "h33" => "Messagère",
            "h34" => "L'information est complète",
            "show1" => "Voir tout",
        // End Page dach
        // Start page ranke Users
            "ranke" => "Spectacle en Libye",
        // End page ranke Users
        // Start page new Users 
            "portfolio" => "Afficher dans le compte",
        // End page new Users
        // Start page information
            "ci" => "Changer l'image",
            "im" => "importer une image",
            "s" => "sauvegarder",
        // End page new information
        // Start footer
            "en" => "Englais",
            "fr" => "France",
            "ar" => "arabe",
        // Start footer
        // Start footer1
            "copy" => "copier la liste de tâches 2021",
            "by" => "Par Abdeljalil Khalal",
        // Start footer1
        );
        return $lang[$e];
    }