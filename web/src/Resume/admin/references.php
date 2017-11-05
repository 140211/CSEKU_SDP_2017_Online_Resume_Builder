<?php
	$page="references";
	require("header.php");
	
	if(isset($_POST['addemp-submit'])){
		$query="insert into reference(Name, Designation, Institute, contact_number, email) values('".$_POST['addemp-name']."','".$_POST['addemp-designation']."','".$_POST['addemp-institute']."','".$_POST['addemp-number']."','".$_POST['addemp-email']."')";
		mysqli_query($link,$query) or die("Error inserting data.".mysqli_error($link));
	}
	if(isset($_POST['emp-update'])){
		$query="update reference set Name='".$_POST['emp-from']."', Designation='".$_POST['emp-to']."', Institute='".$_POST['emp-designation']."', contact_number='".$_POST['emp-description']."',email='".$_POST['emp-from']."' where refId=1";
		mysqli_query($link,$query) or die("Error updating data.".mysqli_error($link));
	}
    //'".$_POST['refId']."'

?>

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="employment">
							<button class="btn btn-success pull-right" data-toggle="modal" data-target="#employmentModal">Add new References</button>
							<table class="table">
								<thead>
								<tr>
									<th>Name</th>
									<th>Designation</th>
									<th>Institute</th>
									<th>contact_number</th>
									<th>email</th>
									<th width="150px"></th>
								</tr>
								</thead>
								<tbody>
								<?php
									$query="select * from reference";
									$result=mysqli_query($link,$query) or die("Error fetching data.".mysqli_error($link));									
									while($empdetails=mysqli_fetch_assoc($result))
									{
								?>
								<tr>
									<td class="from"><?php echo $empdetails['Name']; ?></td>
									<td class="to"><?php echo $empdetails['Designation']; ?></td>
									<td class="company"><?php echo $empdetails['Institute']; ?></td>
									<td class="designation"><?php echo $empdetails['contact_number']; ?></td>
									<td class="description"><?php echo $empdetails['email']; ?></td>
									<td>
										<button class="btn btn-success" data-toggle="modal" data-target="#employmentEditModal" empid="<?php echo $empdetails['refId']; ?>">Edit</button>
										<button class="btn btn-danger" title="Delete"><span class="glyphicon glyphicon-trash"></span></button>
									</td>
								</tr>								
								<?php
									}
									mysqli_free_result($result);
								?>
							
								</tbody>
							</table>
						</div>
					</div>
		
		<div class="modal fade" id="employmentModal" tabindex="-1" role="dialog" aria-labelledby="employmentModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="employmentModalLabel">Add Employment</h4>
			  </div>
			  <form method="post">
			  <div class="modal-body">
				  <div class="form-group">
					<label for="addemp-name" class="control-label">Name:</label>
					<input type="text" class="form-control" id="addemp-from" name="addemp-from">
				  </div>
				  <div class="form-group">
					<label for="addemp-designation" class="control-label">Designation:</label>
					<input type="text" class="form-control" id="addemp-to" name="addemp-to">
				  </div>
				  <div class="form-group">
					<label for="addemp-institute" class="control-label">Institute:</label>
					<input type="text" class="form-control" id="addemp-company" name="addemp-company">
				  </div>
				  <div class="form-group">
					<label for="addemp-number" class="control-label">contact_number:</label>
					<input type="text" class="form-control" id="addemp-designation" name="addemp-designation">
				  </div>
				  <div class="form-group">
					<label for="addemp-email" class="control-label">email:</label>
					<textarea class="form-control" id="addemp-description" name="addemp-description"></textarea>
				  </div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary" name="addemp-submit">Add</button>
			  </div>
			  </form>
			</div>
		  </div>
		</div>
		
		<div class="modal fade" id="employmentEditModal" tabindex="-1" role="dialog" aria-labelledby="employmentEditModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="employmentEditModalLabel">Edit Employment</h4>
			  </div>
			  <form method="post">
			  <input type="hidden" id="empid" name="empid" value="">
			  <div class="modal-body">
				  <div class="form-group">
					<label for="emp-from" class="control-label">Name:</label>
					<input type="text" class="form-control" id="emp-from" name="emp-from">
				  </div>
				  <div class="form-group">
					<label for="emp-to" class="control-label">Designation:</label>
					<input type="text" class="form-control" id="emp-to" name="emp-to">
				  </div>
				  <div class="form-group">
					<label for="emp-designation" class="control-label">Institute:</label>
					<input type="text" class="form-control" id="emp-designation" name="emp-designation">
				  </div>
				  <div class="form-group">
					<label for="emp-description" class="control-label">contact_number:</label>
					<label for="emp-description" class="control-label">email:</label>
					<textarea class="form-control" id="emp-description" name="emp-description"></textarea>
				  </div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary" name="emp-update">Update</button>
			  </div>
			  </form>
			</div>
		  </div>
		</div>
		
		
		
		
			 		
<?php
	require("footer.php");
?>	