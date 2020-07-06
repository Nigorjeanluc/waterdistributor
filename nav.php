<nav class="nav-menu d-none d-lg-block">
    <ul>
        <li><a href="order.php">Order Now</a></li>
        <?php
            if(isset($_SESSION['user'])) {
                echo '
                <li class="drop-down"><a href="#"><i class="fas fa-bell fa-fw"></i> Notifications</a>
                    <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="#"><img style="border-radius: 50%; width: 20px" src="dashboard/img/avatar.png"> '.$_SESSION['user'].'</a>
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="login.php?no=1">Logout</a></li>
                    </ul>
                </li>
                ';
            } else {
                echo '
                <li><a href="login.php">Login</a></li>
                ';
            }
        ?>
    </ul>
</nav><!-- .nav-menu -->