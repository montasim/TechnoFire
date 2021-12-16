<?php
	// check if top.inc.php is defined. if not defined it will not work.
	require('includes/header.php');

	// retriving website_name
	$website_name = '';

	// retriving slogan
	$slogan = '';

	// retriving email
	$email = '';

	// retriving mobile
	$mobile = '';

	// retriving address
	$address = '';

	// retriving linkedin
	$linkedin = '';

	// retriving twitter
	$twitter = '';

	// retriving facebook
	$facebook = '';

	// retriving instagram
	$instagram = '';

	// retriving id
	$id = '';

	// retriving message
	$msg = '';

	// get id from url
	if(isset($_GET['id'])){
		$id = mysqli_real_escape_string($db_connection,$_GET['id']);

		// which settings needed to edit, it will take to that settings id
		$res = mysqli_query($db_connection,"select * from settings where id = '$id'");

		$row = mysqli_fetch_assoc($res);

		$website_name = $row['website_name'];
		$slogan = $row['slogan'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		$address = $row['address'];
		$linkedin = $row['linkedin'];
		$twitter = $row['twitter'];
		$facebook = $row['facebook'];
		$instagram = $row['instagram'];
	}

	if(isset($_POST['upload'])){
		$website_name = mysqli_real_escape_string($db_connection,$_POST['website_name']);
		$slogan = mysqli_real_escape_string($db_connection,$_POST['slogan']);
		$email = mysqli_real_escape_string($db_connection,$_POST['email']);
		$mobile = mysqli_real_escape_string($db_connection,$_POST['mobile']);
		$address = mysqli_real_escape_string($db_connection,$_POST['address']);
		$linkedin = mysqli_real_escape_string($db_connection,$_POST['linkedin']);
		$twitter = mysqli_real_escape_string($db_connection,$_POST['twitter']);
		$facebook = mysqli_real_escape_string($db_connection,$_POST['facebook']);
		$instagram = mysqli_real_escape_string($db_connection,$_POST['instagram']);

		// Get picture
		$image = $_FILES['image']['name'];

		// old website logo
		$old_website_logo = $_POST['old_website_logo'];
  
		// image file directory
		$target = "../assets/images".basename($image);

		if($image != ''){
			$image = $_FILES['image']['name'];
		}
		else{
			$image = $old_website_logo;
		}


		if($id > 0){
			// id > 0 when id will retrive from url, when id > 0 update that settings
			$sql = "update settings set website_name='$website_name',logo='$image',slogan='$slogan',email='$email',mobile='$mobile',address='$address',linkedin='$linkedin',twitter='$twitter',facebook='$facebook',instagram='$instagram' where id='$id'";
		}
		else{
			// when id < 0 insert settings
			$sql = "insert into settings(website_name,logo,slogan,email,mobile,address,linkedin,twitter,facebook,instagram,role) values('$website_name','$image','$slogan','$email','$mobile','$address','$linkedin','$twitter','$facebook','$instagram','2')";
		}

		mysqli_query($db_connection,$sql);
  
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
			echo $msg;
		    
		    echo "<script> location.href='settings.php'; </script>";
            exit;
		}
		else {
			$msg = "Failed to upload image";
		  	//echo $msg;
		    
		    echo "<script> location.href='settings.php'; </script>";
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
                        <h3 style="font-size: 1.5em;" class="card-title">Edit Settings</h3>
                    </div>
                    <div class="card-header"></div>
                    <div class="card-body card-block">
                        <form method="post" action="" enctype='multipart/form-data'>
                            <div class="form-group">
                                <label class=" form-control-label">Website Name</label>
                                <input type="text" value="<?php echo $website_name?>" name="website_name"
                                    placeholder="Enter website name" class="form-control">
                            </div>

                            <div class="form-group">
                                <br>
                                <?php
											echo "<div id='img_div'>";
											echo "<img style='width: 280px; height: 200px;' src='upload".$row['logo']."' >";
											echo "</div>";
								?>
                                <br>
                                <label for="catagory" class=" form-control-label">Choose Website Logo</label>
                                <input type="file" name="image" placeholder="Add your website logo">
                                <input type="hidden" name="old_website_logo" value="<?php echo $row['logo']?>">
                            </div>

                            <div class="form-group">
                                <label class=" form-control-label">Slogan</label>
                                <input type="text" value="<?php echo $slogan?>" name="slogan"
                                    placeholder="Enter website slogan" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class=" form-control-label">Email</label>
                                <input type="email" value="<?php echo $email?>" name="email"
                                    placeholder="Enter website email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class=" form-control-label">Mobile</label>
                                <input type="text" value="<?php echo $mobile?>" name="mobile"
                                    placeholder="Enter website mobile" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class=" form-control-label">Address</label>
                                <input type="text" value="<?php echo $address?>" name="address"
                                    placeholder="Enter website address" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class=" form-control-label">Linkedin</label>
                                <input type="text" value="<?php echo $linkedin?>" name="linkedin"
                                    placeholder="Enter linkedin link" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class=" form-control-label">Twitter</label>
                                <input type="text" value="<?php echo $twitter?>" name="twitter"
                                    placeholder="Enter twitter link" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class=" form-control-label">Facebook</label>
                                <input type="text" value="<?php echo $facebook?>" name="facebook"
                                    placeholder="Enter facebook link" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class=" form-control-label">Instagram</label>
                                <input type="text" value="<?php echo $instagram?>" name="instagram"
                                    placeholder="Enter instagram link" class="form-control">
                            </div>

                            <?php 
										// if user enter as admin then it will show only  
										if($_SESSION['ROLE']==1){
									?>

                            <button type="submit" value='Save name' name='upload' class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Submit</span>
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
</div>

<?php
	require('includes/footer.php');
?>
