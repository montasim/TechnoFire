<?php

	// check if top.inc.php is defined. if not defined it will not work.
	require('includes/header.php');

	// retriving product_name
	$product_name='';

	// retriving 	// retriving catagory_id
	$catagory_id='';
	// retriving description
	$description='';
	// retriving id
	$id='';
	// retriving message
	$msg = '';

	// get id from url
	if(isset($_GET['id'])){
		$id=mysqli_real_escape_string($db_connection,$_GET['id']);

		// which employee needed to edit, it will take to that employee id
		$res=mysqli_query($db_connection,"select * from product where id='$id'");

		$row=mysqli_fetch_assoc($res);

		$product_name=$row['product_name'];
		$catagory_id=$row['catagory_id'];
		$description=$row['description'];
	}

	if(isset($_POST['upload'])){
		$product_name=mysqli_real_escape_string($db_connection,$_POST['product_name']);
		$catagory_id=mysqli_real_escape_string($db_connection,$_POST['catagory_id']);
		$description=mysqli_real_escape_string($db_connection,$_POST['description']);
		
		// Get picture
		$product_picture = $_FILES['product_picture']['name'];

		// old product picture
		$old_product_picture = $_POST['old_product_picture'];
  
		// image file directory
		$target = "upload\product_picture".basename($product_picture);

		if($product_picture != ''){
			$product_picture = $_FILES['product_picture']['name'];
		}
		else{
			$product_picture = $old_product_picture;
		}


		if($id > 0){
			// id > 0 when id will retrive from url, when id > 0 update that employee
			$sql="update product set product_name='$product_name',product_picture='$product_picture',catagory_id='$catagory_id',description='$description' where id='$id'";
		}
		else{
			// when id < 0 insert employee
			$sql="insert into product(product_name,product_picture,catagory_id,description,role) values('$product_name','$product_picture','$catagory_id','$description','2')";
		}

		mysqli_query($db_connection,$sql);
  
		if (move_uploaded_file($_FILES['product_picture']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
			echo $msg;
		    
		    echo "<script> location.href='product.php'; </script>";
            exit;
		}
		else {
			$product_picture = $_FILES['product_picture']['name'];
			$msg = "Failed to upload image";
		    
		    echo "<script> location.href='product.php'; </script>";
            exit;
		}
	}
?>
<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <h3 style="font-size: 1.5em;" class="card-title">Add Product</h3>
                        </div>
                    </div>
                    <div class="card-header"></div>
                    <div class="card-body card-block">
                        <form method="post" action="" enctype='multipart/form-data'>
                            <div class="form-group">
                                <label class=" form-control-label">Product Name</label>
                                <input type="text" value="<?php echo $product_name?>" name="product_name"
                                    placeholder="Enter product name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <br>
                                <?php
                                    echo "<div id='img_div'>";
                                    echo "<img style='width: 280px; height: 200px;' src='upload\product_picture".$row['product_picture']."' >";
                                    echo "</div>";
                                ?>
                                <br>
                                <input type="file" name="product_picture" placeholder="Add your product picture">
                                <input type="hidden" name="old_product_picture"
                                    value="<?php echo $row['product_picture']?>">

                                <br>
                                <br>
                                <label class=" form-control-label">Product Catagory</label>
                                <!--department will be dropdown menu-->
                                <select name="catagory_id" required class="form-control">
                                    <option value="">Select Catagory</option>
                                    <?php
											// department will be displayed based on their name
											$res=mysqli_query($db_connection,"select * from catagory order by catagory desc");
											// show department in dropdown. retrive all department from database.
											while($row=mysqli_fetch_assoc($res)){
												if($catagory_id==$row['id']){
													echo "<option selected='selected' value=".$row['id'].">".$row['catagory']."</option>";
												}else{
													echo "<option value=".$row['id'].">".$row['catagory']."</option>";
												}
											}
											?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class=" form-control-label">Product Details</label>
                                <input type="text" value="<?php echo $description?>" name="description"
                                    placeholder="Enter product details" class="form-control" required>
                            </div>

                            <?php 
										// if user enter as admin then it will show only  
										if($_SESSION['ROLE']==1){
									?>

                            <button type="submit" value='Save name' name='upload' class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Upload</span>
                            </button>

                            <?php 
										} 
									?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	require('includes/footer.php');
?>
