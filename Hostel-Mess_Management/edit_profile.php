<?php
  include('includes/header.php');
  if(isset($_SESSION['email'])){
  include('includes/connection.php');
  $fname = "";
  $lname = "";
  $email = "";
  $password = "";
  $mobile = "";
  $address = "";
  $query = "select * from users where sno = '$_SESSION[uid]'";
  $query_run = mysqli_query($connection,$query);
  while($row = mysqli_fetch_assoc($query_run)){
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $password = $row['password'];
    $mobile = $row['mobile'];
    $address = $row['address'];
  }
  // Update Profile
  if(isset($_POST['update'])){
    $query = "update users set fname='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]',password='$_POST[password]',mobile=$_POST[mobile],address='$_POST[address]' where sno=$_SESSION[uid]";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script type='text/javascript'>
        alert('Profile updated successfully...');
        window.location.href = 'user_dashboard.php';
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
        alert('Updation failed...Plz try again.');
        window.location.href = 'user_dashboard.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Profile</title>
  </head>
  <body>
    <div class="row">
      <div class="col-md-4 m-auto"><br>
        <center><h5><u>Edit Profile</u></h5></center>
        <form action="" method="POST">
          <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $fname; ?>" required="">
          </div>
          <div class="form-group">
            <label for="name">Last Name:</label>
            <input type="text" class="form-control" name="lname" value="<?php echo $lname; ?>" id="lname" required="">
          </div>
          <div class="form-group">
            <label for="name">Email ID:</label>
            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" id="email" required="">
          </div>
          <div class="form-group">
            <label for="name">Password:</label>
            <input type="password" class="form-control" name="password" value="<?php echo $password; ?>" id="password" required="">
          </div>
          <div class="form-group">
            <label for="name">Mobile No:</label>
            <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>" id="mobile" required="">
          </div>
          <div class="form-group">
            <label>Address:</label>
            <textarea name="address" rows="4" cols="60" id="address"><?php echo $address; ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="update">Update</button>&nbsp;&nbsp;
        </form>
      </div>
    </div>
  </body>
</html>
<?php }
else{
  header('location:index.php');
}
