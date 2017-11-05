<?php
	$page="information";
	require("header.php");
	// require_once("dbconnect.php");


	if(isset($_POST['profilePicSubmit'])) {
		$target = "../images/".$_FILES['profilepic']['name'];
		$datatarget = "images/".$_FILES['profilepic']['name'];
		if(!move_uploaded_file($_FILES['profilepic']['tmp_name'],$target))
		{
			echo "Sorry can't upload file....";	
		}
		else
		{			
			// $query="INSERT INTO personal(uid,image, fname, lname, designation, phone, email, website) VALUES ( '".$_SESSION['usr_id']."', '".$datatarget."','','','','','','')";

			// mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));

			echo "File upload successful !";
		}
	}
	// if(isset($_POST['fName'])) {
	// 	$fname=$_POST['fName'];
	//  	$lname=$_POST['lName'];
	//  	$designation=$_POST['designation'];
		
	//  	$query="update personal set fname='$fname', lname='$lname', designation ='$designation' where uid='".$_SESSION['usr_id']."'";
	//  	mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
	//  }
	
	if(isset($_POST['contactInfo'])) {

		$fname=$_POST['fName'];
		$lname=$_POST['lName'];
		$designation=$_POST['designation'];

		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$web=$_POST['web'];

		$query="INSERT INTO personal(uid, image, fname, lname, designation, phone, email, website) VALUES ('".$_SESSION['usr_id']."' , '".$datatarget."','".$fname."','".$lfname."','".$designation."','".$phone."','".$email."','".$web."' )";
		
		// $query="update personal set fname='$fname', lname='$lname', designation='$designation', phone='$phone', email='$email', website='$web' where uid='".$_SESSION['usr_id']."' ";
		mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
		}
	

	if(isset($_POST['basicInfo'])) {
		$pagedata=$_POST['info'];
		$query="INSERT INTO pages(pageid, uid, data) VALUES ('','".$_SESSION['usr_id']."','".$pagedata."')" ;
		
		mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
	}

	if(isset($_POST['social'])) {
		$facebook=$_POST['facebook'];
		$twitter=$_POST['twitter'];
		$googleplus=$_POST['googleplus'];
		$instagram=$_POST['instagram'];
		$query="INSERT INTO social(uid, facebook, twitter, googleplus, instagram) VALUES ( '".$_SESSION['usr_id']."','".$facebook."','".$twitter."','".$googleplus."','".$instagram."') " ;
		
		mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
	}
?>
 				<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<form method="post" enctype="multipart/form-data" class="form-inline">
						<div class="form-group ">
							<!-- <img src="../<?php echo $personaldetails['image']; ?>" class="img-thumbnail"/> -->
						</div>
						<div class="form-group ">
							<input id="profilePhotoIn" type="file" name="profilepic">
							
						</div>
					</form>
				</div>
				<div class="col-md-5 col-md-offset-1">
				<form method="post">
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">First Name</span>
						<input type="text" class="form-control" name="fName" value=" ">
					  </div>
					</div>
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">Last Name</span>
						<input type="text" class="form-control" name="lName" value=" ">
					  </div>
					</div>
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">Designation</span>
						<input type="text" class="form-control" name="designation" value=" ">
					  </div>
					</div>
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">Date of birth</span>
						<input type="text" class="form-control" name="designation" value=" ">
					  </div>
					</div>
				</form>
				</div>
				<div class="col-md-5">
				<form method="post">
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">Phone Number</span>
						<input type="text" class="form-control" name="phone" value=" ">
					  </div>
					</div>
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">Blood Group</span>
						<input type="text" class="form-control" name="phone" value=" ">
					  </div>
					</div>
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">Mail ID</span>
						<input type="text" class="form-control" name="email" value=" ">
					  </div>
					</div>
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">Website</span>
						<input type="text" class="form-control" name="web" value=" ">
					  </div>
					</div>
					<div class="form-group clearfix">
						<button type="submit" class="btn btn-success pull-right" name="contactInfo">Insert</button>
					</div>
				</form>
				</div>
			</div>	
			<!-- <div class="row">
				 <?php
					$query="select * from pages ";
					$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
					$homecontent=mysqli_fetch_assoc($result);
					mysqli_free_result($result);
				?>
				<div class="col-md-10 col-md-offset-1">
				<form method="post">
					<h4>Basic Information</h4>
					<div class="form-group">
						<textarea class="form-control" rows="10" name="info" id="myInfo"></textarea>
					</div>
					<div class="form-group clearfix">
						<button type="submit" class="btn btn-success pull-right" name="basicInfo">Insert</button>
					</div>
				</form>
				</div>
			</div>  -->
			<div class="row">
				<!-- <?php
					$query="select * from social where uid=1";
					$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));
					$socialdetails=mysqli_fetch_assoc($result);
					mysqli_free_result($result);
				?> -->
				<div class="col-md-10 col-md-offset-1">
				<form method="post">
					<h4>Education</h4>
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">From Year</span>
						<input type="text" class="form-control" name="facebook" value=" ">
					  </div>
					</div>
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">To Year</span>
						<input type="text" class="form-control" name="twitter" value="">
					  </div>
					</div>
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">college</span>
						<input type="text" class="form-control" name="googleplus" value=" ">
					  </div>
					</div>
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">Description</span>
						<input type="text" class="form-control" name="instagram" value=" ">
					  </div>
					</div>
					<div class="form-group clearfix">
						<button type="submit" class="btn btn-success pull-right" name="social">Insert</button>
					</div>
				</form>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<form method="post">
					<h4>Social Links</h4>
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">Facebook</span>
						<input type="text" class="form-control" name="facebook" value=" ">
					  </div>
					</div>
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">Twitter</span>
						<input type="text" class="form-control" name="twitter" value="">
					  </div>
					</div>
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">Google+</span>
						<input type="text" class="form-control" name="googleplus" value=" ">
					  </div>
					</div>
					<div class="form-group">
					  <div class="input-group">
						<span class="input-group-addon">Linkedin</span>
						<input type="text" class="form-control" name="instagram" value=" ">
					  </div>
					</div>
					<div class="form-group clearfix">
						<button type="submit" class="btn btn-success pull-right" name="social">Insert</button>
					</div>
				</form>
				</div>
			</div>
<?php
	require("footer.php");
?>