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
links('','files/rankeUsers');
links('','files/footer1');
// links('','ar/arheader');
// links('','ar/araside');
// links('','ar/arrankeUsers');
// links('','ar/arfooter1');
# echo title Page
getTitlePage();
#include file body.php
require_once getPathFile('include/template/body.php');
// # include file header.php
require_once getPathFile('include/template/header.php');?>

<section class="ranke">
   <div class="content-ranke">
        <?php
            require_once getPathFile('include/template/aside.php');
        ?>
        <div class="content">
            <div class="box-content">
                <div class="hedaer-ranke-search">
                    <div class="content-search">
                        <div class="box-input">
                            <div class="icon">
                                <button name="search">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <div class="text-input">
                                <label for="t-in"></label>
                                <input type="text" name="input" id="t-in">
                            </div>
                            <div class="select-year">
                               <div>
                                    <span>Select year</span>
                                    <i class="fas fa-sort-down"></i>
                               </div>
                               <div class="box-select">
                                    <span>fd</span>
                                    <span>fdfff</span>
                                    <span>ddddd</span>
                                    <span>ddddd</span>
                                    <span>dd</span>
                                    <span>ddd</span>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body-ranke-res">
                    <div class="content-res">
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#"><?php echo lang("ranke")?></a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#"><?php echo lang("ranke")?></a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>

                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>

                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
                        </div>
                        <div class="pack">
                            <div class="header-pack">
                                <h4>abdeljalil khalal</h4>
                            </div>
                            <div class="body-pack">
                                <div class="number-ranke">
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="state-ranke">
                                    <div class="sec">
                                        45%
                                    </div>
                                    <div class="dan">
                                        45%
                                    </div>
                                </div>
                            </div>
                            <div class="footer-pack">
                                <a href="#">View in mibyan</a>
                            </div>
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
script("","rankeUsers");
script("","footer1");
require_once getPathFile('include/template/end.php');
?>

