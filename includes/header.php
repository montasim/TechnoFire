<?php 
    # config file
    $db_connection = mysqli_connect('localhost','root','','technofire');

    // "order by id desc" is used to show recent added catagory first
    $res=mysqli_query($db_connection,"select * from settings where role=2 order by id desc");

    $row=mysqli_fetch_assoc($res);

    # Website Logo
    $webLogo = "assets/images/logo.png";
    # Slider Images
    $sliderImage1 = "assets/images/resources/slider1.jpg"; 
    $sliderImage2 = "assets/images/resources/2.jpg";   
    # Social Links
    $twitterLink = $row['twitter'];
    $facebookLink = $row['facebook'];
    $linkedinLink = $row['linkedin'];
    $instagramLink = $row['instagram'];
    $mailLink = $row['email'];
    $address = $row['address'];
    $phoneNumber = $row['mobile'];
    # Slogan
    $slogan1 = $row['slogan'];
    $sloganArray1 = explode(" ",$slogan1);
    $sizeOfSlogan1 = count($sloganArray1);
    $slogan2 = "Fire safety on, Accidents gone.";
    $sloganArray2 = explode(" ",$slogan2);
    $sizeOfSlogan2 = count($sloganArray2);
?>


<header class="stick">
    <!-- Start Topbar -->
    <div class="tb-br">
        <div class="container">
            <div class="scl1 float-left">
                <?php 
                    if ($twitterLink != "#" || $twitterLink != "") echo '<a href="'.$twitterLink.'" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>';
                    if ($facebookLink != "#" || $facebookLink != "") echo '<a href="'.$facebookLink.'" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>';
                    if ($linkedinLink != "#" || $linkedinLink != "") echo '<a href="'.$linkedinLink.'" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-linkedin-in"></i></a>';
                    if ($instagramLink != "#" || $instagramLink != "") echo '<a href="'.$instagramLink.'" title="Instagram" itemprop="url" target="_blank"><i class="fab fa-instagram"></i></a>';
                ?>
            </div>

            <ul class="tp-lst float-right">
                <li><i class="fas fa-envelope theme-clr"></i><a href="mailto:<?php echo $mailLink?>" title=""
                        itemprop="url"><?php echo $mailLink?></a></li>
                <li><i class="flaticon-telephone theme-clr"></i><a href="tel:<?php echo $phoneNumber?>" title=""
                        itemprop="url"><?php echo $phoneNumber?></a></li>
            </ul>
        </div>
    </div>
    <!-- End Topbar -->

    <div class="lg-mnu-sec sticky">
        <div class="container" style="display: block; margin-top: -30px;" >
            <div class="logo"><a href="index.php" title="Logo" itemprop="url"><img 
                        style="margin-top: 16px; display: block; width: auto; height: 70px;background-position: center center;background-repeat: no-repeat;" 
                        src="<?php echo $webLogo?>"
                        alt="logo.png" itemprop="image"></a></div><!-- Logo -->
            <nav>
                <div>
                    <ul>
                        <li><a href="index.php" title="" itemprop="url">Home</a></li>
                        <li><a href="about.php" title="" itemprop="url">About Us</a></li>
                        <li class="menu-item-has-children"><a href="category.php" title="" itemprop="url">Category <i
                                    class="fas fa-angle-down"></i></a>
                            <ul>
                                <?php
                                            // department will be displayed based on their name
                                            $catagory_result = mysqli_query($db_connection,"select * from catagory order by catagory asc");
                                            
                                            while($catagory_row = mysqli_fetch_assoc($catagory_result)){
                                                
                                                echo "<li><a href='products-by-category.php?status=proByCat&&id=".$catagory_row['id']."' title='' itemprop='url'>".$catagory_row['catagory']."</a></li>";
                                            }
                                        ?>
                                <!-- <li><a href="events.php" title="" itemprop="url">Our Events</a></li>
                                        <li><a href="event-detail.php" title="" itemprop="url">Event Detail</a></li> -->
                            </ul>
                        </li>
                        <li><a href="clients.php" title="" itemprop="url">Our Clients</a></li>
                        <li><a href="gallery.php" title="" itemprop="url">Gallery</a></li>
                        <li><a href="contact.php" title="" itemprop="url">Contact</a></li>
                    </ul>
                    <a class="srch-btn theme-bg brd-rd3" href="#" title="" itemprop="url"><i
                            class="fas fa-search"></i></a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Logo Menu Sec -->
</header>
<!-- Header -->

<!-- Start Header Search -->
<div class="header-search">
    <span class="srch-cls-btn brd-rd5"><i class="fas fa-times"></i></span>
    <form>
        <input type="text" placeholder="Search Keywords Here...">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
</div>
<!-- End Header Search -->

<!-- start mobile menu -->
<div class="rspn-hdr">
    <div class="rspn-mdbr">
        <ul class="rspn-scil">
            <li>
                <?php
                    if ($twitterLink != "#" || $twitterLink != "") echo '<a href="'.$twitterLink.'" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>';
                ?>
            </li>

            <li>
                <?php
                    if ($facebookLink != "#" || $facebookLink != "") echo '<a href="'.$facebookLink.'" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>';
                ?>
            </li>

            <li>
                <?php
                    if ($linkedinLink != "#" || $linkedinLink != "") echo '<a href="'.$linkedinLink.'" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-linkedin-in"></i></a>';
                ?>
            </li>

            <li>
                <?php
                    if ($instagramLink != "#" || $instagramLink != "") echo '<a href="'.$instagramLink.'" title="Instagram" itemprop="url" target="_blank"><i class="fab fa-instagram"></i></a>';
                ?>
            </li>
        </ul>
        <form class="rspn-srch">
            <input type="text" placeholder="Enter Your Keyword" />
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="lg-mn">
        <div class="logo"><a href="index.php" title="Logo" itemprop="url"><img src="assets/images/logo2.png"
                    alt="logo2.png" itemprop="image"></a></div>
        <div class="rspn-cnt">
            <span><i class="fas fa-envelope theme-clr"></i><a href="mailto:<?php echo $mailLink?>" title=""
                    itemprop="url"><?php echo $mailLink?></a></span>
            <span><i class="flaticon-telephone theme-clr"></i><a href="tel:<?php echo $phoneNumber?>" title=""
                    itemprop="url"><?php echo $phoneNumber?></a></span>
        </div>
        <span class="rspn-mnu-btn brd-rd5"><i class="fa fa-list-ul"></i></span>
    </div>
    <div class="rsnp-mnu">
        <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
        <ul>
            <li><a href="index.php" title="" itemprop="url">Home</a></li>
            <li><a href="about.php" title="" itemprop="url">About Us</a>
            </li>
            <li class="menu-item-has-children"><a href="category.php" title="" itemprop="url">Category</a>
                <ul>
                    <?php
                        // department will be displayed based on their name
                        $catagory_result = mysqli_query($db_connection,"select * from catagory order by catagory asc");
                                            
                        while($catagory_row = mysqli_fetch_assoc($catagory_result)){
                                                
                            echo "<li><a href='products-by-category.php?status=proByCat&&id=".$catagory_row['id']."' title='' itemprop='url'>".$catagory_row['catagory']."</a></li>";
                        }
                    ?>
                </ul>
            </li>
            <li><a href="clients.php" title="" itemprop="url">Our Clients</a>
            </li>
            <li><a href="gallery.php" title="" itemprop="url">Gallery</a></li>
            <li><a href="contact.php" title="" itemprop="url">Contact</a></li>
        </ul>
    </div>
</div>
<!-- end mobile menu -->
