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
include_once "php/include/function/fun.php";
$l = "en.php";
$nameLang = "English";
if(isset($_GET["lang"])){
    $l = strtolower($_GET["lang"][0].$_GET["lang"][1]) . ".php";
    $nameLang = $_GET["lang"];
}
include_once getPathFile("include/lang/$l");
$titlePage = "not found";
// # include file start.php
require_once getPathFile('include/template/start.php');
// # include file login.css
links('','files/notFound');
links('','files/footer');
if($nameLang == "arabe"){
    links('','ar/arnotFound');
}
# echo title Page
getTitlePage();
#include file body.php
require_once getPathFile('include/template/body.php');?>
<section class="notFound">
    <div class="container">
        <div class="content-notFound">
           <div class="content">
               <div class="header-notFound">
                    <div>
                        <h1><?php echo lang("fh1")?></h1>
                    </div>
               </div>
               <div class="body-notFound">
                    <div class="content-body-notFound">
                       <p><span id = "user">0631782500</span> <?php echo lang("fp")?></p>
                    </div>
               </div>
               <div class="footer-notFound">
                   <div>
                        <div class="btn">
                            <button><?php echo lang("fbtn")?></button>
                        </div>
                   </div>
               </div>
           </div>
        </div>
    </div>
</section>
<?php 
require_once getPathFile('include/template/footer.php');
script("","footer");
?>
<script>
  document.querySelector(".btn button").addEventListener("click",_=> window.location.href = "http://localhost/tododev/control/?" + document.URL.split("?")[1] );
  user = document.URL.split("user=")[1] 
  var user = document.URL.split("user=")[1] === undefined ? "user" : document.URL.split("user=")[1];
  document.querySelector("#user").innerHTML = user;
</script>
<?php
require_once getPathFile('include/template/end.php');
?>






    
