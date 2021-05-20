<?php
#include file checkSessionUser
require_once "php/include/checkSessionUser.php";
#include file init
require_once "php/include/init.php";
# include files in 
include_once getPathFile("include/lang/en.php");
$titlePage = "info";
// # include file start.php
require_once getPathFile('include/template/start.php');
// # include file dach.css
links('','files/header');
links('','files/aside');
links('','files/information');
links('','files/footer1');
// links('','ar/arheader');
// links('','ar/araside');
// links('','ar/arinformation');
// links('','ar/arfooter1');
# echo title Page
getTitlePage();
#include file body.php
require_once getPathFile('include/template/body.php');
// # include file header.php
require_once getPathFile('include/template/header.php');?>
<div class="overly"></div>
<section class="info">
    <div class="content-info">
        <?php
            require_once getPathFile('include/template/aside.php');
        ?>
        <div class="box-content">
            <div class="old-imgs">
                <div class="content-imgs">
                    <div><img src="http://localhost/tododev/control/Layout/image/user.jfif" alt=""></div>
                    <div><img src="http://localhost/tododev/control/Layout/image/user.jfif" alt=""></div>
                    <div><img src="http://localhost/tododev/control/Layout/image/user.jfif" alt=""></div>
                    <div><img src="http://localhost/tododev/control/Layout/image/user.jfif" alt=""></div>
                </div>
            </div>
            <div class="btn-change">
                <button type="button"> <?php echo lang("ci") ?></button>
            </div>
            <div class="input-change">
                <div class="content-input">
                    <div class="header">
                        <h4><?php echo lang("ci") ?></h4>
                        <span><i class="fas fa-times"></i></span>
                    </div>
                    <div class="body">
                        <div class="input">
                            <label for="id-ch">
                                <div>
                                    <span><?php echo lang("im") ?></span>
                                    <span><i class="far fa-image"></i></span>
                                </div>
                            </label>
                            <input type="file" id="id-ch">
                        </div>
                        <div class="show-img">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="footer">
                        <button type="button"><?php echo lang("s") ?></button>
                    </div>
                </div>
            </div>
        </div>
   </div>
</section>
<?php 
require_once getPathFile('include/template/footer1.php');
script("","global");
script("","information");
script("","footer1");
require_once getPathFile('include/template/end.php');
?>


