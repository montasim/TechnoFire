<?php	
	// check if top.inc.php is defined. if not defined it will not work.
	require_once('includes/header.php');

	// Initialize message variable
	$msg = "";

	// If upload button is clicked ...
	if (isset($_POST['upload'])) {

		// Get picture
		$image = $_FILES['image']['name'];
		// get image name
		$name = "".basename($image);
  
		// image file directory
		$target = "upload/".basename($image);
  
		$sql = "INSERT INTO gallery (picture_name,pictures) VALUES ('$name','$image')";
		// execute query
		mysqli_query($db_connection, $sql);
  
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
		  	echo $msg;
		    
		    echo "<script> location.href='gallery.php'; </script>";
            exit;
		}else{
			$msg = "Failed to upload image";
		  echo $msg;
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
                            <h3 style="font-size: 1.5em;" class="card-title">Add Gallery Picture</h3>
                        </div>
                    </div>
                    <div class="card-header"></div>
                    <div class="card-body card-block">
                        <!--define form method-->
                        <form method="post" action="" enctype='multipart/form-data'>
                            <div class="form-group">
                                <label for="catagory" class=" form-control-label">Choose Picture</label>
                                <input type="file" name="image" placeholder="Add your picture" required>
                            </div>

                            <button type="submit" value='Save name' name='upload' class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Submit</span>
                            </button>
                        </form>
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
