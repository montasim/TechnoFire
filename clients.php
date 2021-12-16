<?php
        require_once'includes/head.php';
        require_once'includes/header.php';
        # Clients section
        $clientImage = mysqli_query($db_connection,"SELECT * FROM `clients` ORDER BY `clients`.`id` ASC");
    ?>

<section>
    <div class="gap black-layer opc8 overlap144">
        <div class="fixed-bg2" style="background-image: url(<?php echo $sliderImage2 ?>);"></div>
        <div class="container">
            <div class="pg-tp-wrp">
                <h1 style="font-size: 2.3em;" itemprop="headline">Our Clients</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Our Clints</li>
                </ol>
            </div><!-- Page Top Wrap -->
        </div>
    </div>
</section>


<section style="margin-top: 40px; margin-bottom: 30px;">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 100%;
        border-radius: 5px;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    img {
        border-radius: 10px 10px 0 0;
    }

    .container {
        padding: 10px 10px;
    }

    </style>

    <div>
        <div class="container">
            <div class="camp-wrp remove-ext5">
                <div class="row">

                    <?php 
                    $i=1;
                        while($row = mysqli_fetch_array($clientImage)):?>
                    <div class="col-md-2 col-sm-6 col-lg-2">
                        <div class="camp-bx">
                            <div class="camp-thmb">
                                <?php
                                        if ($row != null && $i == $row['id']){?>
                                <div class="card">
                                    <div class="container">
                                        <img style=" display: block; width: 800px; background-position: center center;background-repeat: no-repeat;"
                                            src="admin/upload/<?php echo  $row['clients_picture']?>" alt="Client"
                                            itemprop="image">
                                    </div>
                                </div>
                                <br>
                                <?php
                                        $i++;
                                        }
                                        else {
                                            $i++;?>
                                <div class="card">
                                    <div class="container">
                                        <img style=" display: block; width: 800px; background-position: center center;background-repeat: no-repeat;"
                                            src="admin/upload/<?php echo  $row['clients_picture']?>" alt="Client"
                                            itemprop="image">
                                    </div>
                                </div>
                                <br>
                                <?php
                                        }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    require_once'includes/footer.php';
    require_once'includes/scripts.php';
?>
