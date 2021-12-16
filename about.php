<?php
    require_once'includes/head.php';
    require_once'includes/header.php';

    # Clients section
    $clientImage = array("assets/images/resources/clientImage.png", "assets/images/resources/clientImage2.png", "assets/images/resources/camp-img3.jpg", 
                            "assets/images/resources/camp-img4.jpg", "assets/images/resources/camp-img5.jpg", "assets/images/resources/camp-img6.jpg", 
                            "assets/images/resources/camp-img7.jpg", "assets/images/resources/camp-img8.jpg", "assets/images/resources/camp-img9.jpg");
    $clientName = array("Clients Name 1", "Clients Name 2", "Clients Name 3", 
                            "Clients Name 4", "Clients Name 5", "Clients Name 6",
                            "Clients Name 7", "Clients Name 8", "Clients Name 9");
    $clientAddress = array("Clients Address 1", "Clients Address 2", "Clients Address 3", 
                            "Clients Address 4", "Clients Address 5", "Clients Address 6",
                            "Clients Address 7", "Clients Address 8", "Clients Address 9");
?>

<section>
    <div class="gap black-layer opc8 overlap144">
        <div class="fixed-bg2" style="background-image: url(<?php echo $sliderImage2 ?>);"></div>
        <div class="container">
            <div class="pg-tp-wrp">
                <h1 style="font-size: 2.3em;" itemprop="headline">About Us</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </div><!-- Page Top Wrap -->
        </div>
    </div>
</section>

<section>
    <div style="margin-top: 40px;">
        <div class="container">
            <div class="abt-sec">
                <div style="margin-bottom: 85px;" class="row">
                    <div class="col-md-7 col-sm-12 col-lg-7">
                        <div class="abt-cnt">
                            <div class="sec-tl">
                                <span>We provide best fire protection & rescue system</span>
                                <h4 itemprop="headline">Technofire</h4>
                            </div><!-- Sec Title -->
                            <div class="abt-desc">
                                <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris. Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.</p>
                                <br>
                                <br>
                                <h5 itemprop="headline">Technofire Services</h5>
                                <ul>
                                    <li>Bstsunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                                    <li>Mstsunt in culpa qui officia deserunt mollit anim id est laborumanim id est
                                        laborum.</li>
                                    <li>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut incididunt.
                                    </li>
                                    <li>Qculpa qui officia deserunt mollit anim id estanim id est laborum.</li>
                                </ul>
                                <a style="font-size: .8em;" class="theme-btn brd-rd5" href="about.html" title=""
                                    itemprop="url">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 col-lg-5">
                        <div class="abt-img">
                            <img class="abt-img1" src="assets/images/fact-mockup.png" alt="abt-img1.jpg"
                                itemprop="image">
                        </div>
                    </div>
                </div>
            </div><!-- About Sec -->
        </div>
    </div>
</section>

<section>
    <div style="margin-top: 40px;" class="theme-bg-layer opc9 hlf-parallax">
        <div class="fixed-bg" style="background-image: url(assets/images/parallax1.jpg);"></div>
        <div class="sec-tl text-center">
            <span>We provide you with practical actions, advice and resources.</span>
            <h2 style="font-size: 2.3em;" itemprop="headline">Gallery</h2>
        </div><!-- Sec Title -->
        <div class="vdo-sec-wrp">
            <div class="vdo-car owl-carousel">

                <?php 
                            $i=1;
                            while($i<20)
                                {
                                    $res = mysqli_query($db_connection,"select * from gallery where FIND_IN_SET('{$i}', id)");
                                    $row = mysqli_fetch_array($res);

                                    if ($row != null && $row['id'] == $i){
                                        echo '  <div class="vdo-bx">
                                                    <img style="width: 280px; height: 200px;background-position: center center;background-repeat: no-repeat;" src="admin/upload/'.$row['pictures'].'" alt="vdo-img1-1.jpg" itemprop="image">
                                                    <a href="admin/upload/'.$row['pictures'].'" data-fancybox="gallery" title="" itemprop="url"><i class="flaticon-play-button"></i></a>
                                                </div>';
                                    }

                                    $i++;

                                }

                            ?>
            </div>

            <div style="margin-bottom: 80px;" class="vw-al text-center">
                <a style="font-size: .8em;" class="theme-btn brd-rd5" href="gallery.php" title="" itemprop="url">View
                    More</a>
            </div>
        </div>
        <!-- Video Sec Wrap -->
    </div>
</section>

