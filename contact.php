<?php
    require_once'includes/head.php';
    require_once'includes/header.php';
?>

<section>
    <div class="gap black-layer opc8 overlap144">
        <div class="fixed-bg2" style="background-image: url(<?php echo $sliderImage2 ?>);"></div>
        <div class="container">
            <div class="pg-tp-wrp">
                <h1 style="font-size: 2.3em;" itemprop="headline">Contact Us</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ol>
            </div><!-- Page Top Wrap -->
        </div>
    </div>
</section>

<section style="margin-top: 60px; margin-bottom: 60px;">
    <div>
        <div class="container">
            <div class="cnt-wrp">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <div class="cnt-frm">
                            <h4 style="font-size: 1.6em;" itemprop="headline">Stay With us</h4>
                            <form action="mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <input type="text" name="UName" placeholder="Your Name...">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <input type="email" name="Email" placeholder="Email Address">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <textarea name="msg" placeholder="Your Message Goes Here"></textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <button style="font-size: .8em;" type="submit" class="theme-btn brd-rd5">Submit
                                            Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="cnt-inf-wrp">
                            <h4 style="font-size: 1.6em;" itemprop="headline">Contact info</h4>
                            <ul class="cnt-inf-lst">
                                <li><i class="fas fa-envelope theme-clr"></i> <strong
                                        style="font-size: 1.3em;">Email</strong><a href="mailto:<?php echo $mailLink?>"
                                        title="" itemprop="url"><?php echo $mailLink?></a>
                                <li><i class="fas fa-map-marker-alt theme-clr"></i>
                                    <strong style="font-size: 1.3em;">Address</strong><span><?php echo $address?></span>
                                </li>
                                <li><i class="fas fa-phone theme-clr"></i>
                                    <strong
                                        style="font-size: 1.3em;">Phone</strong><span><?php echo $phoneNumber?></span>
                                </li>
                            </ul>

                            <div class="scl4">
                                <?php 
                                    if ($twitterLink != "#" || $twitterLink != "") echo '<a href="'.$twitterLink.'" title="Twitter" itemprop="url" target="_blank"><i class="fab fa-twitter"></i></a>';
                                    if ($facebookLink != "#" || $facebookLink != "") echo '<a href="'.$facebookLink.'" title="Facebook" itemprop="url" target="_blank"><i class="fab fa-facebook-f"></i></a>';
                                    if ($linkedinLink != "#" || $linkedinLink != "") echo '<a href="'.$linkedinLink.'" title="Linkedin" itemprop="url" target="_blank"><i class="fab fa-linkedin-in"></i></a>';
                                    if ($instagramLink != "#" || $instagramLink != "") echo '<a href="'.$instagramLink.'" title="Instagram" itemprop="url" target="_blank"><i class="fab fa-instagram"></i></a>';
                                ?>
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
