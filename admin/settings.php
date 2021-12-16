<?php
   // check if top.inc.php is defined. if not defined it will not work.
   require('includes/header.php');

   // if get type from url && id then 
   if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id'])){
      $id=mysqli_real_escape_string($db_connection,$_GET['id']);

      // delete employee form database
      mysqli_query($db_connection,"delete from settings where id='$id'");
   }

   // only user can see employee list
   // "order by id desc" is used to show recent employee first
   $res=mysqli_query($db_connection,"select * from settings where role=2 order by id desc");
?>


<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <h3 style="font-size: 1.5em;" class="card-title">Settings</h3>
                        </div>
                    </div>

                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <!--width is used for give space ratio for the element-->
                                        <th width="30%">Website Name</th>
                                        <th width="50%">Logo</th>
                                        <th width="80%">Slogan</th>
                                        <th width="20%">Contact Email</th>
                                        <th width="20%">Mobile</th>
                                        <th width="100%">Office Address</th>
                                        <th width="100%">Linkedin</th>
                                        <th width="100%">Twitter</th>
                                        <th width="100%">Faebook</th>
                                        <th width="100%">Instagram</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php 
                                 $i = 1;
                                 while($row=mysqli_fetch_assoc($res)){
                              ?>
                                    <tr>
                                        <td><?php echo $row['website_name']?></td>

                                        <!-- Image -->
                                        <td>
                                            <?php
                                          echo "<div id='img_div'>";
                                          echo "<img src='../assets/images".$row['logo']."' >";
                                          echo "</div>";
                                       ?>
                                        </td>

                                        <td><?php echo $row['slogan']?></td>
                                        <td><?php echo $row['email']?></td>
                                        <td><?php echo $row['mobile']?></td>
                                        <td><?php echo $row['address']?></td>
                                        <td><?php echo $row['linkedin']?></td>
                                        <td><?php echo $row['twitter']?></td>
                                        <td><?php echo $row['facebook']?></td>
                                        <td><?php echo $row['instagram']?></td>

                                        <td>
                                            <a href="add_settings.php?id=<?php echo $row['id']?>">Edit</a>
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
