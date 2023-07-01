<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Page Preload -->

<header class="header clearfix element_to_stick">
    <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
    <div class="container-fluid">

        <div id="logo">
            <a href="index.php">
                <img src="img/logo.svg" width="340" height="75" alt="" class="logo_normal">
                <img src="img/logo_sticky.svg" width="340" height="75" alt="" class="logo_sticky">
            </a>
        </div>


        <!-- /top_menu -->
        <a href="#0" class="open_close">
            <i class="icon_menu"></i><span>Menu</span>
        </a>


        <nav class="main-menu">

            <div id="header_menu">
                <a href="#0" class="open_close">
                    <i class="icon_close"></i><span>Menu</span>
                </a>
                <a href="index.php"><img src="img/logo.svg" width="340" height="75" alt=""></a>
            </div>

            <ul>
                <li class="submenu">
                    <a href="index.php" class="show-submenu <?php if ($_SESSION['active'] == "home") {
                                                                echo "active";
                                                            } ?>">Home</a>
                </li>

                <li class="submenu">
                    <a href="about.php" class="show-submenu <?php if ($_SESSION['active'] == "about") {
                                                                echo "active";
                                                            } ?>">About Us</a>
                </li>

                <li class="submenu">
                    <a href="#0" class="show-submenu">Wazi Solutions</a>
                    <ul>

                        <li><a href="cleaning-solutions.php" class="<?php if ($_SESSION['active'] == "cleaning") {
                                                                        echo "active";
                                                                    } ?>">House Keeping</a></li>
                        <li><a href="staff-training.php" class="<?php if ($_SESSION['active'] == "staff") {
                                                                    echo "active";
                                                                } ?>">Hospitality Staff Training</a></li>
                        <!-- <li><a href="facility-layout-and-designs.php" class="<?php if ($_SESSION['active'] == "facility") {
                                                                                    echo "active";
                                                                                } ?>">Facility Layout & Designs</a></li> -->

                        <li><a href="cuisine.php" class="<?php if ($_SESSION['active'] == "cuisine") {
                                                                echo "active";
                                                            } ?>">Cuisine</a></li>
                        <li><a href="catering.php" class="<?php if ($_SESSION['active'] == "catering") {
                                                                echo "active";
                                                            } ?>">Catering</a></li>
                        <li><a href="pest-control-solutions.php" class="<?php if ($_SESSION['active'] == "pest") {
                                                                            echo "active";
                                                                        } ?>">Pest Control</a></li>
                        <li><a href="consultancy-and-design.php" class="<?php if ($_SESSION['active'] == "kitchen") {
                                                                                    echo "active";
                                                                                } ?>">Consultancy & Design</a></li>

                    </ul>
                </li>

                <li class="submenu">
                    <a href="contacts.php" class="show-submenu <?php if ($_SESSION['active'] == "contact") {
                                                                    echo "active";
                                                                } ?>">Contact Us</a>
                </li>
                <li class="submenu">
                    <a href="gallery.php" class="show-submenu <?php if ($_SESSION['active'] == "gallery") {
                                                                    echo "active";
                                                                } ?>">Gallery</a>
                </li>

                <li><a href="blog.php" class="btn_top">Blog</a></li>
            </ul>


        </nav>
    </div>

</header>
<!-- /header -->