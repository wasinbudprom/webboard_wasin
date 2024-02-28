<?php session_start(); ?>
<nav class="navbar">
    <div class="rounded-3 container fs-5  p-3" style="background-color:#DCDCDC; ">
        <div class="">
            <i class="bi bi-house-door-fill"></i>
            <a class="navbar-brand" href="index.php">Home</a>
        </div>
        <div class="navbar-nav">
            <?php
            if (!isset($_SESSION['id'])) {
                echo "<a href=login.php style='float: right' class='navbar-link'><i class='navbar-item bi bi-pencil-square'></i>เข้าสู่ระบบ</a>";
                ?>

            <?php } else { ?>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle btn btn-outline-secondary" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" href="">
                        <?php echo ($_SESSION['username']) ?>
                    </a>
                    <ul class="dropdown-menu  position-absolute">
                        <li><a class="dropdown-item " href="logout.php">Log out</a></li>
                    </ul>
                </li>

            <?php } ?>
        </div>
    </div>
</nav>