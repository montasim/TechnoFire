<style>
#myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 99;
    font-size: 12px;
    border: none;
    outline: none;
    background-color: red;
    color: white;
    cursor: pointer;
    padding: 8px;
    border-radius: 5px;
}

#myBtn:hover {
    background-color: #555;
}

</style>

<button onclick="topFunction()" id="myBtn" title="Go to top">Goto Top</button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

<!-- Start Footer -->
<footer>
    <div class="gap drk-bg">
        <div style="margin-top: -40px;" class="container">

            <div class="ftr-dta remove-ext5">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-lg-5">
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-lg-5">
                                <div class="wdgt-bx">
                                    <h5 style="font-size: 1.3em;" itemprop="headline">Quick Links</h5>
                                    <ul>
                                        <li><a href="index.php" title="" itemprop="url"><i
                                                    class="fas fa-angle-double-right"></i>Home</a></li>
                                        <li><a href="about.php" title="" itemprop="url"><i
                                                    class="fas fa-angle-double-right"></i>About Us</a></li>
                                        <li><a href=" clients.php" title="" itemprop="url"><i
                                                    class="fas fa-angle-double-right"></i>Our Clients</a></li>
                                        <li><a href="gallery.php" title="" itemprop="url"><i
                                                    class="fas fa-angle-double-right"></i>Gallery</a></li>
                                        <li><a href="#" title="" itemprop="url"><i
                                                    class="fas fa-angle-double-right"></i>Contact</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-5 col-lg-5">
                                <div class="wdgt-bx">
                                    <h5 style="font-size: 1.3em;" itemprop="headline">Services</h5>
                                    <ul>
                                        <li><a href="#" title="" itemprop="url"><i
                                                    class="fas fa-angle-double-right"></i>Testimonials</a></li>
                                        <li><a href="#" title="" itemprop="url"><i
                                                    class="fas fa-angle-double-right"></i>Terms of Service</a></li>
                                        <li><a href="#" title="" itemprop="url"><i
                                                    class="fas fa-angle-double-right"></i>Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 col-sm-12 col-lg-7">
                        <div class="row">
                            <div class="col-md-7 col-sm-7 col-lg-7">
                                <div class="wdgt-bx">
                                    <h5 style="font-size: 1.3em;" itemprop="headline">Latest Product</h5>
                                    <div class="wrk-glry-wrp">
                                        <ul class="wrk-gal-mn">
                                            <li><img style="width: 380px; height: 200px;"
                                                    src="assets\images\latest product\1.jpg" alt="1.jpg"
                                                    itemprop="image"></li>
                                            <li><img style="width: 380px; height: 200px;"
                                                    src="assets\images\latest product\2.jpg" alt="2.jpg"
                                                    itemprop="image"></li>
                                            <li><img style="width: 380px; height: 200px;"
                                                    src="assets\images\latest product\3.jpg" alt="3.jpg"
                                                    itemprop="image"></li>
                                            <li><img style="width: 380px; height: 200px;"
                                                    src="assets\images\latest product\4.jpg" alt="4.jpg"
                                                    itemprop="image"></li>
                                            <li><img style="width: 380px; height: 200px;"
                                                    src="assets\images\latest product\5.jpg" alt="5.jpg"
                                                    itemprop="image"></li>
                                            <li><img style="width: 380px; height: 200px;"
                                                    src="assets\images\latest product\6.jpg" alt="6.jpg"
                                                    itemprop="image"></li>
                                        </ul>
                                        <ul class="wrk-gal-nv">
                                            <li>
                                                <div class="wrk-gal-nv-itm"><img style="width: 80px; height: 60px;"
                                                        src="assets\images\latest product\1.jpg" alt="1.jpg"
                                                        itemprop="image"></div>
                                            </li>
                                            <li>
                                                <div class="wrk-gal-nv-itm"><img style="width: 80px; height: 60px;"
                                                        src="assets\images\latest product\2.jpg" alt="2.jpg"
                                                        itemprop="image"></div>
                                            </li>
                                            <li>
                                                <div class="wrk-gal-nv-itm"><img style="width: 80px; height: 60px;"
                                                        src="assets\images\latest product\3.jpg" alt="3.jpg"
                                                        itemprop="image"></div>
                                            </li>
                                            <li>
                                                <div class="wrk-gal-nv-itm"><img style="width: 80px; height: 60px;"
                                                        src="assets\images\latest product\4.jpg" alt="4.jpg"
                                                        itemprop="image"></div>
                                            </li>
                                            <li>
                                                <div class="wrk-gal-nv-itm"><img style="width: 80px; height: 60px;"
                                                        src="assets\images\latest product\5.jpg" alt="5.jpg"
                                                        itemprop="image"></div>
                                            </li>
                                            <li>
                                                <div class="wrk-gal-nv-itm"><img style="width: 80px; height: 60px;"
                                                        src="assets\images\latest product\6.jpg" alt="6.jpg"
                                                        itemprop="image"></div>
                                            </li>
                                        </ul>
                                    </div><!-- Work Gallery Wrap -->
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-5 col-lg-5">
                                <div class="wdgt-bx">
                                    <h5 style="font-size: 1.3em;" itemprop="headline">About Technofire</h5>
                                    <p itemprop="description">Firebrigade Team all at once, conec tetur adipisicing
                                        elit, sed do eiusd tempor incididunt ut labore dolore magna aliqua tempor.</p>
                                    <div class="loc-mp" id="loc-mp"></div>
                                    <span><i class="fas fa-map-marker-alt theme-clr"></i>Find us on Map</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Data -->
        </div>
    </div>

    <div class="btm-br drk-bg">
        <div class="container">
            <div class="cpyrgt float-left">
                <p itemprop="description"><a href="#" title="" itemprop="url">Technofire</a> &copy; 2021 ALL RIGHTS
                    RESERVED
                    <br>
                    Design & Developed by :: <a href="https://github.com/montasim/"> Ｍｏｎｔａｓｉｍ
                    </a> | <a href="https://github.com/abidhasanpiash/"> Ａｂｉｄ </a>
                </p>
            </div>

            <div class="scl-sbcrb float-right">
                <!--
                    <form class="scribe-frm">
                        <input type="email" placeholder="Enter your email here...">
                        <button type="submit"><i class="fas fa-envelope"></i></button>
                    </form>
                    -->
                <div class="scl3">

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
    <!-- Bottom Bar -->

    <!-- website color changer -->
    <div class="sidepanel">
        <span><i class="fa fa-cog fa-spin"></i></span>
        <div class="color-picker">
            <h6 itemprop="headline">Choose Your Color</h6>
            <a class="color applied" onclick="setActiveStyleSheet('color'); return false;"></a>
            <a class="color2" onclick="setActiveStyleSheet('color2'); return false;"></a>
            <a class="color3" onclick="setActiveStyleSheet('color3'); return false;"></a>
            <a class="color4" onclick="setActiveStyleSheet('color4'); return false;"></a>
        </div>
        <!-- Color Picker -->
    </div>
    <!-- Side Panel -->
</footer>
<!-- End Footer -->

</main>
<!-- Main Wrapper -->
