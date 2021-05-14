<?php
session_start();
if(isset($_SESSION["name"]) && isset($_SESSION["email"]) && isset($_SESSION["id"])){
    header("Location:http://localhost/tododev/control/dach.php");
    exit;
}
if(!empty($_SESSION["name"]) && !empty($_SESSION["email"]) && !empty($_SESSION["id"])){
    header("Location:http://localhost/tododev/control/dach.php");
    exit;
}
# include file init
require_once "php/include/init.php";
$l = "en.php";
$nameLang = "English";
if(isset($_GET["lang"])){
    $l = strtolower($_GET["lang"][0].$_GET["lang"][1]) . ".php";
    $nameLang = $_GET["lang"];
}
include_once getPathFile("include/lang/$l");
$titlePage = "login";
// # include file start.php
require_once getPathFile('include/template/start.php');
// # include file login.css
links('','files/login');
links('','files/footer');
if($nameLang == "arabe"){
    links('','ar/arlogin');
}
# echo title Page
getTitlePage();
#include file body.php
require_once getPathFile('include/template/body.php');?>

<section class="login">
    <div class="container">
        <div class="content-login">
           <div class="form">
               <div class="header-form">
                    <div>
                        <h1><?php echo lang("login")?></h1>
                    </div>
               </div>
               <div class="body-form">
                    <div class="content-body-form">
                        <div class="email-phone">
                            <label for="@0"><?php echo lang("email")?></label>
                            <input type="text" name="#id45" id="@0">
                        </div>
                        <div class="password">
                            <label for="hp"><?php echo lang("password")?></label>
                            <input type="password" name="#id45" id="hp">
                        </div>
                    </div>
               </div>
               <div class="footer-form">
                   <div>
                        <div class="btn">
                            <button><?php echo lang("login")?></button>
                        </div>
                   </div>
               </div>
           </div>
        </div>
    </div>
</section>
<?php
require_once getPathFile('include/template/footer.php');
script("","login");
script("","footer");
require_once getPathFile('include/template/end.php');
?>






    
