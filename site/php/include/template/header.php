<header>
    <nav>
        <div class="container">
            <div class="content-nav">
                <div class="logo">
                    <a href="http://localhost/tododev/control/dach.php" accesskey="t">
                        <div class="box-img">
                            <img src="http://localhost/tododev/control/Layout/image/back-TL.png" alt="back image" width="76px" height="65px">
                            <img src="http://localhost/tododev/control/Layout/image/Todo.png" alt="list" width="54px" height="31px">
                            <img src="http://localhost/tododev/control/Layout/image/List.png" alt="todo" width="36px" height="31px">
                        </div>
                    </a>
                </div>
                <div class="portfoloi">
                    <div class="img-p">
                        <img src="http://localhost/tododev/control/Layout/image/user.jfif" width="100%" height="100%" alt="image user">
                    </div>
                    <span class="rotate"></span>
                    <ul>
                        <li>
                            <a href="http://localhost/tododev/control/Layout/image/back-TL.png" accesskey="@"><?php session_start(); echo $_SESSION["email"]; ?></a>
                        </li>
                        <li>
                            <a href="http://localhost/tododev/control/Layout/image/back-TL.png" accesskey="e"><?php echo lang("em")?></a>
                        </li>
                        <li>
                            <button><?php echo lang("lo")?></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