<section>
    <div class="gap remove-gap">
        <div class="container">
            <div class="sec-tl">
                <span>We provide best fire protection & rescue systems in the world</span>
                <h5 itemprop="headline">Frequently Ask Questions</h5>
            </div><!-- Sec Title -->
            <div class="faq-wrp remove-ext5">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div id="toggle" class="toggle">
                            <div class="toggle-item brd-rd3 activate">
                                <h6 itemprop="headline" class="active">Which mechanism is not a way to transfer heat?<i
                                        class="fas fa-plus"></i><i class="fas fa-minus"></i></h6>
                                <div class="toggle-content">
                                    <p itemprop="description">We are wholly committed to the prevention, preparedness,
                                        response and recovery phases of emergency situations, providing a diverse range
                                        of risk reduction, fire suppression and incident management services to
                                        minimise.</p>
                                </div>
                            </div>
                            <div class="toggle-item brd-rd3">
                                <h6 itemprop="headline">How do you motivate others?<i class="fas fa-plus"></i><i
                                        class="fas fa-minus"></i></h6>
                                <div class="toggle-content">
                                    <p itemprop="description">We are wholly committed to the prevention, preparedness,
                                        response and recovery phases of emergency situations, providing a diverse range
                                        of risk reduction, fire suppression and incident management services to
                                        minimise.</p>
                                </div>
                            </div>
                            <div class="toggle-item brd-rd3">
                                <h6 itemprop="headline">Do you have bingo at my fire station?<i
                                        class="fas fa-plus"></i><i class="fas fa-minus"></i></h6>
                                <div class="toggle-content">
                                    <p itemprop="description">We are wholly committed to the prevention, preparedness,
                                        response and recovery phases of emergency situations, providing a diverse range
                                        of risk reduction, fire suppression and incident management services to
                                        minimise.</p>
                                </div>
                            </div>
                            <div class="toggle-item brd-rd3">
                                <h6 itemprop="headline">How do I arrange to tour a fire station?<i
                                        class="fas fa-plus"></i><i class="fas fa-minus"></i></h6>
                                <div class="toggle-content">
                                    <p itemprop="description">We are wholly committed to the prevention, preparedness,
                                        response and recovery phases of emergency situations, providing a diverse range
                                        of risk reduction, fire suppression and incident management services to
                                        minimise.</p>
                                </div>
                            </div>
                            <div class="toggle-item brd-rd3">
                                <h6 itemprop="headline">Why does a fire engine come when requested you?<i
                                        class="fas fa-plus"></i><i class="fas fa-minus"></i></h6>
                                <div class="toggle-content">
                                    <p itemprop="description">We are wholly committed to the prevention, preparedness,
                                        response and recovery phases of emergency situations, providing a diverse range
                                        of risk reduction, fire suppression and incident management services to
                                        minimise.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div id="toggle2" class="toggle">
                            <div class="toggle-item brd-rd3">
                                <h6 itemprop="headline">How will this change affect CFA volunteers?<i
                                        class="fas fa-plus"></i><i class="fas fa-minus"></i></h6>
                                <div class="toggle-content">
                                    <p itemprop="description">We are wholly committed to the prevention, preparedness,
                                        response and recovery phases of emergency situations, providing a diverse range
                                        of risk reduction, fire suppression and incident management services to
                                        minimise.</p>
                                </div>
                            </div>
                            <div class="toggle-item brd-rd3">
                                <h6 itemprop="headline">How will these changes affect fire trucks emergency?<i
                                        class="fas fa-plus"></i><i class="fas fa-minus"></i></h6>
                                <div class="toggle-content">
                                    <p itemprop="description">We are wholly committed to the prevention, preparedness,
                                        response and recovery phases of emergency situations, providing a diverse range
                                        of risk reduction, fire suppression and incident management services to
                                        minimise.</p>
                                </div>
                            </div>
                            <div class="toggle-item brd-rd3">
                                <h6 itemprop="headline">How do I pay for the service?<i class="fas fa-plus"></i><i
                                        class="fas fa-minus"></i></h6>
                                <div class="toggle-content">
                                    <p itemprop="description">We are wholly committed to the prevention, preparedness,
                                        response and recovery phases of emergency situations, providing a diverse range
                                        of risk reduction, fire suppression and incident management services to
                                        minimise.</p>
                                </div>
                            </div>
                            <div class="toggle-item brd-rd3">
                                <h6 itemprop="headline">Who will clean my home?<i class="fas fa-plus"></i><i
                                        class="fas fa-minus"></i></h6>
                                <div class="toggle-content">
                                    <p itemprop="description">We are wholly committed to the prevention, preparedness,
                                        response and recovery phases of emergency situations, providing a diverse range
                                        of risk reduction, fire suppression and incident management services to
                                        minimise.</p>
                                </div>
                            </div>
                            <div class="toggle-item brd-rd3 activate">
                                <h6 itemprop="headline" class="active">Will presumptive rights be available to all fire
                                    fighters?<i class="fas fa-plus"></i><i class="fas fa-minus"></i></h6>
                                <div class="toggle-content">
                                    <p itemprop="description">We are wholly committed to the prevention, preparedness,
                                        response and recovery phases of emergency situations, providing a diverse range
                                        of risk reduction, fire suppression and incident management services to
                                        minimise.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    require_once'includes/footer.php';
    require_once'includes/scripts.php';
?>
