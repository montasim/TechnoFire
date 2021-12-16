<?php
    require_once'includes/head.php';
    require_once'includes/header.php';
?>

<section>
    <div class="gap black-layer opc8 overlap144">
        <div class="fixed-bg2" style="background-image: url(<?php echo $sliderImage2 ?>);"></div>
        <div class="container">
            <div class="pg-tp-wrp">
                <h1 style="font-size: 2.3em;" itemprop="headline">Our Album</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Gallery</li>
                </ol>
            </div><!-- Page Top Wrap -->
        </div>
    </div>
</section>

<section style="margin-top: 60px; margin-bottom: 60px;">
    <div>
        <div class="container">
            <div class="vdo-sec remove-ext5">
                <div class="row">

                    <?php 
                        $res = mysqli_query($db_connection,"SELECT * FROM `gallery` ORDER BY `gallery`.`id` ASC");
                        while($row = mysqli_fetch_array($res)){
                            if ($row != null){
                                echo
                                    '<div class="col-md-3 col-sm-6 col-lg-3">
                                        <div class="vdo-bx-wrp">
                                            <div class="vdo-bx">
                                                <img style="  display: block; width: 420px; height: 250px;background-position: center center;background-repeat: no-repeat;" src="admin/upload/'.$row["pictures"].'" alt="vdo-img2-3.jpg" itemprop="image" />
                                                <a href="admin/upload/'.$row["pictures"].'" data-fancybox="gallery" title=""
                                                    itemprop="url"><i class="flaticon-play-button"></i></a>
                                            </div>
                                        </div>
                                    </div>';
                            }
                        }
                ?>

                </div>
                <!-- Video Sec -->

                <!-- <div class="pgn-wrp text-center">
                    <ul class="pagination">
                        <li class="page-item prev">
                            <a class="page-link" href="#" itemprop="url"><i class="fas fa-angle-left"></i></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" itemprop="url">1</a>
                        </li>
                        <li class="page-item active"><span>2</span></li>
                        <li class="page-item">
                            <a class="page-link" href="#" itemprop="url">3</a>
                        </li>
                        <li class="pg-lst">....</li>
                        <li class="page-item">
                            <a class="page-link" href="#" itemprop="url">5</a>
                        </li>
                        <li class="page-item next">
                            <a class="page-link" href="#" itemprop="url"><i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div> -->
                <!-- Pagination Wrap -->

            </div>
        </div>
</section>

<?php
    require_once'includes/footer.php';
    require_once'includes/scripts.php';
?>
