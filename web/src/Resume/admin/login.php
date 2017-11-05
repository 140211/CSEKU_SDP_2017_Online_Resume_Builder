<!DOCTYPE html>
<?php 
	require_once('dbconnect.php');
	session_start();

	// if(isset($_POST['loginSubmit']))
	// {
	// 	$uname=$_POST['uname'];
	// 	$upass =$_POST['upass'];

	// 	// $query="select * from user where uname='".$uname."'";
	// 	$result = mysqli_query($link, "SELECT * FROM user WHERE uname='".$uname."' ' and upass = '" . md5($upass) . "'");
		
	// 	// $row=mysqli_fetch_array($link,$result);
		
	// 	if($row = mysqli_fetch_array($result)) {
			
	// 		$_SESSION['uid']=$row['uid'];
	// 		$_SESSION['uname']=$row['uname'];
	// 		header("Location:index.php");
	// 		// echo "ACCESSED";
	// 	}
	// 	else {
	// 		echo "Incorrect Username/Password.";
	// 	}
	// }

	if (isset($_POST['loginSubmit'])) {

	$uname =$_POST['uname'];
	$upass =$_POST['upass'];

	$result = mysqli_query($link, "SELECT * FROM user WHERE uname = '" . $uname. "' and upass = '".md5($upass)."' ");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['uid'];
		$_SESSION['usr_name'] = $row['uname'];
		//header("Location: information.php");
		header("Location: index.php");
	} else {
		$errormsg = "Incorrect Email or Password!!!";
	}
}
?>


  <!DOCTYPE html>
<html>
<head>
	<title>PHP Login Form</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			 <a class="navbar-brand" href=" # ">Online Resume Builder</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<!-- <fieldset>
					<legend>Login</legend> -->
					
			<label for="inputEmail" class="sr-only">Email address</label>
			<input name="uname" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
			<label for="inputPassword" class="sr-only">Password</label>
			<input name="upass" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="loginSubmit">Sign in</button>
				<!-- </fieldset> -->
			</form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		New User? <a href="register.php">Sign Up Here</a>
		</div>
	</div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
