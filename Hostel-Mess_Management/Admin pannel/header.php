<?php
	session_start();
	if(isset($_SESSION['email'])){
?>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg" style="background-color:#194350;">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><h3 style="color:white;">Mess Management System</h3></a>
		    <ul class="nav navbar-nav navbar-center">
					<li><span style="color:white;"><?php echo $_SESSION['fname'] . " ". $_SESSION['lname'];?></span></li>
					<li class="nav-item">
		        <a type="button" href="logout.php" class="btn btn btn-warning" id="admin_login_button">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav>
</body>
</html>
<?php }
else{
  header('location:../index.php');
}
