<?php
#include file checkSessionUser
require_once "php/include/checkSessionUser.php";
#include file init
require_once "php/include/init.php";
# include files in 
include_once getPathFile("include/lang/en.php");
$titlePage = "new users";
// # include file start.php
require_once getPathFile('include/template/start.php');
// # include file dach.css
links('','files/header');
links('','files/aside');
links('','files/dach');
links('','files/footer1');
# echo title Page
getTitlePage();
#include file body.php
require_once getPathFile('include/template/body.php');
// # include file header.php
require_once getPathFile('include/template/header.php');?>

<section class="dach">
   <div class="content-dach">
        <?php
            require_once getPathFile('include/template/aside.php');
        ?>
        <div class="content">
            lksfdgkljskldfgjlksdjlkd
        </div>
   </div>
</section>

<?php 
require_once getPathFile('include/template/footer1.php');
script("","global");
script("","footer1");
require_once getPathFile('include/template/end.php');
?>

