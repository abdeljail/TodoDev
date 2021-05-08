<?php

/// create function get title the page
function getTitlePage(){
    // variable global
    global $titlePage;
    if(isset($titlePage)){ echo "<title> ". `ucfirst`($titlePage) ." </title>"; return;}
    echo "<title> ". ucfirst("todo list") ." </title>";
}

/// create function get link css
function links($css,$v){  
    echo "<link rel='stylesheet' href='". $css ."Layout/css/". $v .".css'>"; 
};

/// create function get link js
function links($css,$v){  
    echo "<script src='". $css ."Layout/js/". $v .".js'></script>"; 
};