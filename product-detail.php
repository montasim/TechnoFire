<?php
    require_once'includes/head.php';
    require_once'includes/header.php';
?>

<section>
    <div class="gap black-layer opc8 overlap144">
        <div class="fixed-bg2" style="background-image: url(assets/images/resources/clients_baner.jpg);"></div>
        <div class="container">
            <div class="pg-tp-wrp">
                <h1 style="font-size: 2.3em;" itemprop="headline">Product Description</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Product</a></li>
                    <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Product Catagory</a></li>
                    <li class="breadcrumb-item active">Product Description</li>
                </ol>
            </div><!-- Page Top Wrap -->
        </div>
    </div>
</section>

<?php
        $product_details_array = array();
    if (isset($_GET['status']) == 'proDetailsByID') {
        $product_id = $_GET['product_id'];
        $product_detail = mysqli_query($db_connection, "SELECT * FROM product WHERE id = $product_id");

        while($product_details = mysqli_fetch_assoc($product_detail)){
            $product_details_array[] = $product_details;
        }
    }
?>
<section>
    <div style="margin-top: 40px;">
        <div class="container">
            <div class="team-detail-wrp">


                <?php 
                if ($product_details_array != NULL ) {
                    #echo count($products[0]['catagory_id']);
                    foreach ($product_details_array as $product_description){
                        echo'
                            <div style="margin-bottom: 40px;" class="team-detail-inr">
                                <div class="row">
                                    <div class="">
                                        <div class="team-detail-thmb brd-rd5"><img src="admin/upload/'.$product_description['product_picture'].'"
                                                alt="team-detail-img.jpg" itemprop="image"></div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-lg-8">
                                        <div class="team-detail-inf">
                                            <div class="team-member-name">
                                            <br>
                                            <br>
                                            <h5 style="font-size: 1.4em; margin-left: 50px;" itemprop="headline">'.$product_description['product_name'].'</h5>
                                            <br>
                                            </div>
                                            <div class="team-detail-inf-inr">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        </div>
                                                        </div>
                                                            <h6 style="font-size:1vw; margin-left: 50px;">Product Description</h6>

                                                            <p style="margin-left: 50px;"> '.$product_description['description'].'</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                }
            ?>

            </div><!-- Team Detail Wrap -->
        </div>
    </div>
</section>

<?php
    require_once'includes/footer.php';
    require_once'includes/scripts.php';
?>
