<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black;">
        <div class="container-fluid">
            <a href="index.php"> <img src="images/medi.png" id="image"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" style="color: white; " aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php" style="color: white; font-size:bold;">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle " style="color: white; font-size:bold;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: white; font-size:bold;">
                            <?php
                            $data = get_category();
                            $num = sizeof($data);
                            for ($i = 0; $i < $num; $i++) {
                                // replace space with - in category name
                                $data[$i]['name'] = str_replace(' ', '-', $data[$i]['name']);
                            ?>
                                <li><a class="dropdown-item " href="search.php?cat=<?php echo strtolower($data[$i]['name']); ?>"><?php echo $data[$i]['name'] ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="seller/index.php" style="color: white; font-size:bold;">Become a seller</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="appointment/doctor/index.php" style="color: white; font-size:bold;">Become a Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="appointment/book-appointment.php" style="color: white; font-size:bold;">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php" style="color: white; font-size:bold;"> <i class="fas fa-shopping-bag"></i> Cart</a>
                    </li>
                </ul>
                <?php

                if (!isset($_SESSION['user_id'])) {
                    echo "<a class='nav-link' href='login.php' style='color: white; font-size:bold;'> Log in</a>";
                } else {
                    $check_user_id = check_user($_SESSION['user_id']);
                    if ($check_user_id == 1) {
                        echo "<a class='nav-link' href='logout.php' style='color: white; font-size:bold;'> Log out</a>  ";
                    } else {
                        post_redirect("logout.php");
                    }
                }
                ?>


                <form class="d-flex" action="search.php" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" name="search_text">
                    <button class="btn btn-outline-light" type="submit" value="go" name="search"><i class="fas fa-search"></i></button>
                </form>

            </div>
        </div>
    </nav>
</header>