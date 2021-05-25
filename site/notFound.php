<?php
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
links('','files/footer1');
links('','files/header1');
if($nameLang == "arabe"){
    links('','ar/arnotFound');
    links('','ar/footer1');
}
# echo title Page
getTitlePage();
#include file body.php
require_once getPathFile('include/template/body.php');
require_once getPathFile('include/template/header1.php');?>
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
require_once getPathFile('include/template/footer1.php');
script("","filesReq/global");
script("","filesReq/footer1");
?>
<script>
  document.querySelector(".btn button").addEventListener("click",_=> window.location.href = "http://localhost/tododev/site/?");
  user = document.URL.split("?")[1]
  var user = document.URL.split("?")[1] === undefined ? "user" : document.URL.split("?")[1];
  document.querySelector("#user").innerHTML = user;
</script>
<?php
require_once getPathFile('include/template/end.php');
?>






    
