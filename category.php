<?php
    require_once'includes/head.php';
    require_once'includes/header.php';
?>

<div class="header-search">
    <span class="srch-cls-btn brd-rd5"><i class="fas fa-times"></i></span>
    <form>
        <input type="text" placeholder="Search here...">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
</div>
<!-- Header Search -->
<section>
    <div class="gap black-layer opc8 overlap144">
        <div class="fixed-bg2" style="background-image: url(assets/images/resources/clients_baner.jpg);">
        </div>
        <div class="container">
            <div class="pg-tp-wrp">
                <h1 style="font-size: 2.3em;" itemprop="headline">Category</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Category</li>
                </ol>
            </div>
            <!-- Page Top Wrap -->
        </div>
    </div>
</section>



<section>
    <div style="margin-top: 40px;">
        <?php
            $catagory_name = mysqli_query($db_connection,"select * from catagory order by catagory asc");
            while($catagory_row = mysqli_fetch_assoc($catagory_name)){
                $catagory_id = $catagory_row['id'];
                $product_data = mysqli_query($db_connection, "SELECT * FROM product WHERE catagory_id = $catagory_id");
                $products = array();
                while($product_datas = mysqli_fetch_assoc($product_data)){
                    $products[] = $product_datas;
                }
        ?>
        <div class="container">

            <?php
                if ($products != NULL ) {
                    echo '<div class="sec-tl text-left">
                            <a href="products-by-category.php?status=proByCat&&id='.$catagory_row['id'].'">
                    
                            <h4 style="font-size: 1.7em;" itemprop="headline"><span
                                class="theme-clr">'. $catagory_row['catagory'].'</span>
                            </h4>
                            </a>


                        </div>';
            ?>

            <!-- Sec Title -->

            <div class="tem-sec remove-ext5 text-center">
                <div class="row" style="margin-bottom: 80px;">
                    <?php
                        # echo count($products);
                        
                        echo '<br>';
                        $count = 1;
                        foreach ($products as $product){
                            echo'
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="tm-bx">
                                        <div class="tm-thmb">
                                            <a href="product-detail.php?status=proDetailsByID&&product_id='.$product["id"].'" title="" itemprop="url"><img style="width: 420px; height: 260px;background-position: center center;background-repeat: no-repeat;" src="admin/upload/'.$product['product_picture'].'" alt="tm-img1.jpg" itemprop="image"></a>
                                        </div>
                                        <div class="tm-inf">
                                        <h6 style="font-size: 1em;"><a href="product-detail.php?status=proDetailsByID&&product_id='.$product["id"].'" title="" itemprop="url">'.$product['product_name'].'</a></h6>
                                        </div>
                                    </div>
                                </div>
                            ';
                            $count = $count+1;
                            if ($count>3){
                                echo'
                                    <div class="col-md-4 col-sm-6 col-lg-3">
                                        <div class="tm-bx">
                                            <div>
                                            <a style="height: 45px; width: 120px; font-size: .8em; position: block; right: auto; top: auto; bottom: auto; left: auto;" class="theme-btn brd-rd5" href="   products-by-category.php?status=proByCat&&id='.$catagory_row['id'].'   " "title="" itemprop="url"> More </a>
                                            </div>
                                        </div>
                                    </div>
                                ';
                                break;
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <!-- Team Sec -->
        </div>
        <?php 
            } 
        ?>



        <a class="floter-911" href="#" title="" itemprop="url"><img src="assets/images/911-icon.png" alt="911-icon.png"
                itemprop="image"></a>
    </div>
</section>

<?php
    require_once'includes/footer.php';
    require_once'includes/scripts.php';
?>
