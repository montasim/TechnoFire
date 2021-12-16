<section>
    <div class="theme-bg-layer opc9 hlf-parallax">
        <div class="fixed-bg" style="background-image: url(assets/images/resources/2.jpg);"></div>
        <div class="sec-tl text-center">
            <span style="margin-top: 50px;">We provide you with practical actions, advice and resources.</span>
            <h2 style="font-size: 2.3em;" itemprop="headline">Gallery</h2>
        </div>
        <!-- Sec Title -->

        <div class="vdo-sec-wrp">
            <div class="vdo-car owl-carousel">

                <?php 
                    $i=1;

                    while($i<20) {
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
        </div>


        <div style="margin-top: 40px; margin-bottom: 30px;" class="vw-al text-center">
            <a style="font-size: .8em;" class="theme-btn brd-rd5" href="gallery.php" title="" itemprop="url">View
                More</a>
        </div>

        <!-- Video Sec Wrap -->
    </div>
</section>
