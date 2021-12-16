<?php
   // check if top.inc.php is defined. if not defined it will not work.
   require('includes/header.php');

   // if get type from url && id then 
   if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id'])){
      $id=mysqli_real_escape_string($db_connection,$_GET['id']);
      // delete product form database
      mysqli_query($db_connection,"delete from product where id='$id'");
   }

   // "order by id desc" is used to show recent product first
   $res=mysqli_query($db_connection,"select * from product where role=2 order by id desc");
?>

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <h3 style="font-size: 1.5em;" class="card-title">Product</h3>
                        </div>
                        <div class="">
                            <i class="mr-2 fa fa-plus-square"></i>
                            <a href="add_product.php"><strong style="font-size: 1em;" class="card-title">Add
                                    Product</strong></a>
                        </div>
                    </div>

                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <!--width is used for give space ratio for the element-->
                                        <th width="10%">S.No</th>
                                        <th width="30%">Product Name</th>
                                        <th width="10%">Product Picture</th>
                                        <th width="100%">Product Description</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php 
                                 $i=1;
                                 while($row=mysqli_fetch_assoc($res)){
                              ?>

                                    <tr>
                                        <td><?php echo $i?></td>
                                        <td><?php echo $row['product_name']?></td>

                                        <!--for picture picture-->
                                        <td>
                                            <?php
                                                echo "<div id='img_div'>";
                                                echo "<img src='upload\product_picture".$row['product_picture']."' >";
                                                echo "</div>";
                                            ?>
                                        </td>

                                        <td><?php echo $row['description']?></td>
                                        <td>
                                            <a href="add_product.php?id=<?php echo $row['id']?>">Edit</a>
                                            <a href="product.php?id=<?php echo $row['id']?>&type=delete">Delete</a>
                                        </td>
                                    </tr>

                                    <?php 
                                 $i++;
                                 } 
                              ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
   require('includes/footer.php');
?>
