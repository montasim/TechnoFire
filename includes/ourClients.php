<?php 
    # config file
    $db_connection = mysqli_connect('localhost','root','','technofire');
    # Clients section
    $clientImage = mysqli_query($db_connection,"SELECT * FROM `clients` ORDER BY `clients`.`id` ASC");
?>

<section>

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

            <div class="sec-tl text-center">
                <span style="margin-top: 30px;">Accident brings tears, fire safety brings cheers.</span>
                <h4 itemprop="headline">Our <span class="theme-clr">Clients</span></h4>
            </div>
            <!-- Sec Title -->

            <div class="camp-wrp remove-ext5">
                <div class="row">
                    <?php 
                    $i=1;
                        while($row = mysqli_fetch_array($clientImage)):?>
                    <div class="col-md-2 col-sm-6 col-lg-2">
                        <div class="camp-bx">
                            <div class="camp-thmb">
                                <?php
                                        if ($row != null && $i == $row['id'] && $i<=6){?>
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
                                        }?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>

                    <div style="margin-top: -50px; margin-bottom: 75px;" class="vw-al text-center">
                        <a style="font-size: .8em;" class="theme-btn brd-rd5" href="clients.php" title=""
                            itemprop="url">View More</a>
                    </div>
                </div>
            </div>
            <!-- Campaign Wrap -->
        </div>
    </div>
</section>
