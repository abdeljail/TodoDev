<?php
#include file checkSessionUser
// require_once "php/include/checkSessionUser.php";
#include file init
require_once "php/include/init.php";
$l = "en.php";
$nameLang = "English";
if(isset($_GET["lang"]) && !empty($_GET["lang"])){
    $l = strtolower($_GET["lang"][0].$_GET["lang"][1]) . ".php";
    $nameLang = $_GET["lang"];
}
include_once getPathFile("include/lang/$l");
$titlePage = "sing up";
// # include file start.php
require_once getPathFile('include/template/start.php');
// # include files css
links('','files/footer1');
links('','files/container');
links('','files/singUp');
links('','files/loding');
if($nameLang == "arabe"){
    links('','ar/arsingUp');
    links('','ar/arfooter1');
}
# echo title Page
getTitlePage();
#include file body.php
require_once getPathFile('include/template/body.php');?>
<div class="sing-up">
    <div class="container">
        <div class="btn">
            <button>back</button>
        </div>
        <div class="content">
            <div class="err"></div>
            <div class="form animate-t">
                <div class="lod app-o">
                    <span class="app-load"></span>
                </div>
                <div class="header">
                    <h1><?php echo lang("up"); ?></h1>
                    <span><?php echo lang("in"); ?></span>
                </div>
                <div class="body">
                    <div class="content-form">
                        <div class="full-name">
                            <label for="f-n" class="label"><?php echo lang("fullname"); ?></label>
                            <input type="text" id="f-n">
                        </div>
                        <div class="email">
                            <label for="i-e" class="label"><?php echo lang("email"); ?></label>
                            <input type="email" id="i-e">
                        </div>
                        <div class="phone">
                            <label for="n-p" class="label"><?php echo lang("number"); ?></label>
                            <input type="text" id="n-p">
                        </div>
                        <div class="password">
                            <label for="a-p" class="label"><?php echo lang("password"); ?></label>
                            <input type="password" id="a-p" placeholder="<?php echo lang("place"); ?>">
                        </div>
                        <div class="f-password">
                            <label for="f-p" class="label"><?php echo lang("fpassword"); ?></label>
                            <input type="password" id="f-p">
                        </div>
                        <div class="btn">
                            <button><?php echo lang("create"); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
require_once getPathFile('include/template/footer1.php');
script("","filesReq/global");
script("","files/singUp");
script("","filesReq/footer1");
require_once getPathFile('include/template/end.php');
?>







