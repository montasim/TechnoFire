<?php
	// check if top.inc.php is defined. if not defined it will not work.
	require_once('includes/header.php');

	// retriving catagory
	$catagory = '';

	// retriving id
	$id = '';

	// which catagory needed to edit, it will take to that catagory id
	if(isset($_GET['id'])){
		$id = mysqli_real_escape_string($db_connection,$_GET['id']);

		$res = mysqli_query($db_connection,"select * from catagory where id='$id'");

		$row = mysqli_fetch_assoc($res);

		// when edit catagory is clicked it will display that catagory to edit
		$catagory=$row['catagory'];
	}

	if(isset($_POST['catagory'])){
		$catagory=mysqli_real_escape_string($db_connection,$_POST['catagory']);

		// id > 0 when id will retrive from url, when id > 0 update that catagory
		if($id>0){
			$sql="update catagory set catagory='$catagory' where id='$id'";
		}
		// when id < 0 insert catagory
		else{
			$sql="insert into catagory(catagory) values('$catagory')";
		}

		mysqli_query($db_connection,$sql); 
		    echo "<script> location.href='catagory.php'; </script>";
            exit;
	}
?>

<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <h3 style="font-size: 1.5em;" class="card-title">Add Catagory</h3>
                        </div>
                    </div>
                    <div class="card-header"></div>
                    <div class="card-body card-block">
                        <!--define form method-->
                        <form method="post">
                            <div class="form-group">
                                <label for="catagory" class=" form-control-label">Catagory Name</label>
                                <input type="text" value="<?php echo $catagory?>" name="catagory"
                                    placeholder="Enter your catagory name" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-lg btn-info btn-block">
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
