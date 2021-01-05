<nav class="nav-menu d-none d-lg-block">
    <ul>
        <li><a href="order.php">Order Now</a></li>
        <?php
            include('controllers/connection.php');
            if(isset($_SESSION['user'])) {
                $sql = mysqli_query($dbcon,"SELECT * FROM orders WHERE processed=true AND customerName='".$_SESSION['user']."' ORDER BY date DESC");
                echo '
                <li class="drop-down"><a href="#"><i class="fas fa-bell fa-fw"></i> Notifications</a>
                    <ul class="list-group">';
                
                    while($row = mysqli_fetch_array($sql)){
                        echo "<li class='list-group-item'>";
                        switch($row['quantity']) {
                            case 20:
                                echo '<img style="width:50px" src="assets/img/20litre.PNG" />';
                                break;
                            case 19:
                                echo '<img style="width:50px" src="assets/img/9litre.PNG" />';
                                break;
                            case 7:
                                echo '<img style="width:50px" src="assets/img/7litres.PNG" />';
                                break;
                            case 5:
                                echo '<img style="width:50px" src="assets/img/5litre.PNG" />';
                                break;
                            case 1:
                                echo '<img style="width:50px" src="assets/img/litre.PNG" />';
                                break;
                            default:
                                echo '<img style="width:50px" src="assets/img/20litre.PNG" />';
                        }
                        echo $row['customerName'].", you have ".$row['quantity']." litres <br />given at ".$row['date']."</li>";
                    }
                echo '
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