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
                <h1 style="font-size: 2.3em;" itemprop="headline">Our Products</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Our Products</li>
                </ol>
            </div>
            <!-- Page Top Wrap -->
        </div>
    </div>
</section>

<section>
    <div style="margin-top: 40px;">
        <div class="container">
            <div class="sec-tl text-center">
                <?php
                    if (isset($_GET['status']) == 'proByCat') {
                                    $catagory_id = $_GET['id'];
                                    $catagories = array();
                                    $catagories[] = mysqli_fetch_assoc(mysqli_query($db_connection, "SELECT * FROM catagory WHERE id = $catagory_id"));
                                }
                ?>
                <h2 style="font-size: 2.2em;" itemprop="headline"><span
                        class="theme-clr"><?php if($catagories[0] != NULL)echo $catagories[0]['catagory'];?> </span>
                </h2>
            </div>
            <!-- Sec Title -->

            <div style="margin-bottom: 30px;" class="tem-sec remove-ext5 text-center">
                <div class="row">
                    <?php
                            if (isset($_GET['status']) == 'proByCat') {
                                $catagory_id = $_GET['id'];
                                $product_data = mysqli_query($db_connection, "SELECT * FROM product WHERE catagory_id = $catagory_id");
                                $products = array();
                                while($product_datas = mysqli_fetch_assoc($product_data)){
                                    $products[] = $product_datas;
                                }
                            }


                            if ($products != NULL ) {
                                #echo count($products[0]['catagory_id']);
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
                            }
                            }
                            
                            else echo "No Product Found!!!";
                    ?>
                </div>
            </div>
            <!-- Team Sec -->
        </div>
        <a class="floter-911" href="#" title="" itemprop="url"><img src="assets/images/911-icon.png" alt="911-icon.png"
                itemprop="image"></a>
    </div>
</section>

<?php
    require_once'includes/footer.php';
    require_once'includes/scripts.php';
?>
