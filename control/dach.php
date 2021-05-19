<?php
#include file checkSessionUser
require_once "php/include/checkSessionUser.php";
#include file init
require_once "php/include/init.php";
# include files in 
include_once getPathFile("include/lang/en.php");
$titlePage = "dachbord";
// # include file start.php
require_once getPathFile('include/template/start.php');
// # include file dach.css
links('','files/dach');
links('','files/header');
links('','files/aside');
links('','files/footer1');
// links('','ar/ardach');
// links('','ar/araside');
// links('','ar/arheader');
// links('','ar/arfooter1');
# echo title Page
getTitlePage();
#include file body.php
require_once getPathFile('include/template/body.php');
// # include file state.php
require_once getPathFile('include/template/state.php');
// # include file header.php
require_once getPathFile('include/template/header.php');?>

<section class="dach">
   <div class="content-dach">
        <?php
            require_once getPathFile('include/template/aside.php');
        ?>
        <div class="content">
            <div class="box-content">
                <div>
                    <div>
                        <div class="header top-1">
                            <h3><?php echo lang("h31")?></h3>
                            <span>
                                <i class="fas fa-plus"></i>
                            </span>
                            <div class="box">
                                <button><?php echo lang("show1")?></button>
                            </div>
                        </div>
                        <div class="body">
                            <div><a href="">1</a></div>
                            <div><a href="">2</a></div>
                            <div><a href="">3</a></div>
                            <div><a href="">4</a></div>
                            <div><a href="">5</a></div>
                            <div><a href="">6</a></div>
                            <div><a href="">7</a></div>
                            <div><a href="">8</a></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="header top-2">
                            <h3><?php echo lang("h32")?></h3>
                            <span>
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="body">
                            <div><a href="">1</a></div>
                            <div><a href="">2</a></div>
                            <div><a href="">3</a></div>
                            <div><a href="">4</a></div>
                            <div><a href="">5</a></div>
                            <div><a href="">6</a></div>
                            <div><a href="">7</a></div>
                            <div><a href="">8</a></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="header top-3">
                            <h3><?php echo lang("h33")?></h3>
                            <span>
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="body">
                            <div><a href="">1</a></div>
                            <div><a href="">2</a></div>
                            <div><a href="">3</a></div>
                            <div><a href="">4</a></div>
                            <div><a href="">5</a></div>
                            <div><a href="">6</a></div>
                            <div><a href="">7</a></div>
                            <div><a href="">8</a></div>
                        </div>
                    </div>
                    </div>
                    <div>
                    <div>
                        <div class="header top-4">
                            <h3><?php echo lang("h34")?></h3>
                            <span>
                                <i class="fas fa-plus"></i>
                            </span>
                        </div>
                        <div class="body">
                            <div><a href="">1</a></div>
                            <div><a href="">2</a></div>
                            <div><a href="">3</a></div>
                            <div><a href="">4</a></div>
                            <div><a href="">5</a></div>
                            <div><a href="">6</a></div>
                            <div><a href="">7</a></div>
                            <div><a href="">8</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</section>

<?php 
require_once getPathFile('include/template/footer1.php');
script("","global");
script("","dach");
script("","footer1");
require_once getPathFile('include/template/end.php');
?>
