<?php
   // check if top.inc.php is defined. if not defined it will not work.
   require_once('includes/header.php');

   // if get type from url && id then 
   if(isset($_GET['type']) && $_GET['type'] == 'delete' && isset($_GET['id'])){
      // get id for delete from database
      $id = mysqli_real_escape_string($db_connection,$_GET['id']);

      // delete catagory form database
      mysqli_query($db_connection,"delete from catagory where id='$id'");
   }
   
   // "order by id desc" is used to show recent added catagory first
   $res = mysqli_query($db_connection,"select * from catagory order by id desc");
?>

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <h3 style="font-size: 1.5em;" class="card-title">Catagory</h3>
                        </div>
                        <div class="">
                            <i class="mr-2 fa fa-plus-square"></i>
                            <a style="font-size: 1em;" href="add_catagory.php"><strong class="card-title">Add
                                    Catagory</strong></a>
                        </div>
                    </div>

                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <!--width is used for give space ratio for the element-->
                                        <th width="10%">S.No</th>
                                        <th width="40%">Catagory Name</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php 
                                 // give serial number to dummy data
                                 $i=1;
                                 
                                 // retrive dummy data from database
                                 while($row=mysqli_fetch_assoc($res)){
                              ?>

                                    <tr>
                                        <!--for serial no-->
                                        <td><?php echo $i?></td>

                                        <!--for catagory-->
                                        <td><?php echo $row['catagory']?></td>

                                        <!--for edit & delete link-->
                                        <!--when goto add_catagory it will take existing id + 1 with it-->
                                        <td>
                                            <a href="add_catagory.php?id=<?php echo $row['id']?>">Edit</a>
                                            <a href="catagory.php?id=<?php echo $row['id']?>&type=delete">Delete</a>
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
   // check if footer.inc.php is defined. if not defined it will not work.
   require_once('includes/footer.php');
?>
