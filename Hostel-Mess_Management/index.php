<?php
	session_start();
  if(isset($_POST['login'])){
    include('includes/connection.php');
    $query = "select * from users where email = '$_POST[email]' AND password = '$_POST[password]'";
  	$query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
			$_SESSION['email'] = $_POST['email'];
			while($row = mysqli_fetch_assoc($query_run)){
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['uid'] = $row['sno'];
			}
      echo "<script type='text/javascript'>
      	window.location.href = 'user_dashboard.php';
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
      	alert('Please enter correct email and password.');
      	window.location.href = 'index.php';
      </script>";
    }
  }

  if(isset($_POST['register'])){
    include('includes/connection.php');
    $nim=$_POST['email'];
    $u="SELECT email FROM users WHERE email='$nim' ";
    $uu=mysqli_query($connection,$u);
    if(mysqli_num_rows($uu) > 0)
    {
      echo "<script type='text/javascript'>
      alert('User Exists.');
      window.location.href = 'index.php';
    </script>";
    }
    
    else{
    $query = "insert into users values(null,'$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]',0)";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script type='text/javascript'>
        alert('Registeration successfully...');
        window.location.href = 'index.php';
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
        alert('Registeration failed...Plz try again.');
        window.location.href = 'index.php';
      </script>";
    }
    }
  }

	if(isset($_POST['admin_login'])){
    include('includes/connection.php');
    $query = "select * from admins where email = '$_POST[email]' AND password = '$_POST[password]'";
  	$query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
			$_SESSION['email'] = $_POST['email'];
			while($row = mysqli_fetch_assoc($query_run)){
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['email'] = $row['email'];
			}
      echo "<script type='text/javascript'>
      	window.location.href = 'admin pannel/admin_dashboard.php';
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
      	alert('Please enter correct email and password.');
      	window.location.href = 'index.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <!-- Bootsrap Files -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/juqery_latest.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
		<!-- CSS Files -->
		<link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript">
      function resetData(){
        document.getElementById('fname').value = "";
        document.getElementById('lname').value = "";
        document.getElementById('email').value = "";
        document.getElementById('password').value = "";
        document.getElementById('mobile').value = "";
        document.getElementById('address').value = "";
      }
    </script>
  </head>
  <body style="background:url('images/mess-img3.jpg');">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color:#194350;">
  		<div class="container-fluid">
  			<a class="navbar-brand" href="index.php"><h3 style="color:white;">Hostel-Mess Management System</h3></a>
  		    <ul class="nav navbar-nav navbar-center">
  		      <li class="nav-item">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login_modal" id="login_button">Login</button>
  		      </li>
  					<li class="nav-item">
  		        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#register_modal" id="register_button">Register</button>
  		      </li>
  					<li class="nav-item">
  		        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#admin_login_modal" id="admin_login_button">Admin Login</button>
  		      </li>
  		    </ul>
  		</div>
  	</nav><br><br><br>
    <div class="container">
      <!-- LOGIN MODAL -->
      <div class="modal fade" id="login_modal">
        <div class="modal-dialog">
          <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="email">Email:</label>
              <input class="form-control" type="text" name="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input class="form-control" type="password" name="password" placeholder="Your Password" required>
            </div>
            <button class="btn btn-primary" type="submit" name="login">Login</button><br>
          </form>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </div>
      </div>
    </div>
    <!-- Register Modal  -->
    <div class="modal fade" id="register_modal">
      <div class="modal-dialog">
        <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Registeration Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form action="" method="POST">
          <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" name="fname" placeholder="Enter First Name" id="fname" required="">
          </div>
          <div class="form-group">
            <label for="name">Last Name:</label>
            <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" id="lname" required="">
          </div>
          <div class="form-group">
            <label for="name">Email ID:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email ID" id="email" required="">
          </div>
          <div class="form-group">
            <label for="name">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password" id="password" required="">
          </div>
          <div class="form-group">
            <label for="name">Mobile No:</label>
            <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No" id="mobile" required="">
          </div>
          <div class="form-group">
            <label>Address:</label>
            <textarea name="address" rows="4" cols="60" placeholder="Enter Address Here..." id="address"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="register">Register</button>&nbsp;&nbsp;
          <button type="button" class="btn btn-danger" name="reset" onclick="resetData()" >Reset</button>
        </form>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  </div>
	<!-- Admin LOGIN MODAL -->
	<div class="modal fade" id="admin_login_modal">
		<div class="modal-dialog">
			<div class="modal-content">
		<!-- Modal Header -->
		<div class="modal-header">
			<h4 class="modal-title">Admin Login</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<!-- Modal body -->
		<div class="modal-body">
			<form action="" method="post">
				<div class="form-group">
					<label for="email">Email:</label>
					<input class="form-control" type="text" name="email" placeholder="Your Email" required>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input class="form-control" type="password" name="password" placeholder="Your Password" required>
				</div>
				<button class="btn btn-primary" type="submit" name="admin_login">Login</button><br>
			</form>
		</div>
		<!-- Modal footer -->
		<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
		</div>
	</div>
</div>
</body>
</html>
